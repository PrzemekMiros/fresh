<?php
header("content-type: application/json; charset=utf-8");
$nazwaf=isset($_POST['nazwaf']) ? $_POST['nazwaf'] : "";
$email=isset($_POST['email']) ? $_POST['email'] : "";
$phone=isset($_POST['phone']) ? $_POST['phone'] : "";
$osobak=isset($_POST['osobak']) ? $_POST['osobak'] : "";
$message=isset($_POST['message']) ? $_POST['message'] : "";
$cowyr=isset($_POST['cowyr']) ? $_POST['cowyr'] : "";
$nowastr=isset($_POST['nowastr']) ? $_POST['nowastr'] : "";
$domena=isset($_POST['domena']) ? $_POST['domena'] : "";
$hosting=isset($_POST['hosting']) ? $_POST['hosting'] : "";
$slogan=isset($_POST['slogan']) ? $_POST['slogan'] : "";
$waznesl=isset($_POST['waznesl']) ? $_POST['waznesl'] : "";
$czcionki=isset($_POST['czcionki']) ? $_POST['czcionki'] : "";
$kolory=isset($_POST['kolory']) ? $_POST['kolory'] : "";
$nielubie=isset($_POST['nielubie']) ? $_POST['nielubie'] : "";
$logo=isset($_POST['logo']) ? $_POST['logo'] : "";
$zdjecia=isset($_POST['zdjecia']) ? $_POST['zdjecia'] : "";
$opisy=isset($_POST['opisy']) ? $_POST['opisy'] : "";
$sklep=isset($_POST['sklep']) ? $_POST['sklep'] : "";
$blog=isset($_POST['blog']) ? $_POST['blog'] : "";
$galeria=isset($_POST['galeria']) ? $_POST['galeria'] : "";
$formularz=isset($_POST['formularz']) ? $_POST['formularz'] : "";
$slider=isset($_POST['slider']) ? $_POST['slider'] : ""; 
$wyszukiwanie=isset($_POST['wyszukiwanie']) ? $_POST['wyszukiwanie'] : "";
$facebook=isset($_POST['facebook']) ? $_POST['facebook'] : "";
$insta=isset($_POST['insta']) ? $_POST['insta'] : "";
$twitter=isset($_POST['twitter']) ? $_POST['twitter'] : "";
$youtube=isset($_POST['youtube']) ? $_POST['youtube'] : "";
$tripad=isset($_POST['tripad']) ? $_POST['tripad'] : "";
$linked=isset($_POST['linked']) ? $_POST['linked'] : "";
$data=isset($_POST['data']) ? $_POST['data'] : "";
$pomoc=isset($_POST['pomoc']) ? $_POST['pomoc'] : "";
if($nazwaf && $email && $phone && $osobak){
 $headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit";
 $message_body.="Nazwa firmy: $nazwaf\n";
 $message_body.="Osoba kontaktowa: $osobak\n";
 $message_body.="Adres email: $email\n";
 $message_body.="Numer telefonu: $phone\n\n";
 $message_body.="Opis działalności: $message\n";
 $message_body.="Co wyróżnia firmę: $cowyr\n";
 $message_body.="Dlaczego chcesz nową stronę: $nowastr\n\n";
 $message_body.="Mam domene: $domena\n";
 $message_body.="Mam hosting: $hosting\n\n";
 $message_body.="Motto firmy: $slogan\n";
 $message_body.="Słowa klucze: $waznesl\n\n";
 $message_body.="Fonty: $czcionki\n";
 $message_body.="Kolory: $kolory\n";
 $message_body.="Nie lubię: $nielubie\n\n";
 $message_body.="Mam logo: $logo\n";
 $message_body.="Mam zdjęcia: $zdjecia\n";
 $message_body.="Mam teksty: $opisy\n\n";
 $message_body.="Funkcja: $sklep\n";
 $message_body.="Funkcja: $blog\n";
 $message_body.="Funkcja: $galeria\n";
 $message_body.="Funkcja: $formularz\n";
 $message_body.="Funkcja: $slider\n";
 $message_body.="Funkcja: $wyszukiwanie\n\n";
 $message_body.="Media: $facebook\n";
 $message_body.="Media: $insta\n";
 $message_body.="Media: $twitter\n";
 $message_body.="Media: $youtube\n";
 $message_body.="Media: $tripad\n";
 $message_body.="Media: $linked\n\n";
 $message_body.="Termin: $data\n\n";
 $message_body.="Jeszcze coś: $pomoc\n";
 if(mail("kontakt@futurewebstudio.pl","Formularz kontaktowy",$message_body,$headers)){
 $json=array("status"=>1,"msg"=>"<p class='status_ok'>Twój formularz wyceny został wysłany. Niebawem otrzymasz odpowiedź</p>");
 }
 else{
 $json=array("status"=>0,"msg"=>"<p class='status_err'>Wystąpił problem z wysłaniem formularza.</p>"); 
 }
}
else{
 $json=array("status"=>0,"msg"=>"<p class='status_err'>Proszę wypełnić wszystkie pola przed wysłaniem.</p>"); 
}
echo json_encode($json);
exit;
?>
