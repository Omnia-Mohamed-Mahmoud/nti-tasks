<?php
if($_POST){
    $Physics = $_POST['Physics'];
    $Chemistry = $_POST['Chemistry'];
    $Biology = $_POST['Biology'];
    $Mathematics = $_POST['Mathematics'];
    $Computer = $_POST['Computer'];
    define('maxgrade', 50);
    define('maxtotal', 250);

    if(($Physics >= 0 && $Physics <= maxgrade ) && ($Chemistry >= 0 && $Chemistry <= maxgrade ) && ($Biology >= 0 && $Biology <= maxgrade ) && ($Mathematics >= 0 && $Mathematics <= maxgrade ) && ($Computer >= 0 && $Computer <= maxgrade )){
            
        $total_grade = $Physics + $Chemistry + $Biology + $Mathematics + $Computer ;
        $percentage = $total_grade / maxtotal * 100;

        if($percentage < 40 ){
            $Grade = 'F';
        }elseif($percentage >= 40 && $percentage < 60){
            $Grade = 'E';
        }elseif($percentage >= 60 && $percentage < 70){
            $Grade = 'D';
        }elseif($percentage >= 70 && $percentage < 80){
            $Grade = 'C';
        }elseif($percentage >= 80 && $percentage < 90){
            $Grade = 'B';
        }else{
            $Grade = 'A';
        }

        $message = "<div class='alert alert-primary'> 
            Physics : $Physics <br>
            Chemistry : $Chemistry <br>
            Biology : $Biology <br>
            Mathematics : $Mathematics <br>
            Computer : $Computer <br>
            total grade : $total_grade/250 <br>
            percentage : $percentage % <br>
            Grade : $Grade
            </div>";

    }else{

        $message = "<div class='alert alert-danger'> 
             Enter Values Positive and less or equal 50
            </div>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>grade</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-3 pt-3 text-center text-primary font-weight-bold h3">
                  Enter marks of five subjects 
              </div>
              <div class="col-4 offset-4 mt-3">
                    <form action="" method="post">
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="Physics"> Physics </label>
                            </div>
                          <input type="number" name="Physics" id="Physics" class="form-control" placeholder="Enter Your Physics grade" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="Chemistry" >Chemistry </label>
                            </div>
                          <input type="number" name="Chemistry" id="Chemistry" class="form-control" placeholder="Enter Your Chemistry grade" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="Biology" > Biology </label>
                            </div>
                          <input type="number" name="Biology" id="Biology" class="form-control" placeholder="Enter Your Biology grade" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="Mathematics"> Mathematics </label>
                            </div>
                          <input type="number" name="Mathematics" id="Mathematics" class="form-control" placeholder="Enter Your Mathematics grade" required>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text bg-primary text-light" for="Computer"> Computer </label>
                            </div>
                          <input type="number" name="Computer" id="Computer" class="form-control" placeholder="Enter Your Computer grade" required>
                        </div>
                        
                        <div class="form-group">
                           <button class="btn btn-outline-primary mt-3"> Calculate Grade</button>
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