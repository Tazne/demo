<?php 

include 'header.php';
$emailErr = $passwordErr = $reponse = "" ;
$email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        $emailErr = "email is empty";
        $passwordErr = "password is empty";
    } elseif(!empty($_POST["email"]) or !empty($_POST["password"])) {
        $email = ($_POST["email"]);
        $password = ($_POST["password"]);
    }
    if ($email === 'crisnzeta5@gmail.com' and $password == 677078525){
        $reponse = "Avec success" ;
        header("Location: header.php");
    }else{
        $reponse = "Pas acces" ;
    }
}
?>


<div class="container mt-5" style="margin-top: 25rem;">
  <div class="alert"><?= $reponse ?></div>
<form action="contacts.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Email address</label>
        <input type="text" name="email[]" class="form-control" >
      <div id="emailHelp" class="form-text"> <?= $emailErr ?></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password[]" class="form-control">
      <div id="emailHelp" class="form-text"> <?= $passwordErr ?></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>