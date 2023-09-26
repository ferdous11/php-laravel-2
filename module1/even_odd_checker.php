<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Even or Odd Checker</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Even or Odd Checker</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="checkNumber" class="form-label"> Enter an Integer </label>
                    <input type="number" step="1" min="0" name="checkNumber" class="form-control" id="checkNumber" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Check</button>
                
            </form>
          
        </div>
      </div>
      <div class="row text-center" >
            <h3 class="form-label">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $checkNumber = $_POST['checkNumber'];

                    if($checkNumber%2==0){
                        echo "Number $checkNumber is EVEN";
                    }else{
                        echo "Number $checkNumber is ODD";
                    }
                }
            ?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>