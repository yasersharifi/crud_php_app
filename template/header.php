<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?= SITE_URL; ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/hover-min.css">

    <title><?= isset($pageTitle) ? $pageTitle : ""; ?></title>

</head>
<body class="d-flex flex-column h-100">

<div class="container-fluid pt-4 pb-4 mb-5">
    <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
        <a class="navbar-brand text-warning" href="#">PHP Crud Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.html">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/yasersharifi/crud_php_app" target="_blank">Help</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </nav>
</div>