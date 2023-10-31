<?php 
session_start();
// session_destroy();
$filename = "data.txt";
$error = "";

if (isset($_POST["email"]) && isset($_POST["password"]) ) {
  
    $fp = fopen($filename,"r");
    
    while($data = fgetcsv($fp)) {
      if($data[2]==$_POST["email"] && $data[1]==$_POST["password"]){
          $_SESSION["loggedin"] = true;
          $_SESSION["userName"] = $data[0];
          $_SESSION["role"] = $data[3];
          $_SESSION["email"] = $data[2];
          $error = "";
          if($data[3]== "admin"){
            header("location:admin.php");
          }else if($data[3]== "manager"){
            header("location:manager.php");
          }else if($data[3]== "user"){
            header("location:user.php");
          }
      }
    }
    if(!isset($_SESSION["loggedin"]))
      $error = "Wrong Email or Password!!";
}
if(isset($_POST["logout"])&& $_POST["logout"]==1){
  session_destroy();
  $error = "";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>login</title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card">
              <div class="card-body">
                <h1 class=" text-center my-4 py-2">User Login Form</h1>
                <form method="post" action="">
                  <?php if($error!=""):?>
                  <span><label style="color: red;" for=""><?=$error;?></label></span>
                  <?php endif;?>
                  <input type="email" name="email" id="" class="form-control my-4 py-2" placeholder="Email" required/>
                  <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" required/>
                  <div class="mt-3 text-center">
                    <button class="btn btn-primary">LogIn</button>
                    <a href="registering.php" class="nav-link">Create new Account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
