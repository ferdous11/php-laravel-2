<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Simple Calculator</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Simple Calculator</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="1stNumber" class="form-label"> 1st Number </label>
                    <input type="number" name="1stNumber" class="form-control" id="1stNumber" required>
                </div>
                <div  id="2ndNumber" class="mb-3">
                    <label for="2ndNumber" class="form-label"> 2nd Number </label>
                    <input type="number" name="2ndNumber" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="2ndNumber" class="form-label"> Operation </label>
                    <select name="operation" class="form-select" id="" onchange="checkoption(this.value)">
                        <option value="addition"> Addition </option>
                        <option value="subtraction"> Subtraction </option>
                        <option value="multiplication"> Multiplication </option>
                        <option value="division"> Division </option>
                        <option value="binary"> Binary </option>
                        <option value="octal"> Octal </option>
                        <option value="hexadecimal"> Hexadecimal </option>
                    </select>
                    
                </div>

                <button type="submit" class="btn btn-primary mb-3">Calculate</button>
                
            </form>
          
        </div>
      </div>
      <div class="row text-center" >
            <h3 class="form-label">
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $firstNumber = $_POST['1stNumber'];
                    $secondNumber = $_POST['2ndNumber'];
                    $operation = $_POST['operation'];

                    if($operation=="addition"){
                      echo "$firstNumber + $secondNumber = ".($firstNumber+$secondNumber);
                    }else if($operation=="subtraction"){
                      echo "$firstNumber - $secondNumber = ".($firstNumber-$secondNumber);
                    }else if($operation=="multiplication"){
                      echo "$firstNumber x $secondNumber = ".($firstNumber*$secondNumber);
                    }else if($operation=="division"){
                      echo "$firstNumber / $secondNumber = ".($firstNumber/$secondNumber);
                    }else if($operation=="binary"){
                      echo "($firstNumber)<sub>10</sub> = (".decbin($firstNumber).")<sub>2</sub>";
                    }else if($operation=="octal"){
                      echo "($firstNumber)<sub>10</sub> = (".decoct($firstNumber).")<sub>8</sub>";
                    }else if($operation=="hexadecimal"){
                      echo "($firstNumber)<sub>10</sub> = (".dechex($firstNumber).")<sub>16</sub>";
                    }

                }
            ?>
            </h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function checkoption( option ){
          if(option=="hexadecimal" || option=="octal" || option=="binary")
            $('#2ndNumber').hide();
          else
            $('#2ndNumber').show();
        }
        
    </script>
  </body>
</html>