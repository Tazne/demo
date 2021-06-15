
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Sticky Footer Navbar Template · Bootstrap v5.0</title>
    <link rel="stylesheet" href="boostrap.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="d-flex flex-column h-100">
    
<header>

<?php 
$titre = "titre" ;


function navigation(string $lien ,  string $title ): string {
   $class = "";
  if (($_SERVER['SCRIPT_NAME'] === $lien)){
      $class = "nav-link active"  ;
  } else {
    $class = "nav-link";
  }
    return <<<html
 <li class="nav-item">
     <a class="$class" href="$lien">$title</a>
     </li>;
html;
}

?>


  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SYSTMAPS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <?= navigation('/header.php' , 'home')  ?>
          <?= navigation('/contacts.php' , 'contacts') ?>
          <?= navigation('/footer.php' , 'footer')  ?>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  




</header>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>
 