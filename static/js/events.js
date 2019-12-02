// modal task title change
function modalTitleEdit() {
	let newTaskTitle = document.querySelector('div.open').firstElementChild.children[0].textContent;
	
	document.querySelector('div.open').lastElementChild.firstElementChild.children[1].setAttribute('value', newTaskTitle);
}

function modalDescriptionEdit() {
	let newTaskDescription = document.querySelector('div.open').firstElementChild.children[1].textContent;
	
	document.querySelector('div.open').lastElementChild.firstElementChild.children[2].setAttribute('value', newTaskDescription);
}