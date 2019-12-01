<?php
  $title = 'PAM | TaskBoard';
  include('templates/header.php');

  $projects = ['SAM', 'HIM', 'None'];
  $current_project = 'None';
?>

  <header>
    <div class="container new-task">
      <form action="#" id="addTask" class="white" method="POST">
        <div class="input-field new-task-title">
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Add a Task</label>
          <i class="medium material-icons prefix dropdown-trigger" data-target='projectsDropdown'>playlist_add</i>
          <ul id='projectsDropdown' class='dropdown-content'>
            <?php foreach($projects as $project): ?>
              <li><span onclick="setProject('<?php echo $project; ?>');"><?php echo $project; ?></span></li>
            <?php endforeach; ?>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!">Latest</a></li>
          </ul>
        </div>
        <div class="input-field new-task-description">
              <textarea id="task-description" class="materialize-textarea" onblur="addTask();"></textarea>
              <label for="task-description">Description</label>
        </div>
        <input type="text" class="projectName" name="task-project" id="task-project" value="<?php echo $current_project ?>">
        
      </form>
    </div>
  </header>s

<?php include('templates/footer.php');