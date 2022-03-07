<?php
  if($_POST){
      $unit = $_POST['unit'];
      define('surchargePre', .2);
      if($unit != null){
          if($unit >= 0 && $unit < 50){
            $totalUnits = $unit * 50/100 ;
            $surchargePrice = $totalUnits * surchargePre ;
            $totalPrice = $totalUnits + $surchargePrice;
            $message = "<div class='alert alert-primary'> 
            Electric unit : $unit unit <br>
            one unit price : .50/unit <br>
            total units price : $totalUnits EGP<br>
            surcharge : 20% <br>
            surcharge price : $surchargePrice EGP<br>
            total Price : $totalPrice EGP
            </div>";
          }elseif($unit >= 50 && $unit < 150){
            $totalUnits = $unit * 75/100 ;
            $surchargePrice = $totalUnits * surchargePre ;
            $totalPrice = $totalUnits + $surchargePrice;
            $message = "<div class='alert alert-primary'> 
            Electric unit : $unit unit <br>
            one unit price : .75/unit <br>
            total units price : $totalUnits EGP<br>
            surcharge : 20% <br>
            surcharge price : $surchargePrice EGP<br>
            total Price : $totalPrice EGP
            </div>";
          }elseif($unit >= 150 && $unit < 250){
            $totalUnits = $unit * 120/100 ;
            $surchargePrice = $totalUnits * surchargePre ;
            $totalPrice = $totalUnits + $surchargePrice;
            $message = "<div class='alert alert-primary'> 
            Electric unit : $unit unit <br>
            one unit price : 1.20/unit <br>
            total units price : $totalUnits EGP<br>
            surcharge : 20% <br>
            surcharge price : $surchargePrice EGP<br>
            total Price : $totalPrice EGP
            </div>";
          }elseif($unit >= 250){
            $totalUnits = $unit * 150/100 ;
            $surchargePrice = $totalUnits * surchargePre ;
            $totalPrice = $totalUnits + $surchargePrice;
            $message = "<div class='alert alert-primary'> 
            Electric unit : $unit unit <br>
            one unit price : 1.50/unit <br>
            total units price : $totalUnits EGP<br>
            surcharge : 20% <br>
            surcharge price : $surchargePrice EGP<br>
            total Price : $totalPrice EGP
            </div>";
          }else{
              // error Not Acceptable
            http_response_code(406);
            $message = "<div class='alert alert-danger'> 
                Enter value positive to calculate electricity
            </div>";
          }
      }else{
        // error Not Acceptable
        http_response_code(406);
        $message = "<div class='alert alert-danger'> 
                Enter Value to calculate electricity
            </div>";
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>elec</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 pt-5 text-center text-primary font-weight-bold h3">
                  Enter electricity unit
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="unit"> electricity unit </label>
                            </div>
                          <input type="number" name="unit" id="unit" class="form-control" placeholder="Enter Your electricity unit">
                        </div>
                        
                        <div class="form-group">
                           <button class="btn btn-outline-primary mt-3"> Calculate total electricity </button>
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