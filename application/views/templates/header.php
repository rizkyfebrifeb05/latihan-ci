<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">


    <!-- my CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title> <?php echo $judul; ?> </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">CI App</a>
            <button class = "navbar-toggler" type="button" data-toogle="collapse" data-target="#navbarNavAltMarkup"
             arria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= base_url(); ?>">Home
                        <span class="sr-only">(current)</span></a>
                    <a href="<?= base_url(); ?>mahasiswa" class="nav-item nav-link">Mahasiswa</a>
                    <a href="<?= base_url(); ?>peoples" class="nav-item nav-link">Peoples</a>
                    <a href="#" class="nav-item nav-link">About</a>
                </div>
            </div>
        </div>
    </nav>
