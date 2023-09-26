<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Grade Calculator</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Grade Calculator</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="1stScore" class="form-label"> 1st score </label>
                    <input type="number" step="1" max="100" min="0" name="1stScore" class="form-control" id="1stScore" required>
                </div>
                <div class="mb-3">
                    <label for="2ndScore" class="form-label"> 2nd score </label>
                    <input type="number" name="2ndScore" step="1" max="100" min="0" class="form-control" id="2ndScore" required>
                </div>
                <div class="mb-3">
                    <label for="3rdScore" class="form-label"> 3rd score </label>
                    <input type="number" name="3rdScore" step="1" max="100" min="0" class="form-control" id="3rdScore" required>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Calculate</button>
                
            </form>
          
        </div>
      </div>
      <div class="row text-center" >
            <h3 class="form-label">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $firstScore = $_POST['1stScore'];
                    $secondScore = $_POST['2ndScore'];
                    $thirdScore = $_POST['3rdScore'];

                    $avg = sprintf("%.2f",($firstScore + $secondScore + $thirdScore)/3);

                    if($avg>=80){
                        echo "Average Score: $avg & Letter Grade: A";
                    }else if($avg>=60){
                        echo "Average Score: $avg & Letter Grade: B";
                    }else if($avg>=45){
                        echo "Average Score: $avg & Letter Grade: C";
                    }else if($avg>=33){
                        echo "Average Score: $avg & Letter Grade: D";
                    }else if($avg<33){
                        echo "Average Score: $avg & Letter Grade: F";
                    }
                }
            ?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>