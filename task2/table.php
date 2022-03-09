<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

use function PHPSTORM_META\type;

$users = [
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],  
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
];

$thead = "";
$tbody = "";

foreach($users as $user){
    foreach($user as $key => $data){
        $thead .= " <th> $key </th> ";
    }
    break;
}

foreach($users as $user){
    $tbody .= "<tr>";

    foreach($user as $key => $data){
        $tbody .= "<td style=\"vertical-align:middle\">";
        if(gettype($data) == 'array'){
            foreach($data as $key => $values){
                $tbody .= " $data[$key] <br>";
            }
        }elseif(gettype($data) == 'object'){
            foreach($data as $key => $values){
                $gender = $data -> $key ;
                if($gender == 'f'){
                    $tbody .=  " female " ;
                }else{
                    $tbody .=  " male " ;
                }
            }
        }else{
            $tbody .= $data ;
        }
        $tbody .= "</td>";
    }
    $tbody .= "</tr>";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Table</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <table class="table table-dark table-hover mt-5 ">

      <thead>
          <tr><?php  if(isset($thead)){
              echo $thead;
            } ?></tr>
      </thead>

      <tbody>
          <?php  if(isset($tbody)){
              print_r($tbody) ;
           } ?> 
      </tbody>
    
  </table>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>