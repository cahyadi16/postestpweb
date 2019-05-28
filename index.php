<?php
$filecounter="kunjungan.txt";
$fl=fopen($filecounter,"r+");
$hit=fread($fl,filesize($filecounter));
fclose($fl);

$fl=fopen($filecounter,"w+");
$hit=$hit+1;
fwrite($fl,$hit,strlen($hit));
fclose($fl);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!-- Ubuntu Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
    <title>Postest</title>
</head>

<body>
    <div class="kata">
        <marquee direction="left"> <?="Welcome to My Web Profile, You Are the Visitor to : ". $hit ?> </marquee>
    </div>
    <div class="main">
        <h1 class="head">Web Profile's</h1>
        <div class="gambar" style="text-align: center"><img src="img/aboust.jpg" alt="cahyadi"></div>

        <h1 class="hello">Hello, I'am a Programmer</h1>
        <center>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>Cahyadi</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>1800018070</td>
                </tr>
                <tr>
                    <td>Program Study</td>
                    <td>:</td>
                    <td>Informatics Engineering</td>
                </tr>
                <tr>
                    <th>Place & date of Birth</th>
                    <td>:</td>
                    <td>Dompu, March 16 th 2000</td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>:</td>
                    <td>Male</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td> Lingkungan Simpasai</td>
                </tr>
            </table>


            <h5>Don't Forget To Follow Me on My Sosial Media</h5>
            <a href="http://facebook.com/abankcahyadi16" target="_blank"><i class="fa fa-facebook-square"></i></a>
            <a href="http://instagram.com/_cahyadi16" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://github.com/cahyadi16" target="_blank"> <i class="fa fa-github"></i></a>

        </center>
    </div>

    <!-- Footer -->
    <div id="footer">
        <p> &copy Copyright 2019 By: Cahyadi</p>
    </div>
    <!-- Akhir Footer -->
</body>

</html>