<?php
include "../config/koneksi.php";

// Mencegah Terjadinya SQL injection
function anti_injection($data){
    $filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
    return $filter;
}

$username=$_POST['username'];
$password=md5($_POST['password']);

$login=mysqli_query($con, "Select * from user where username='$username' AND password='$password'"); 
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if($ketemu >0){
    session_start();

    $_SESSION[username]=$r[username];
    $_SESSION[namalengkap]=$r[nama_lengkap];
    $_SESSION[passuser]=$r[password];
    
    $id_lama = session_id();
    session_regenerate_id();
    $id_baru = session_id();

    echo"<script>alert('Selamat Datang $_SESSION[namalengkap]'); 
    window.location=media.php</script>";
    header('location:media.php?p=home');
}else{
    echo"<script>alert('Login Gagal Username dan Password Anda Salah'); 
    window.location=index.php</script>";
    header('location:index.php');
}