<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Weather Report</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Weather Report</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="temperature" class="form-label"> Enter Temperature <?php echo '&degC';?> </label>
                    <input type="number" name="temperature" class="form-control" id="temperature" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Check</button>
                
            </form>
          
        </div>
      </div>
      <div class="row text-center" >
            <h3 class="form-label">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $temperature = $_POST['temperature'];

                    if($temperature>=30){
                        echo "It's warm.";
                    }else if($temperature>=10){
                        echo "It's cool.";
                    }else if($temperature<10){
                        echo "It's freezing!";
                    }
                }
            ?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>