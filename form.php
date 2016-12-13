<?php
session_save_path('/home/stud/witkowsp/WWW/htdocs/');
session_start();
if(!isset($_SESSION['zalogowano']) || $_SESSION['zalogowano']!=true){
	header('Location: index.php');
	
}
if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['ur'])) {
     $_SESSION['imie'] = $_POST['imie'];
     $_SESSION['nazwisko'] = $_POST['nazwisko'];
     $_SESSION['ur'] = $_POST['ur'];
     $_SESSION['pesel'] = $_POST['pesel'];
     $_SESSION['wiek'] = $_POST['wiek'];
     $_SESSION['plec'] = $_POST['plec'];
     $_SESSION['kierunek'] = $_POST['kierunek'];
     $_SESSION['plik'] = $_POST['plik'];
     $_SESSION['komentarz'] = $_POST['komentarz'];
 
     $_SESSION['przeslany'] = true;
 
     header('Location: formwyp.php');
   }
   

?>

<!DOCTYPE html>
<html lang="pl"> 

	<head>
		<meta charset="utf-8">
		<title>Formularz</title>
		<link rel="stylesheet" href="formularz.css">
		<script src="myScriptform.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
	</head>
	<body>
	<form method="post" name="form.php" enctype="multipart/form-data" onsubmit="return(sprawdz())" >
		
		<div id="kontener">
		
			<div id="formularz">
			<h1>Formularz</h1>
				Imie: <input type="text" name="imie" onchange="tylkoLitery(value)" id="imieId"/><br/>
				Nazwisko: <input type="text" name="nazwisko" onchange="tylkoLitery(value)" id="nazwiskoId"/><br/>
				Data urodzenia:<input onchange="zmienWiek()" type="date"  name="ur" id="urDat" style="width:147px" required /><br />
				Pesel: <input type="text" id="peselId" name="pesel" pattern=".{11,11}" required title="pesel ma 11 cyfr" onkeypress="return tylkoCyfry(event)" onchange="sprawdzPesel()" /><br/>
				Wiek: <input type="text" name="wiek" id="wiekId" readonly /><br/>
				Płeć:
				<select name="plec" style="width:147px">
						<option value="n">Wybierz</option>
						<option value="mężczyzna">mężczyzna</option>
						<option value="kobieta">kobieta</option>
						
					</select><br/>
						Kierunek studiów:<br/>
						<input type="radio" value="autmatyka" name="kierunek" /> automatyka<br />
						<input type="radio" value="elektrotechnika" name="kierunek" /> elektrotechnika<br />
						<input type="radio" value="informatyka" name="kierunek" /> informatyka<br />
						Plik: <input type="file" name="plik" id="plikId" accept=".jpg, .tif, .png" /><br />
						Komentarz:<br/><textarea id="kom" name="komentarz" cols="20" rows="5" onkeyup="rozmiar()" maxlength="150" ></textarea><br/>
						Zostało znaków:<input type="text" id="licznik" value="150" readonly style="width: 50px"/><br />
					<input type="checkbox" value="wyrazam" required >Zgadzam się na przetwarzanie moich danych osobowych<br/>
				
					<input type="submit" value="Submit" >
			</div>
			
		</div>
		<div id="napis">
				Programowanie internetowe
			
		</div>
		<div id="walidatory">
		<p >		
			<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-html401"
			alt="Valid HTML 5 Transitional" height="31" width="88"></a>

			<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px"
			src="http://jigsaw.w3.org/css-validator/images/vcss"
			alt="Poprawny CSS!" />
			</a>
		</p>
		</div>
			</form>
	</body>
</html>	
