<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="_variables.scss" media="screen"/>
    <link rel="stylesheet" type="text/css" href="_bootswatch.scss" media="screen"/>
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="app.js" defer></script>
</head>
<body>
<header>

<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo "$actual_link?page=home"; ?>">Best Blog Ever ! <3</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo "$actual_link?page=home"; ?>">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$actual_link?page=contact"; ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo "$actual_link?page=about"; ?>">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 style="text-align:center;">Bienvenue sur mon blog !</h1>
</header>