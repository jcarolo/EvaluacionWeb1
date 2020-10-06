<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-darrk bg-dark">
            <a class="navbar-brand" href="#">EvalucionWeb1</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                   <a class="nav-link" href="punto1.php">Punto1 <span class="sr-only">(current)</span></a>
                 </li>
                    <li class="nav-item">
                    <a class="nav-link" href="punto2.php">Punto2</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="punto3.php">Punto3</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="punto4.php">Punto4</a>
              </li>     
    </ul>
    <form class="form-inline my-2 my-lg-0">
          
    </form>
  </div>
</nav>

</header>
<main>
<div class ="container">
<div class=" row justify-content-center">
<div class="col-4">
<form class= "mt-3" action="punto4.php" method="POST">
<h4>CÁLCULO DE SUELDO SEMANAL EMPLEADO POSTOBON</h4>

  <div class="row">
    <div class="col">
      <input type="number" class="form-control" placeholder="horas trabajadas"name="nhoras">
    </div>    
  </div>
 
  <button type="submit" class="btn btn-primary mt-4" name="CalcularSb">CALCULAR SALARIO</button>

</form>
 
<?php  if(isset($_POST["CalcularSb"])): ?>
<h5 class="text-danger text center">
<?php
$horasLab=$_POST["nhoras"];
$vlrhbasica=20000;
$sueldoBs=800000;
$nhorextras=($horasLab-40);
$vlrhextra=25000;

if ($horasLab <= 40){
    $tarifa1=($vlrhbasica*$horasLab);
   echo ("Su sueldo semanal es de : $" .$tarifa1 );
}
 elseif ($horasLab>40) {
   
$tarifa2=($nhorextras * $vlrhextra)+ $sueldoBs;
echo ("Su salario semanal es = $ ". $tarifa2);
 }
?>

</h5> 
<?php endif ?> 


</div>

</div>

</div>

</main>  
<footer>
</footer>  


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>