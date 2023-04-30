<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>UPTD PUSKESMAS WURYANTORO</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#upload data">Upload Data</a></li>
                    <li><a href="#dataset">Dataset </a></li>
                    <li><a href="" class="tbl-biru">Log out</a></li>
                </ul>
            </div>
            </nav>
        <div class="wrapper">
            <section id="home">
            <div class="kolom">
                <p class="deskripsi">VISI & MISI UPTD PUSKESMAS WURYANTORO</p>
                <h4>VISI</h4>
                <p> Terwujudnya pelayanan yang prima menuju masyarakat yang sehat dan mandiri.</p>
                <h4>MISI</h4>
                <p>1.	Terselenggaranya pelayanan kesehatan yang prima meliputi pelayanan promotif, preventif, kuratif, dan rehabilitatif.</p>
                <p>2.	Terwujudnya sumberdaya manusia yang profesional, berkualitas, dan sarana prasarana kesehatan yang sesuai standar. </p>
                <p>3.	Terwujudnya kemandirian hidup sehat bagi keluarga dan masyarakat.</p>
                <p>4.	Tercapainya mutu, pemerataan dan keterjangkaunya pelayanan ksehatan.</p>
                <p>5.	Tergalangnya kemitraan dengan masyarakat secara lintas program dan lintas sektor dalam pembangunan kesehatan.</p>
               
            </div>
            </section>
</body>
</html>