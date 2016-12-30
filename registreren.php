<?php
$page_title = 'GIG-Store.com - For your Rockband needs!';
include('includes/header.php');

$registered = 'Registratie voltooid';
if(isset($_POST['submit'])) {
	include_once('includes/database.php');
	extract($_POST);
	if($pass==$passr) {
		$sql = "INSERT INTO WEBSHOP.dbo.GEBRUIKER(GEBRUIKERSNAAM,VOORNAAM,TUSSENVOEGSEL,ACHTERNAAM,STRAATNAAM,HUISNUMMER,POSTCODE,WOONPLAATS,EMAIL,SEXE,WACHTWOORD)
				VALUES('" . $unaam . "','" . $vnaam . "','" . $tv ."', '" . $anaam . "', '" . $straat . "', " . $hn . ",'" . $pc . "','" . $plaats ."', '". $mail . "','" . $geslacht . "', '" . $pass . "')";
		sqlsrv_query($conn, $sql);
		echo $registered;

	} else {
		echo 'Wachtwoorden komen niet overeen.';
	}
}

?>
	<form action="" method="post" enctype="multipart/form-data">
		<!--MAIN CONTENT-->
	<table class="t_accountgeg">
	<tr class= "tr_acc_fac"> 
	<td> 

		<fieldset>
			<legend class= "text_form">Accountgegevens</legend>
			<span class= "text_form">Gebruikersnaam* </span> <br />
			<input class="fields"  name="unaam" type="text" maxlength="30" size="25"><br />
			<span class= "text_form">Wachtwoord* </span> <br />
			<input class="fields" name="pass" type="password" maxlength="30" size="25"><br />
			<span class= "text_form">Herhaal wachtwoord* </span><br />
			<input class="fields" name="passr" type="password" maxlength="30" size="25">
		</fieldset>

	</td>
	</tr>
	</table>
	
	<table class ="t_factuurgeg"> 
	<tr class= "tr_acc_fac">
	<td>
	<form>
		<fieldset>
		<legend class= "text_form"> Factuurgegevens </legend>
			<table class= "factuurgegevens">
				<tr class= "tr_acc_fac">
					<td>
						<select name="geslacht">
							<option value="m"> Dhr. </option>
							<option value="v"> Mevr. </option>
						</select>
					</td>
					<td class= "s_fix"> Voornaam* <br /> 
						<input type="text" name="vnaam" maxlength="30" size="20"> </td>
					<td class= "s_fix"> Tussenv. <br /> 
						<input type="text" name="tv" maxlength="10" size="10"> </td>
					<td class= "s_fix"> Achternaam* <br /> 
						<input type="text" name="anaam" maxlength="30" size="20"> </td>
				</tr>
				<tr class= "tr_acc_fac"> 
					<td class= "text_form"> Emailadres* <br /> 
						<input type="text" name="mail" maxlength="50" size="40">
					</td>
				</tr>
				<tr class= "tr_acc_fac">
					<td class= "text_form"> Straatnaam* <br /> 
						<input type="text" name="straat" maxlength="50" size="20"> </td>
					<td class= "s_fix2"> Huisnummer* <br /> 
						<input type="text" name="hn" maxlength="4"  size="10"> </td>
				</tr>
				<tr class= "tr_acc_fac">
					<td class= "text_form"> Postcode* <br /> 
						<input type="text" name="pc" maxlength="6" size="20"> </td>
					<td class= "s_fix2"> Plaatsnaam* <br />
						<input type="text" name="plaats" maxlength="50" size="20"> </td>
				</tr>
				<tr class= "tr_acc_fac">
					<td class= "text_form"> Telefoon* <br /> 
						<input type="tel" name="tel" maxlength="10" size="20"> </td>
				</tr>
			</table>
		</fieldset>
	</td>
	</tr>
	</table>
	<div class="btnRegister">
	<input type="reset" value="Reset"/>
	<input  type="submit" value="Registreren" name="submit"/>
		</form>
	</div>
		<!--MAIN CONTENT-->
		
		<?php
		include('includes/footer.php');
		?>