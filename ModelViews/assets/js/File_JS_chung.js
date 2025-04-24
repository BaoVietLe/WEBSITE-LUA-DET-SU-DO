// Hoạt động của thanh tìm kiếm//
document.addEventListener('DOMContentLoaded', function() {
    const searchInputs = document.getElementById('searchInputs');
    const mainInput = document.getElementById('mainInput');
    const searchForm = document.getElementById('searchForm');
    const suggestion = document.getElementById('suggestion');
    
    // Store search values
    const searchValues = [];
    
    // Function to add a new value tag
    function addValueTag(text) {
      if (!text.trim()) return false;
      
      // Add to searchValues array
      searchValues.push(text.trim());
      
      // Create value tag element
      const valueTag = document.createElement('div');
      valueTag.className = 'search-bar-value-tag';
      
      const valueText = document.createElement('span');
      valueText.className = 'search-bar-value-text';
      valueText.textContent = text.trim();
      
      const removeBtn = document.createElement('button');
      removeBtn.className = 'search-bar-remove-value';
      removeBtn.innerHTML = '×';
      removeBtn.type = 'button';
      
      valueTag.appendChild(valueText);
      valueTag.appendChild(removeBtn);
      
      // Insert before the input
      searchInputs.appendChild(valueTag);
      
      // Clear the input
      mainInput.value = '';
      
      // Attach remove event
      removeBtn.addEventListener('click', function() {
        const index = searchValues.indexOf(valueText.textContent);
        if (index > -1) {
          searchValues.splice(index, 1);
        }
        searchInputs.removeChild(valueTag);
      });
      
      return true;
    }
    
    // Add value when Enter is pressed in the input
    mainInput.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        addValueTag(mainInput.value);
      }
    });
    
    // Handle form submission
    searchForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Add current input value if not empty
      if (mainInput.value.trim()) {
        addValueTag(mainInput.value);
      }
      
      if (searchValues.length > 0) {
        console.log('Search values:', searchValues);
        // Here you would typically handle the search action
        // For example: window.location.href = '/search?q=' + encodeURIComponent(searchValues.join(' '));
      }
    });
    
    // Handle suggestion click
    suggestion.addEventListener('click', function() {
      const suggestionText = suggestion.textContent.replace('Gợi ý: ', '');
      
      // Clear existing values
      while (searchInputs.querySelector('.value-tag')) {
        searchInputs.removeChild(searchInputs.querySelector('.value-tag'));
      }
      searchValues.length = 0;
      
      // Add the entire suggestion as a single value
      addValueTag(suggestionText);
    });
  });