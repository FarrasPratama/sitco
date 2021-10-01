
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$email_pengirim = 'pratama007fr@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = $_POST['nama']; // Isikan dengan nama pengirim
$email_penerima = 'pratamafarras24@gmail.com'; // Ambil email penerima dari inputan form
$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
$pesan = $_POST['pesan']; // Ambil pesan dari inputan form

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'ross24kobe'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

// Load file content.php
// ob_start();
// include "index.php";

// $content = ob_get_contents();
// ob_end_clean();

$mail->Subject = $subjek;
// $mail->Body = $pesan;
$mail->Body = 
'<br>
<br/><br/>Dari : <b>'.$_POST['nama'].'</b>
<br/><br/>No HP : <b>'.$_POST['nohp'].'</b>
<br/><br/>Email : <b>'.$_POST['email'].'</b>
<br/><br/>Pesan : <b>'.$_POST['pesan'].'</b>';
$send = $mail->send();

if ($send) { // Jika Email berhasil dikirim
  header("Location: berhasil.php");
} else { // Jika Email gagal dikirim
  header("Location: gagal.php");
  // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
}

?>