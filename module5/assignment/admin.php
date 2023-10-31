<?php 
session_start();
$filename = "data.txt";
$error = "";

if(isset($_POST["delete"])&& $_POST["delete"]==1){
  $fp = fopen($filename,"r");
  $arr = array();
  while($data = fgetcsv($fp)){
    if($data[2] != $_POST["email"]){
      $arr[] = $data[0].','.$data[1].','.$data[2].','.$data[3];
    }
  }
  fclose($fp);

  $n = count($arr);
  file_put_contents($filename,$arr[0]."\n");
  for($i=1;$i<$n;$i++){
    file_put_contents($filename,$arr[$i]."\n",FILE_APPEND);
  }
}

if(isset($_POST["edit"])&& $_POST["edit"]==1){
  header("location:edit.php");
}

if($_SESSION["loggedin"]==true && $_SESSION["role"]=="admin"):
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
                
                <div class="mt-3 text-center">
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="button-primary" name="submit">Log Out</button>
                </form>
                <h1 class=" text-center my-4 py-2">All users</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
    
                    <?php $i=1; $fp = fopen($filename,"r"); while($data = fgetcsv($fp)) :?>
                        <tr>
                            <th scope="row"><?=$i++;?></th>
                            <td><?=$data[0];?></td>
                            <td><?=$data[2];?></td>
                            <td><?=$data[3];?></td>
                            <td>
                              
                            <form action="" method="POST">
                              <input type="hidden" name="delete" value="1">
                              <input type="hidden" name="email" value="<?=$data[2];?>">
                              <button type="submit" class="button-primary" name="submit">Delete</button>
                            </form>
                            
                            <form class="my-2" action="" method="POST">
                              <input type="hidden" name="edit" value="1">
                              <input type="hidden" name="email" value="<?=$data[2];?>">
                              <button type="submit" class="button-primary" name="submit">Edit</button>
                            </form>
                          
                            </td>
                        </tr>
                    <?php endwhile;fclose($fp);?>
                    </tbody>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php else:  header("location:auth.php"); endif;?>