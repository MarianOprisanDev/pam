// This is the javaScript file for PAM
// Hiding elements
document.getElementById('task-submit').style.display = 'none';

function addTask() {
  let taskTitle = document.getElementById("task-title");
  let taskDescription = document.getElementById("task-description");

  // if (taskDescription.value == "" || taskTitle.value == "") {
  //   console.log('TODO: add flash message')
  // } else {
  //   // simulate clicking the submit button
  //   document.getElementById("task-submit").click();
  // }
  // document.getElementById("addTask").reset();
  document.getElementById("task-submit").click();
}

function setProject(projectName) {
  console.log('You have selected the ' + projectName + ' project.');

  document.getElementById('task-project').value = projectName;

}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
  });


  console.log('Javascript file loaded.');