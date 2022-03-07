<?php
  if($_POST){
      $number = $_POST['num'];
      if($number != null){

          if($number < 0){

            $message = "<div class='alert alert-primary'> 
            Number : $number <br>
            Signed :  Negative
            </div>";
            
          }elseif($number > 0){

            $message = "<div class='alert alert-primary'> 
            Number : $number <br>
            Signed :  Positive
            </div>";

          }else{

            $message = "<div class='alert alert-danger'> 
            Number : $number <br>
            Signed : Not Positive and Not Negative
            </div>";

          }
      }else{
        // error Not Acceptable
        http_response_code(406);
        $message = "<div class='alert alert-danger'> 
                Enter Value to get output
            </div>";
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>neg-pos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 pt-5 text-center text-primary font-weight-bold h3">
                  Check Your Number
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="num"> Number </label>
                            </div>
                          <input type="number" name="num" id="num" class="form-control" placeholder="Enter Your number">
                        </div>
                        
                        <div class="form-group">
                           <button class="btn btn-outline-primary mt-3"> Check </button>
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