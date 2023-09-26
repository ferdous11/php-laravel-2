<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Comparison Tool2</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Comparison Tool</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="1stNumber" class="form-label"> 1st Number </label>
                    <input type="number" name="1stNumber" class="form-control" id="1stNumber" required>
                </div>
                <div class="mb-3">
                    <label for="2ndNumber" class="form-label"> 2nd Number </label>
                    <input type="number" name="2ndNumber" class="form-control" id="2ndNumber" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Check</button>
                
            </form>
          
        </div>
      </div>
      <div class="row text-center" >
            <h3 class="form-label">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $firstNumber = $_POST['1stNumber'];
                    $secondNumber = $_POST['2ndNumber'];

                    echo ($firstNumber==$secondNumber) ? "Two Numbers Are Equal" : (($firstNumber>$secondNumber) ? "Between $firstNumber And $secondNumber Large Number : $firstNumber" : "Between $firstNumber And $secondNumber Large Number : $secondNumber");
                }
            ?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>