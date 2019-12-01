<?php

	include('config/db_connection.php');

  // quering all tasks for the user
  // TODO: after implementing login, use the logged user's id
  $sql = 'SELECT id, title, description, completed FROM tasks WHERE user_id = 1 ORDER BY date_created';
  $result = mysqli_query($conn, $sql);

  // fetch the resultin rows as array
  $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  // free result from memory
  mysqli_free_result($result);
  // close db connection
  // mysqli_close($conn);

  // print_r($tasks);

	$taskTitle = $taskDescription = '';
	$projectId = 0;
	$userId = 1;

  $errors = ['task-title'=> '', 'task-description' => '', 'task-project' => ''];

  // Post Check
  if (isset($_POST['submit'])) {
    
    if (empty($_POST['task-title'])) {
      // return error
      $errors['task-title'] = 'You need to add a title for the task';
    } else {
      $taskTitle = $_POST['task-title'];
    }
    
    if (empty($_POST['task-description'])) {
      // return error
      $errors['task-description'] = "The task has no description";
    } else {
      $taskDescription = $_POST['task-description'];
    }

    // echo '<br> Title: ';
    // echo htmlspecialchars($_POST['task-title']);
    // echo '<br> Description: ';
    // echo htmlspecialchars($_POST['task-description']);
    // echo '<br> Project: ';
    // echo htmlspecialchars($_POST['task-project']);
    
    // Check for errors
    if(!array_filter($errors)) {
			// save the task to the database
			// $userId = mysqli_real_escape_string($conn, $userId);
			$taskTitle = mysqli_real_escape_string($conn, $_POST['task-title']);
			$taskDescription = mysqli_real_escape_string($conn, $_POST['task-description']);
			// $projectId = mysqli_real_escape_string($conn, $projectId);

			$sql = "INSERT INTO tasks(user_id, title, description, project_id) VALUES ('$userId', '$taskTitle', '$taskDescription', '$projectId')";
			
			// save to db and check
			if(mysqli_query($conn, $sql)) {
				// success
				// Redirect to index
				header('Location: index.php');
			} else {
				echo 'Query Error: ' . mysqli_error($conn);
			}

    } 

  } // /Post Check

  $title = 'PAM | TaskBoard';
  include('templates/header.php');

  $projects = ['SAM', 'HIM', 'None'];
  // TODO: add current project according with the user's preferences (local storage)
  $current_project = 'None';
?>

  <header>
    <div class="container new-task">
      <form id="addTask" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="white">
        <div class="input-field new-task-title">
          <input id="task-title" name='task-title' type="text" class="validate" value="<?php echo htmlspecialchars($taskTitle); ?>">
          <label for="task-title">Add a Task</label>
          <i class="medium material-icons prefix dropdown-trigger" data-target='projectsDropdown'>playlist_add</i>
          <ul id='projectsDropdown' class='dropdown-content'>
            <?php foreach($projects as $project): ?>
              <li><span onclick="setProject('<?php echo $project; ?>');"><?php echo $project; ?></span></li>
            <?php endforeach; ?>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!">Latest</a></li>
          </ul>
          <div class="red-text"><?php echo $errors['task-title']; ?></div>
        </div>
        <div class="input-field new-task-description">
              <textarea id="task-description" name="task-description" class="materialize-textarea" onblur="addTask();"><?php echo htmlspecialchars($taskDescription); ?></textarea>
              <div class="red-text"><?php echo $errors['task-description']; ?></div>
              <label for="task-description">Description</label>
        </div>
        <input type="text" class="projectName" name="task-project" id="task-project" value="<?php echo $current_project ?>">
        <input type="submit" id="task-submit" class="btn right" value="Submit" name="submit">
      </form>
    </div>
  </header>

  <h5 class="center grey-text">Tasks</h5>
	<div class="container">
    <div class="row">
		
    </div>
		<div class="container">
		  <div class="row">
			  <?php foreach($tasks as $task): ?>
				  <div class="col s6 m3">
						<div class="card hoverable z-depth-1">
							<div class="card-content center">
								<h6><?php echo htmlspecialchars($task['title']); ?></h6>
								<div class="divider" tabindex="-1"></div>
								<div class='card-description'><?php echo htmlspecialchars($task['description']); ?></div>
							</div>
							<div class="card-action right-align">
								<a href="#" class="grey-text">
									More info
									<span class="badge teal"><?php echo $projectId ?></span>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
  </div>

<?php include('templates/footer.php');