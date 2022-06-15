<?php 
session_start();

	include("includes/connection.php");
	include("includes/functions.php");
	include('includes/header.php');
	$user_data = check_login($con);
	
	if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT *from users WHERE user_id='" . $_SESSION["user_id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($con, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE user_id='" . $_SESSION["user_id"] . "'");
		echo '<script> alert("Heslo úspešne zmenené!")</script>';
    } else
        echo '<script> alert("Tvoje pôvodné heslo nie je správne")</script>';
}
?>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>

<link rel="stylesheet" href="style-ucet.css"></link>


<script>
$(document).ready(function() {
	// Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });  
    } 
});
</script>


	
<div class="container-fluid">
<div class="row ciarka-spacing">




	
	
	
	
	<div class="col-lg-5 container-fluid top-buffer pozadie">
	<h2 class="hlavicka-text"><span class="zl-text"> Vitaj </span>na svojom profile, <span class="text-muted"><?php echo $user_data['user_name']; ?></span>. Sme radi, že si sa u nás registroval.</h2>	
				<p class="lead">Svoje kontaktné údaje by si si mal zapamätať, pretože ich budeš potrebovať na vytvorenie tvojej osobnej karty pri prvej návšteve nášho fitness centra.</p>
				<br><h2 class="hlavicka-text">Pri každej návšteve nášho <span class="zl-text">fitness centra</span> sa budeš musieť legitimovať <span class="text-muted"> svojou kartou.</span></h2>
				<p class="lead">A pokiaľ si budeš chcieť u nás zakúpiť permanentku, bude ti následne pripísaná na osobnú kartu.</p>
				<br><h2 class="hlavicka-text">S <span class="zl-text">permanentkou</span> bude tvoj vstup do fitness  <span class="text-muted"> podstatne rýchlejší.</span></h2>
				<p class="lead">Stačí sa ti len pípnuť pri termináli.<a href="index.php #cennik"> Pozri si ponuku našich permanentiek.</a></p>

	<!--			<h2 class="hlavicka-text"> Vitaj na svojom profile, <span class="text-muted"></span></h2>	
				<p class="lead">Pokiaľ máš nejakú otázku na nás, či na našich trénerov ohľadom tréningu alebo jedálničku, napíš nám. Náš tým spracuje tvoju otázku čo najskôr.</p>

			<form id="contact-form" class="form" action="contactform.php" method="post" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Meno</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Meno" tabindex="1" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="mail" placeholder="E-mail" tabindex="2" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Predmet</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Predmet" tabindex="3">
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="message">Správa</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Správa..." tabindex="4" required></textarea>                                 
              </div>
              <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-start-order">Odoslať</button>
              </div>
			</form> -->
	</div>




	
		  <div class="col-lg-5 container-fluid top-buffer pozadie">
	
				<h2 class="hlavicka-text"> Potrebuješ si <span class="text-muted">zmeniť heslo?</span></h2>
				<p class="lead">Ak si chceš zmeniť heslo, stačí vyplniť formulár nižšie. Najprv zadaj svoje pôvodné heslo, potom tvoje nové heslo, následne ho potvrď a máš to.</p>




			<form name="frmChange" class="form" action="" method="post"  onSubmit="return validatePassword()">
              <div class="form-group">
								<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                  <label class="form-label" for="name">Pôvodné heslo</label>
                  <input type="password" name="currentPassword" class="form-control" id="currentPassword" placeholder="Pôvodné heslo" tabindex="1" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="email">Nové heslo</label>
                  <input type="password" name="newPassword" class="form-control" id="newPassword" placeholder="Nové heslo" tabindex="2" required>
              </div>                            
              <div class="form-group">
                  <label class="form-label" for="subject">Potvrdenie hesla</label>
                  <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Potvrdenie hesla" tabindex="3">
              </div>                            
                  <div class="text-center">
                  <button type="submit" name="submit" value="Zmeniť" class="btn btn-start-order">Zmeniť</button>
              </div>
			</form>

	</div>
	


	

</div>
</div>


