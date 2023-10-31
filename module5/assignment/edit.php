<?php 
session_start();
$filename = "data.txt";
$error = "";

if (isset($_POST["userName"]) && isset($_POST["password"]) && isset($_POST["email"])&& isset($_POST["role"])) {
    file_put_contents($filename, $_POST["userName"].','.$_POST["password"].','.$_POST["email"].",".$_POST["email"]."\n",FILE_APPEND);
    header("location:auth.php");
}
// else
// $error = "Please fill in all fields";
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
                <h1 class=" text-center my-4 py-2">Update User Info</h1>
                <form method="post" action="">
                  <?php if($error!=""):?>
                  <span><label style="color: red;" for=""><?=$error;?></label></span>
                  <?php endif;?>
                  <input type="text" name="userName" id="" class="form-control my-4 py-2" placeholder="User Name" required/>
                  <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" required/>
                  <input type="email" name="email" id="" class="form-control my-4 py-2" placeholder="Email" required/>
                  <select name="role">
                    <option <??> value="admin">admin</option>
                    <option value="manager">manager</option>
                    <option value="user">user</option>
                  </select>
                  <div class="mt-3 text-center">
                    <button class="btn btn-primary">Save</button>
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
