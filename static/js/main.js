// This is the javaScript file for PAM
// alert(1);
console.log('Javascript file loaded.');

function addTask() {
  document.getElementById("addTask").submit();
  document.getElementById("addTask").reset();
}

function setProject(projectName) {
  console.log('You have selected the ' + projectName + ' project.');

  document.getElementById('task-project').value = projectName;

}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
  });