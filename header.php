<?php
    session_start();
    if($_SESSION['status_login']!=true){ 
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel=" stylesheet" integrity="sha384-+0n0xVW2eSR50omGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxXYb0017+AMvy TG2x" crossorigin="anonymous"> -->
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-1g navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PERPUSTAKAAN</a>
    
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=" #navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="home.php">Home</a>
<a class="nav-link" aria-current="page" href="buku.php">Buku</a> <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi</a> <li class="nav-item"> </div>
<ul class="navbar-nav">
<li class="nav-item">
</li>
<li class="nav-item">
</li>
<li class="nav-item">
</li>
</li>
</ul>
<a class="nav-link" aria-current="page" href="logout.php">Logout</a>
</div>
</nav>
<div class="container bg-light rounded" style="margin-top:10px">
