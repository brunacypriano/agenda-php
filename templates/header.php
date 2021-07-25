<?php

 include_once("config/url.php");
 include_once("config/process.php");

 if(isset($_SESSION['msg'])){
     $printMsg = $_SESSION['msg'];
     $_SESSION['msg'] = '';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-usVBAd66/NpVNfBge19gws2j6JZinnca12rAe2l+d+QkLU9fiG02O1X8Q6hepIpr/EYKZvKx/I9WsnujJuOmBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="<?= $BASE_URL ?>index.php" class="navbar-brand">
        <i class="fas fa-eye"></i>
</a>
    <div>
        <div class="navbar-nav">
            <a href="<?= $BASE_URL ?>index.php" class="nav-link active" id="home-link">
            Agenda
            </a>
            <a href="<?= $BASE_URL ?>create.php" class="nav-link active" id="home-link">
            Adicionar
            </a></div>
    </div>
    </nav>  
</header