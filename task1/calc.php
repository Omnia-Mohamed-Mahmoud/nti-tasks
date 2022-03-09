<?php
   if($_POST){
       $firstnumber = $_POST['num1'];
       $secondnumber = $_POST['num2']; 
       $operation = $_POST['operation'];

       if($secondnumber == 0 && $operation =='/'){
           $result = "Mathmatics error";
           $message = "<div class='alert alert-danger'> 
           firstnumber : $firstnumber <br>
           secondnumber : $secondnumber <br>
           operation : $operation <br>
           Output : $result 
           </div> ";
        }else{
            if($operation == '+'){
                $result = $firstnumber + $secondnumber;
                $operation = '+' ;
            }elseif($operation == '-'){
                $result = $firstnumber - $secondnumber;
                $operation = '-' ;
            }elseif($operation == '*'){
                $result = $firstnumber * $secondnumber;
                $operation = '*' ;
            }elseif($operation == '/'){
                $result = $firstnumber / $secondnumber;
                $operation = '/' ;
            }
            $message = "<div class='alert alert-primary'> 
            firstnumber : $firstnumber <br>
            secondnumber : $secondnumber <br>
            operation : $operation <br>
            Output : $result 
            </div>";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>root</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row">
              <div class="col-12 mt-5 pt-5 text-center text-primary font-weight-bold h3">
                  Enter Your Numbers
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num1">First Number </label>
                            </div>
                          <input type="number" name="num1" id="num1" class="form-control" placeholder="Enter First number" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num2" >second Number </label>
                            </div>
                          <input type="number" name="num2" id="num2" class="form-control" placeholder="Enter second number" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num2" >select operation </label>
                            </div>
                          <select class="form-control"  name="operation">
                              <option value="+"> sum </option>
                              <option value="-"> subtraction </option>
                              <option value="*"> multiplication </option>
                              <option value="/"> division </option>
                          </select>
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