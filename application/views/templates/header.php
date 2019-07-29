<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Titulo -->
<title><?php echo ucfirst(preg_replace("/(?<!\A)[A-Z]+/", ' $0', $page)); ?></title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

<!-- Scroll effects AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Page CSS -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/{$page}.css"); ?>">

<link rel="stylesheet" href="<?php echo base_url("assets/css/core.css"); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" id="myNav">
        <a class="navbar-brand font-weight-bold" href="index.php">Diogo Costa_</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center">
                <a href="#section_home" class="nav-item nav-link text-light pr-4">Home</a>
                <a href="#section_about" class="nav-item nav-link text-light pr-4">About</a>
                <a href="#section_projects" class="nav-item nav-link text-light pr-4">Portfolio</a>
                <a href="#section_contact" class="nav-item nav-link text-light pr-4">Contact</a>
            </div>
        </div>
    </nav>