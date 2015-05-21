<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>ZPU | S. Koźlak</title>
<style>
html, body{
  margin:0 !important;
  padding:0 !important;
  text-align: center;
}

body {
   margin: 0;
   padding: 0;

    font-family:Arial, Helvetica, sans-serif;
    font-size: 12px;
    background-image: url('zpu2.png');
    background-repeat: no-repeat;
    background-attachment:fixed;
    background-size:contain;
}

nav {
	background-color: black;
	color: white;
}
nav li {
	display: inline-block;
	width: 16%;
	vertical-align:top;
	text-align: center;
	padding: 2% 0;
}

li {
	margin: 0;
}

ul {
margin: 0;
padding: 0;
}

li:hover {
	background-color: #aaa;
	cursor:context-menu;
}

.wrap {
	display: inline-block;
	width: 16%;
	vertical-align:top;
}

.one {
	 z-index: 9999; 
	 margin-top: 0;
	 background-color: black; 
	 color: white; 
	 list-style: none;
	 visibility: collapse; 
}

.one li {
	padding: 3% 0;
}

.roll {
	text-align: center;
	margin: 0;
	
}

.about {
	font-size: 1.5em;
	width: 50%;
	margin: 0 0 5% 25%;
	text-align: justify;
	vertical-align: top;

}
form {
	display: none;
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 0;
	clear: both;
}

textarea {
width: 80%;
}
input {
margin-top: 3%;
	width: 60%;
}

hr {
	clear: both;
}
.down {
	 margin: 4% auto; 
	 text-align:center;
}

</style>
</head>

<body>
<nav id="raz">
	<ul>
		<li onclick="firm()">&#8962; O firmie</li>
		<li onmouseover="raz()" onmouseout="dwa()">Przesył i rozdział energii</li>
		<li onmouseover="trzy()" onmouseout="cztery()">Zasilanie rezerwowe</li>
		<li onclick="komp()">Kompensacja mocy biernej</li>
		<li onmouseover="piec()" onmouseout="szesc()">Instalacje niskoprądowe</li>
		<li onclick="kont()"> Kontakt &#9990;</li>
	</ul>
</nav>
<div class="roll">
<div class="wrap">
</div>
<div class="wrap" onmouseover="raz()" onmouseout="dwa()">
	<ul class="one">
		<li>Stacje tranfo</li>
		<li>Rozdzielnice nn i SN</li>
		<li>Linie kablowe nn i SN</li>
	</ul>
</div>
<div class="wrap" onmouseover="trzy()" onmouseout="cztery()">
	<ul class="one">
		<li onclick="agr()">Agregaty prądotwórcze</li>
		<li onclick="ups()">UPS-y</li>
	</ul>
</div>
<div class="wrap">
</div>
<div class="wrap" onmouseover="piec()" onmouseout="szesc()">
	<ul class="one">
		<li>Instalacje SAP, DSO</li>
		<li>Sieci strukturalne</li>
	</ul>
</div>
<div class="wrap">
</div>
</div>
<section class="about">
<p class="firm" style="color: black"><strong>Z.P.U. S. Koźlak </strong><br><br>Firma swoją działalność w dziedzinie elektrotechniki rozpoczęła w roku 2004.<br> Początkowo działalność firmy skupiała się wokół tradycyjnych instalacji i sieci elektroenergetycznych niskiego napięcia.<br> Z czasem oferta została rozszerzona  o: <br><br>sieci elektroenergetyczne SN, <br><br>agregaty prądotwórcze i urządzenia do bezprzerwowego zasilania – UPS-y  <br><br> oraz  instalacje BMS. <br><br>Dzięki współpracy z niezawodnymi dostawcami komponentów oraz młoda prężnie rozwijająca się kadra pracownicza pozwala realizować wszelkie, nawet nietypowe  zlecenia.</p>
				<form action="" method="post">
					<h1> Pytania? </h1>
					<h3>Napisz do nas!</h3>
					<textarea id="mess" class="info" name="message" rows="10" placeholder="lub zadzwoń 509-932-861"></textarea>
					<input id="inp" class="info" title="user_email" name="kontakt" placeholder="Proszę podać Państwa nr tel. lub e-mail">	
    				<input class="info" type="submit" value="Wyślij"/>
    				<input type="hidden" name="button_pressed" value="1" />
				</form>

</section>
<hr>

<section class="down">
<div style="
-webkit-filter: grayscale(100%);
filter: grayscale(50%);">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20590.01650235844!2d19.801447!3d49.828325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238efcf245293914!2sZak%C5%82ad+produkcyjno+-+us%C5%82ugowy+Ko%C5%BAlak+Stanis%C5%82aw!5e0!3m2!1sen!2s!4v1432204899898" height="300" frameborder="0" style="border:0; width: 40%; float :left; margin-right: auto; margin-left: 25%; margin-bottom: 4%; vertical-align : top"></iframe>
</div>
<p style="font-family: 'Arial'; font-size: 1.5em; color : #000; line-height: 150%; text-align:left; margin: 2% 0 0 3%;  width: 30%; float: left"> Zakład Produkcyjno- Usługowy <br> Stanisław Koźlak<br>ul. Na Węgry 3 <br> 32-440 Sułkowice<br>NIP: 6810008479<br>tel. 509-932-861</p>
</section>
<hr>
<footer style="text-align:right;">
<a href="contact.pdf" target="_newtab" style="text-decoration:none; color: slategray">by K. Najder</a>
</footer>
<script>
/*window.onload = function() {
 document.getElementsByClassName('one')[0].style.display = 'none';
  document.getElementsByClassName('one')[1].style.display = 'none';
   document.getElementsByClassName('one')[2].style.display = 'none';


}
*/

<?php
							
							if(isset($_POST['button_pressed']))
							{
							    $to      = 'mariakozlak@gmail.com ';
							    $subject = 'Wiadomosc ze strony ZPU';
							    $headers = 'From:'. htmlentities($_POST['user_email'])  . "\r\n";
							    mail($to, $subject, htmlentities($_POST['message']), $headers);
							}
							
							?>

function raz() {
document.getElementsByClassName('one')[0].style.visibility= 'visible';
}
function dwa() {
document.getElementsByClassName('one')[0].style.visibility= 'collapse';
}
function trzy() {
document.getElementsByClassName('one')[1].style.visibility= 'visible';
}
function cztery() {
document.getElementsByClassName('one')[1].style.visibility= 'collapse';
}
function piec() {
document.getElementsByClassName('one')[2].style.visibility= 'visible';
}
function szesc() {
document.getElementsByClassName('one')[2].style.visibility= 'collapse';
}

function firm() {
document.getElementsByTagName('form')[0].style.display= 'none';
document.getElementsByTagName('p')[0].innerHTML= '<strong>Z.P.U. S. Koźlak </strong><br><br>Firma swoją działalność w dziedzinie elektrotechniki rozpoczęła w roku 2004.<br> Początkowo działalność firmy skupiała się wokół tradycyjnych instalacji i sieci elektroenergetycznych niskiego napięcia.<br> Z czasem oferta została rozszerzona  o: <br><br>sieci elektroenergetyczne SN, <br><br>agregaty prądotwórcze i urządzenia do bezprzerwowego zasilania – UPS-y  <br><br> oraz  instalacje BMS. <br><br>Dzięki współpracy z niezawodnymi dostawcami komponentów oraz młoda prężnie rozwijająca się kadra pracownicza pozwala realizować wszelkie, nawet nietypowe  zlecenia.';
}

function komp() {
document.getElementsByTagName('form')[0].style.display= 'none';

document.getElementsByTagName('p')[0].innerHTML= '<strong>Kompensacja mocy biernej - obniżenie kosztów energii elektrycznej.</strong> <br> <br>Kompensacja mocy biernej realizowana jest w celu optymalizacji pracy sieci elektroenergetycznej Odbiorcy oraz wyeliminowania opłat za energię bierną. <br>Zalety:<br> eliminacja opłat za energię bierną oraz zmniejszenia o 2-5% opłaty za energię czynną, <br> poprawia jakość energii elektrycznej,<br> wzrost wydajności układów elektroenergetycznych.';
}

function kont() {
document.getElementsByTagName('p')[0].innerHTML= '';
document.getElementsByTagName('form')[0].style.display= 'block';
document.getElementsByTagName('form')[0].style.marginBottom= '0';
}
document.getElementsByTagName('form')[0].style.display= 'none';

function ups() {
document.getElementsByTagName('p')[0].innerHTML= '<strong>UPS- y (<em>ang. Uninterruptible Power Supply</em>)</strong><br> <br>zasilacze UPS (jedno- lub trójfazowe) mają za zadanie bezprzerwowego zasilania urządzeń i systemów wenergię elektryczną. Urządzenia te zapewniają parametry zasilania najwyższej jakości i przeznaczone są do odbiorów o krytycznym znaczeniu z punktu widzenia Użytkownika. Dostępne są modele wykonane w technologii klasycznej lub modułowej w szerokim zakresie mocy wyjściowej (do 8000 kVA).';
}

function agr() {
document.getElementsByTagName('p')[0].innerHTML= '<strong>Agregaty prądotwórcze</strong><br> <br>Zespół spalinowo-elektryczny stanowi autonomiczny układ zasilania w przypadku dłuższych przerw w dostawach energii od dystrybutora energetycznego. Agregat prądotwórczy występuje w wersjach otwartych, obudowanych (wyciszonych), kontenerowych i mobilnych.';
}

</script>

</body>
</html>
