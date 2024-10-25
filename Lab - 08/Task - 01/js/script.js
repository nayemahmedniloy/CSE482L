document.getElementById('search').addEventListener('input', function() {
    var query = this.value;

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'search.php?q=' + encodeURIComponent(query), true);

    // Set up the callback function
    xhr.onload = function() {
        if (xhr.status === 200) {
            var suggestions = JSON.parse(xhr.responseText);
            var suggestionsContainer = document.getElementById('suggestions');
            suggestionsContainer.innerHTML = '';

            suggestions.forEach(function(name) {
                var div = document.createElement('div');
                div.className = 'suggestion-item';
                div.textContent = name;
                div.onclick = function() {
                    document.getElementById('search').value = name;
                    suggestionsContainer.innerHTML = '';
                };
                suggestionsContainer.appendChild(div);
            });
        }
    };

    xhr.send();
});
