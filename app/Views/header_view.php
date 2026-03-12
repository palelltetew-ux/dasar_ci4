<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title; ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5.3.3 CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-info">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url(); ?>">
            Data Barang Toko Bosok
        </a>

        <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

    </div>
</nav>