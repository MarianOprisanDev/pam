// Filterable Search Code
// Get Input Element
let searchInput = document.getElementById('search-input');

// Add event listener for the input element
searchInput.addEventListener('keyup', filterTasks);

function filterTasks() {
	// Get value of input
	let filterValue = document.getElementById('search-input').value.toLowerCase();

	// getting the card list
	let items = document.getElementById("tasks-list-collection");

	// get cards
	let strings = items.querySelectorAll('.search-string');

	// Loop through the strings
	for(let i = 0; i < strings.length; i++) {
		// Compare strings
		if (strings[i].firstElementChild.innerHTML.toLowerCase().indexOf(filterValue) > -1) {
			strings[i].parentElement.parentElement.classList.remove('hide');
		} else {
			strings[i].parentElement.parentElement.classList.add('hide');
		}
	}
}
