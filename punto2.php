<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprin step</title>
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

<div class="container">
<div class ="row justify-content-center">
<div class="col-4">
             <form class=mt-3 action="punto2.php"method="POST">
             <h4>CALCULO IMC</h4>
                <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Digite su peso" name="peso">
                 </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Digite su estatura"name="altura"> 
                 </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3" name= "botonCalcular">Calcular IMC</button>
             </form>

          



<?php if (isset ($_POST['botonCalcular'])):
    ?>
  <h5 class="text-danger text center" > 

<?php 
$pesoKg = $_POST['peso'];
$estatura = $_POST['altura'];

 $imc = $pesoKg/($estatura*$estatura);
 $imcred = round ($imc,2);

if ($imc <= 18.5) {
echo  ("Peso insuficiente");
} else if ($imc > 18.5 AND $imc<=24.9 ) {
echo  ("Peso Normal");
} 
else if ($imc > 25 && $imc<=26.9) {
echo "Sobrepeso grado 1";
}
 else if ($imc > 27 && $imc<=29.9) {
    echo   "Sobrepeso grado II";
} 
else if ($imc > 30 && $imc<=34.9) {
    echo   "Obesidad tipo I";
} 
else if ($imc > 35 && $imc<=39.9) {
    echo "Obesidad tipo II";
} 
else if ($imc > 40 && $imc<=49.9) {
    echo  "Obesidad tipo III";         

} else if ($imc > 50.0) 
{
echo  "Obesidad tipo IV";
}
echo (" y tu indice de masa corporal es " . $imcred); 

?>
</h5> 
<?php endif?>


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