<?php
session_start();
	
	include('includes/connection.php');
	include('includes/functions.php');
	
	//$user_data = check_login($con);

?>

<?php include('includes/header.php'); ?>

<!-- Video -->
<?php include('includes/video.php'); ?>

<!-- Jadro stranky -->
	<!-- Obal na jadro stranky -->
    <div class="container marketingz">
	  
<!-- onas -->
<?php include('includes/onas.php'); ?>
<hr id="cennik" class="ciarka-spacing">

<!-- cennik -->
<?php include('includes/cennik.php'); ?>
<hr  id="otvaracie" class="ciarka-spacing">
<!-- otvaracie -->   

<?php include('includes/otvaracie.php'); ?>
<hr class="ciarka-spacing">

<!-- recenzie -->   
<?php include('includes/kontakt.php'); ?>

	<!-- konec obalu -->
    </div>

<!-- pata stranky -->
<?php include('includes/footer.php'); ?>
