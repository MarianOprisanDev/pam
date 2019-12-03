// modal task title change
function modalTitleEdit() {
	let newTaskTitle = document.querySelector('div.open').firstElementChild.children[0].textContent;
	let newTaskDescription = document.querySelector('div.open').firstElementChild.children[1].textContent;
	
	document.querySelector('div.open').lastElementChild.firstElementChild.children[1].setAttribute('value', newTaskTitle);
	document.querySelector('div.open').lastElementChild.firstElementChild.children[2].setAttribute('value', newTaskDescription);
}

function modalDescriptionEdit() {
	let newTaskDescription = document.querySelector('div.open').firstElementChild.children[1].textContent;
	let newTaskTitle = document.querySelector('div.open').firstElementChild.children[0].textContent;
	
	document.querySelector('div.open').lastElementChild.firstElementChild.children[2].setAttribute('value', newTaskDescription);
	document.querySelector('div.open').lastElementChild.firstElementChild.children[1].setAttribute('value', newTaskTitle);
}

// TODO: Merge the functions above is a single function