<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="static/css/main.css">
  <title><?= $title ?></title>

</head>

<body>

  <!-- <nav class="white z-depth-0">
    
    <div class="container">
      <a href="/" class="brand-logo pam-logo">PAM</a>
      <a href="#" class="brand-logo grey-text"><?= $title ?></a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="index.php" class="btn pma-add z-depth-0">Tasks</a></li>
        <li><a href="projects.php" class="btn pma-add z-depth-0">Projects</a></li>
      </ul>
    </div>

	</nav> -->
	
	<nav class="white z-depth-0">
    <div class="nav-wrapper">
			<a href="#!" class="brand-logo grey-text text-darken-2"><?= $title ?></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger grey-text text-darken-2"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
				<li><a href="sass.html"><i class="material-icons grey-text text-darken-2">search</i></a></li>
        <li><a href="/index.html"><i class="material-icons grey-text text-darken-2">view_module</i></a></li>
        <li><a href="/index.php"><i class="material-icons grey-text text-darken-2">refresh</i></a></li>
        <li><a href="#!" class="dropdown-trigger" data-target='dropdown-nav-more'><i class="material-icons grey-text text-darken-2">more_vert</i></a></li>
			</ul>
			
			 <!-- vertical dots menu dropdown list -->
			<ul id='dropdown-nav-more' class='dropdown-content'>
				<li><a href="#!">one</a></li>
				<li><a href="#!">two</a></li>
				<li class="divider" tabindex="-1"></li>
				<li><a href="#!">three</a></li>
				<li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
				<li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
			</ul>
	
    </div>
	</nav>
	
	<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

  <main>