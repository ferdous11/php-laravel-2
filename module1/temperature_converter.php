
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Temperature Converter</title>
  </head>
  <body>
    <div class="continer ">
      <div class="row">
      <h2 class="text-center mt-5"><u>Temperature Converter</u></h2>
        <div class="col-2 offset-5 align-self-center">
            
            <br>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="temperature" class="form-label">Temperature</label>
                    <input type="number" step=".01" name="temperature" class="form-control" id="temperature" required>
                </div>

                <div class="mb-3">
                    <label for="option" class="form-label"> Option </label>
                    <select name="option" class="form-select">
                        <option value="ctof"> &degC To &degF </option>
                        <option value="ftoc"> &degF To &degC </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Convert</button>

                <div class="mb-3">
                    <h3 class="form-label">
                        <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                               
                                $temperature = $_POST['temperature'];
                                $option = $_POST['option'];
                                if ($option=='ftoc') {
                                    $celsius = sprintf("%.2f",(($temperature-32)*5)/9);
                                    echo "$temperature&deg F = $celsius &deg C";
                                } else if($option=='ctof'){
                                    $fahrenheit = sprintf("%.2f",(($temperature*9)/5)+32);
                                    echo "$temperature&deg C = $fahrenheit &deg F";
                                }
                              }
                        ?>
                    </h3>
                </div>
                
            </form>
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  </body>
</html>