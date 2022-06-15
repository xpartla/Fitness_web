<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css"></link>
    <script src="script.js"></script>
    <title>Robotka</title>

  </head>
  
    <body data-spy="scroll" data-target=".navbar" data-offset="250">

    <nav id="nav" class="navbar sticky-top navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <a class="navbar-brand fuga-l" href="index.php #">
        <img src="img/logo2.svg" width="30" height="30" alt="Logo">
    </a>
    <a class="navbar-brand " href="index.php #">Heavy Fitness</a>
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span>
    </button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">	  
            <li class="nav-item"><a href="index.php #onas" class="nav-link ml-3">O nás </a></li>
            <li class="nav-item"><a href="index.php #cennik" class="nav-link ml-3">Cenník</a></li>
            <li class="nav-item"><a href="index.php #otvaracie" class="nav-link ml-3">Otváracie Hodiny</a></li>
			<li class="nav-item"><a href="index.php #kontakt" class="nav-link ml-3">Kontakt</a></li>
			<li class="nav-item"><a href="slider.php" class="nav-link ml-3">Tréneri </a></li>		  
		    <li class="nav-item"><a href="kariera.php" class="nav-link ml-3">Kariéra </a></li>
			<li class="nav-item"><a href="ucet.php #kontakt" class="nav-link ml-3">Môj účet</a></li>



					<?php
					if (!isset($_SESSION['user_id'])) {
					?>
			<li class="nav-item"><a href="login.php" class="btn btn-outline-primary btn-md my-2 my-sm-0 ml-3" type="submit">Log In</a></li>
					<?php
					}
					?>
					
					<?php
					if (isset($_SESSION['user_id'])) {
					?>
			<li class="nav-item"><a href="logout.php" class="btn btn-outline-warning btn-md my-2 my-sm-0 ml-3" type="submit">Log Out</a></li>
					<?php
					}
					?>
			
          </ul>
        </div>
     
    </nav>