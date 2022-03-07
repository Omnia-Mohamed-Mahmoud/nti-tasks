<?php
if($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    if($num1 != null && $num2 != null && $num3 != null){

        if(($num1 > $num2) && ($num1 > $num3)){
            $max = $num1 ;
            if($num2 < $num3){
                $min = $num2 ;
            }else{
                $min = $num3;
            }
            $message = "<div class='alert alert-success'> 
                Num1 : $num1 <br>
                Num2 : $num2 <br>
                Num3 : $num3 <br>
                Max Number : $max <br>
                Min Number : $min 
            </div>" ;
        }elseif(($num2 > $num1) && ($num2 > $num3)){
            $max = $num2 ;
            if($num1 < $num3){
                $min = $num1 ;
            }else{
                $min = $num3;
            }
            $message = "<div class='alert alert-success'> 
                Num1 : $num1 <br>
                Num2 : $num2 <br>
                Num3 : $num3 <br>
                Max Number : $max <br>
                Min Number : $min 
            </div>";
        }elseif(($num3 > $num1) && ($num3 > $num2)){
            $max = $num3 ;
            if($num1 < $num2){
                $min = $num1 ;
            }else{
                $min = $num2;
            }
            $message = "<div class='alert alert-success'> 
                Num1 : $num1 <br>
                Num2 : $num2 <br>
                Num3 : $num3 <br>
                Max Number : $max <br>
                Min Number : $min 
            </div>";
        }else{
            // error Not Acceptable
            http_response_code(406);
            $message = "<div class='alert alert-danger'> 
                Enter Values Not equal 
            </div>";
        }
    }else{
        // error Not Acceptable
        http_response_code(406);
        $message = "<div class='alert alert-danger'> 
                Enter Values in All Fields 
            </div>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>max</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 pt-5 text-center text-primary font-weight-bold h3">
                  Enter Your Numbers
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num1"> Num1 </label>
                            </div>
                          <input type="number" name="num1" id="num1" class="form-control" placeholder="Enter Your num1">
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num2" >Num2 </label>
                            </div>
                          <input type="number" name="num2" id="num2" class="form-control" placeholder="Enter Your num2">
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num3" >Num3 </label>
                            </div>
                          <input type="number" name="num3" id="num3" class="form-control" placeholder="Enter Your num3">
                        </div>
                        
                        <div class="form-group">
                           <button class="btn btn-outline-primary mt-3"> Calculate </button>
                        </div>

                        <?php  if(isset($message)){
                            echo $message;
                        } ?>

                    </form>
              </div>
          </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>