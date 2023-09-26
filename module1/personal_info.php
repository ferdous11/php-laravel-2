<?php 
    $name = "A. J. M. Farmanuzzaman";
    $nickname = 'Ferdous';
    $age = 31;
    $country = "Bangladesh"; 
    $introduction  = "Hello I am <strong>$name</strong>, nickname $nickname from $country. I am $age years old. I have completed my graduation from MBSTU. Now I am a member of Ostad Platform. I want to be a ostad in php as like Hasin Hayder & Rabbil Hasan.";
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title><?=$name;?></title>
  </head>
  <body>
    <div class="continer ">
      <div class="row mt-5" >
        <div class="col-4 offset-4 align-self-center">
          <div class="card text-center">
            <div class="card-header">
              PERSONAL INFO
            </div>
            <div class="card-body">
             
              <p class="card-text"><?php echo $introduction;?></p>
            </div>
            
            <div class="card-footer text-muted">
                @farmanuzzaman
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>