<?php
/**
 * DOCX to HTML Parser for News Articles
 * 
 * This script processes DOCX files and extracts content to populate a news article.
 * Requirements: 
 * - PHP 7.4 or higher
 * - PhpOffice/PhpWord library (install via Composer)
 * 
 * Installation:
 * - Run: composer require phpoffice/phpword
 */

// Include Composer autoloader
require '../vendor/autoload.php';

class DocxNewsParser {
    private $docxPath;
    private $htmlTemplate;
    private $outputPath;
    private $extractedContent = [
        'title' => '',
        'date' => '',
        'category' => '',
        'content' => [],
        'images' => []
    ];

    public function __construct($docxPath, $templatePath = 'template.html', $outputPath = 'article.html') {
        $this->docxPath = $docxPath;
        $this->htmlTemplate = file_get_contents($templatePath);
        $this->outputPath = $outputPath;
    }

    /**
     * Main processing function
     */
    public function processDocument() {
        // Extract content from DOCX
        $this->extractContentFromDocx();
        
        // Generate HTML
        $html = $this->generateHtml();
        
        // Save file
        file_put_contents($this->outputPath, $html);
        
        return $this->outputPath;
    }

    /**
     * Extract content from DOCX file
     */
    private function extractContentFromDocx() {
        // Create PhpWord instance
        $phpWord = \PhpOffice\PhpWord\IOFactory::load($this->docxPath);
        
        // Get all sections
        $sections = $phpWord->getSections();
        
        $paragraphCount = 0;
        $firstParagraphText = '';
        
        // Process each section
        foreach ($sections as $section) {
            $elements = $section->getElements();
            
            foreach ($elements as $element) {
                // Handle text elements
                if ($element instanceof \PhpOffice\PhpWord\Element\TextRun || $element instanceof \PhpOffice\PhpWord\Element\Text) {
                    $text = $this->extractTextFromElement($element);
                    
                    if (!empty($text)) {
                        $paragraphCount++;
                        
                        // First paragraph might contain metadata
                        if ($paragraphCount === 1) {
                            $firstParagraphText = $text;
                            
                            // Try to extract title and date from first paragraph
                            $this->extractMetadata($text);
                        } else {
                            $this->extractedContent['content'][] = [
                                'type' => 'paragraph',
                                'content' => $text
                            ];
                        }
                    }
                }
                // Handle images
                elseif ($element instanceof \PhpOffice\PhpWord\Element\Image) {
                    $imageData = $this->extractImageFromElement($element);
                    if ($imageData) {
                        $this->extractedContent['images'][] = $imageData;
                        $this->extractedContent['content'][] = [
                            'type' => 'image',
                            'index' => count($this->extractedContent['images']) - 1
                        ];
                    }
                }
                // Handle tables (simplified)
                elseif ($element instanceof \PhpOffice\PhpWord\Element\Table) {
                    $tableHtml = $this->extractTableFromElement($element);
                    if ($tableHtml) {
                        $this->extractedContent['content'][] = [
                            'type' => 'html',
                            'content' => $tableHtml
                        ];
                    }
                }
            }
        }
        
        // If no title found in metadata, use first paragraph as title
        if (empty($this->extractedContent['title']) && !empty($firstParagraphText)) {
            $this->extractedContent['title'] = $firstParagraphText;
            // Remove the first paragraph from content if it's the title
            if (!empty($this->extractedContent['content'])) {
                array_shift($this->extractedContent['content']);
            }
        }
        
        // Set default category if not found
        if (empty($this->extractedContent['category'])) {
            $this->extractedContent['category'] = 'Quỹ momo vinh danh anh hùng';
        }
        
        // Set default date if not found
        if (empty($this->extractedContent['date'])) {
            $this->extractedContent['date'] = 'Ngày ' . date('d-m-Y') . ': Nội dung mẫu';
        }
    }
    
    /**
     * Extract text from TextRun or Text element
     */
    private function extractTextFromElement($element) {
        $text = '';
        
        if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
            $textRunElements = $element->getElements();
            foreach ($textRunElements as $textElement) {
                if ($textElement instanceof \PhpOffice\PhpWord\Element\Text) {
                    $text .= $textElement->getText();
                }
            }
        } elseif ($element instanceof \PhpOffice\PhpWord\Element\Text) {
            $text = $element->getText();
        }
        
        return trim($text);
    }
    
    /**
     * Extract image from Image element
     */
    private function extractImageFromElement($element) {
        try {
            // Get image data
            $source = $element->getSource();
            $caption = $element->getCaption() ?? '';
            
            // Generate a unique filename
            $filename = 'images/article_' . time() . '_' . mt_rand(1000, 9999) . '.jpg';
            $savePath = dirname($this->outputPath) . '/' . $filename;
            
            // Create directory if not exists
            if (!is_dir(dirname($savePath))) {
                mkdir(dirname($savePath), 0755, true);
            }
            
            // Save image
            if (file_exists($source)) {
                copy($source, $savePath);
                
                return [
                    'filename' => $filename,
                    'caption' => $caption ?: 'Hình ' . (count($this->extractedContent['images']) + 1) . '. Mô tả ảnh vào đây'
                ];
            }
        } catch (\Exception $e) {
            error_log('Error processing image: ' . $e->getMessage());
        }
        
        return null;
    }
    
    /**
     * Extract table and convert to HTML
     */
    private function extractTableFromElement($element) {
        $html = '<table class="article-table">';
        
        // Process rows
        $rows = $element->getRows();
        foreach ($rows as $rowIndex => $row) {
            $html .= '<tr>';
            
            // Process cells
            $cells = $row->getCells();
            foreach ($cells as $cell) {
                $tag = $rowIndex === 0 ? 'th' : 'td';
                $html .= "<{$tag}>";
                
                // Process elements in cell
                $elements = $cell->getElements();
                foreach ($elements as $cellElement) {
                    if ($cellElement instanceof \PhpOffice\PhpWord\Element\TextRun) {
                        $html .= $this->extractTextFromElement($cellElement);
                    }
                }
                
                $html .= "</{$tag}>";
            }
            
            $html .= '</tr>';
        }
        
        $html .= '</table>';
        return $html;
    }
    
    /**
     * Try to extract metadata (title, date, category) from text
     */
    private function extractMetadata($text) {
        // Check for title pattern (all caps or ending with specific characters)
        if (preg_match('/^[A-Z\s\d\p{L}]{10,}$/u', $text) || preg_match('/(THÁNG \d+\/\d+)$/i', $text)) {
            $this->extractedContent['title'] = $text;
            return;
        }
        
        // Check for date pattern
        if (preg_match('/NGÀY\s+(\d{2}-\d{2}-\d{4}):\s+(.+)/i', $text, $matches)) {
            $this->extractedContent['date'] = 'Ngày ' . $matches[1] . ': ' . $matches[2];
            return;
        }
        
        // Check for category pattern
        if (preg_match('/^(QUỸ|TIN|HOẠT ĐỘNG|CHƯƠNG TRÌNH)/i', $text)) {
            $this->extractedContent['category'] = $text;
            return;
        }
    }
    
    /**
     * Generate HTML from extracted content
     */
    private function generateHtml() {
        $articleContent = '';
        
        // Process content elements
        foreach ($this->extractedContent['content'] as $item) {
            if ($item['type'] === 'paragraph') {
                $articleContent .= '<p>' . htmlspecialchars($item['content']) . '</p>' . PHP_EOL;
            } elseif ($item['type'] === 'image' && isset($item['index'])) {
                $imageIndex = $item['index'];
                if (isset($this->extractedContent['images'][$imageIndex])) {
                    $image = $this->extractedContent['images'][$imageIndex];
                    $articleContent .= '<div class="article-image">' . PHP_EOL;
                    $articleContent .= '    <img src="' . htmlspecialchars($image['filename']) . '" alt="' . htmlspecialchars($image['caption']) . '">' . PHP_EOL;
                    $articleContent .= '    <div class="article-caption">' . htmlspecialchars($image['caption']) . '</div>' . PHP_EOL;
                    $articleContent .= '</div>' . PHP_EOL;
                }
            } elseif ($item['type'] === 'html') {
                $articleContent .= $item['content'] . PHP_EOL;
            }
        }
        
        // Replace placeholders in template
        $html = $this->htmlTemplate;
        $html = str_replace('<!-- ARTICLE_TITLE -->', htmlspecialchars($this->extractedContent['title']), $html);
        $html = str_replace('<!-- ARTICLE_DATE -->', htmlspecialchars($this->extractedContent['date']), $html);
        $html = str_replace('<!-- ARTICLE_CATEGORY -->', htmlspecialchars($this->extractedContent['category']), $html);
        $html = str_replace('<!-- ARTICLE_CONTENT -->', $articleContent, $html);
        
        return $html;
    }
}

// Example usage
// Trong hàm processUploadedDocx, điều chỉnh đường dẫn nếu cần
$parser = new DocxNewsParser(
    $uploadedFile, 
    'template.html',  // Đường dẫn đến file template.html
    'output/article_' . time() . '.html'  // Đường dẫn đến thư mục output
);
function processUploadedDocx($uploadedFile) {
    $parser = new DocxNewsParser($uploadedFile, 'template.html', 'output/article_' . time() . '.html');
    $outputFile = $parser->processDocument();
    return $outputFile;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['docx_file'])) {
    try {
        $uploadedFile = $_FILES['docx_file']['tmp_name'];
        $outputFile = processUploadedDocx($uploadedFile);
        echo json_encode(['success' => true, 'file' => $outputFile]);
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload DOCX News Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn {
            background-color: #d30000;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            display: none;
        }
    </style>
</head>
<body>
   <h1>Tải lên file DOCX tin tức</h1>
    <div class="form-container">
        <form method="post" enctype="multipart/form-data" id="upload-form">
            <div class="form-group">
                <label for="docx_file">Chọn file DOCX:</label>
                <input type="file" name="docx_file" id="docx_file" accept=".docx" required>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn">Tải lên và xử lý</button>
            </div>
        </form>
    </div>
    
    <div class="result" id="result">
        <h3>Kết quả:</h3>
        <div id="result-content"></div>
    </div>
    
    <script>
        document.getElementById('upload-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            var formData = new FormData(this);
            
            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var resultDiv = document.getElementById('result');
                var resultContent = document.getElementById('result-content');
                
                resultDiv.style.display = 'block';
                
                if (data.success) {
                    resultContent.innerHTML = 'File đã được xử lý thành công. <a href="' + data.file + '" target="_blank">Xem bài viết</a>';
                } else {
                    resultContent.innerHTML = 'Lỗi: ' + data.error;
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>