<?php 
session_start();
error_reporting(0);
require_once("db.php");

	//include("functions.php");
	$logPath = "log/heasder_".date("Ymd").".txt";
	error_log("called url: ".date('Ymd His').": ".$_SERVER['REQUEST_URI']."\n", 3, $logPath);
	//$msisdn =$_GET['msisdn'];
	//$_SESSION['msisdn']=$msisdn;
  //include 'header.php';
?> <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Droid Games</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./global.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


</head>

<body>
<div id="preloader"></div>
  <!-- navbar starts from here -->

  <nav class="navbar fixed-top navbar-expand-md" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand animate__animated animate__heartBeat" href="./index.php"><img
          src="./assets/logo/DG-logo-640x120.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">

        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active text-white heading-1 animate__animated animate__bounce effect-box"
              aria-current="page" href="http://35.154.62.230/DROIDGAMESNEW/index.php">HOME</a>
          </li>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <!-- <li class="nav-item">
              <a class="nav-link text-white heading-1 animate__animated animate__bounce effect-box" href="./about.php">ABOUT</a>
            </li>
            &nbsp; &nbsp; &nbsp; &nbsp; -->
          <li class="nav-item">
            <a class="nav-link text-white heading-1 animate__animated animate__bounce effect-box"
              href="http://35.154.62.230/DROIDGAMESNEW/html5.php">HTML5 GAMES</a>
          </li>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <!--<li class="nav-item">
            <a class="nav-link text-white heading-1 animate__animated animate__bounce effect-box"
              href="http://35.154.62.230/DROIDGAMESNEW/android.php">ANDROID GAMES</a>
          </li>-->
          &nbsp; &nbsp; &nbsp; &nbsp;
          <li class="nav-item">
            <a class="nav-link text-white heading-1 animate__animated animate__bounce effect-box"
              href="http://35.154.62.230/DROIDGAMESNEW/subscription.php">MY SUBSCRIPTION</a>
          </li>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <li class="nav-item">
            <a class="nav-link text-white heading-1 animate__animated animate__bounce effect-box"
              href="http://35.154.62.230/DROIDGAMESNEW/terms.php">T&C</a>
          </li>

        </ul>
                 <select name="links" id="" size="1" onchange="window.location.href=this.value;">
<option value="">SELECT</option>
  <option value="http://35.154.62.230/DROIDGAMESNEW/index.php" selected>EN</option>
   <option value="http://35.154.62.230/DROIDGAMESNEW/index_amharic.php">AMR</option>
  <!--<option value="http://35.154.62.230/DROIDGAMESNEW/index.php">PO</option>-->
  
</select>
      </div>
    </div>
  </nav>

  <!-- <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a href="#" class="navbar-brand">DemoTech</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar">
          <ul class="navbar-nav">
              <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">About</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
      </div>
  </nav> -->



  <!-- navbar ends here -->