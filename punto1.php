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
			
<form class=mt-5 action="punto1.php"method="POST">
             <h5>CALCULADORA</h5>
                <div class="row">
                <div class="col">
                <input type="number" class="form-control" placeholder="Primer valor" name="valor1">
                 </div>
                <div class="col">
                <input type="number" class="form-control" placeholder="Segundo valor"name="valor2"> 

                 </div>
                </div>
				<button type="submit" class="btn btn-primary mt-3" name= "sum">Sumar</button>
				<button type="submit" class="btn btn-primary mt-3" name= "res">Restar</button>
				<button type="submit" class="btn btn-primary mt-3" name= "mul">Multiplicar</button>
				<button type="submit" class="btn btn-primary mt-3" name= "div">Dividir</button>
				              
             </form>

			 <?php
			 
			 if (isset($_POST["sum"])){
							
				$cifra1=$_POST["valor1"]; 
				$cifra2=$_POST["valor2"]; 
				$sumar=($cifra1+$cifra2);
				echo ("El resultado de la suma es: " .$sumar);
				 }	
				 	  
				
				if (isset($_POST["res"])){
							
					$cifra1=$_POST["valor1"]; 
					$cifra2=$_POST["valor2"]; 
					$restar=($cifra1-$cifra2);
					echo ("El resultado de la resta es: " .$restar);
					 }

					 if (isset($_POST["mul"])){
							
						$cifra1=$_POST["valor1"]; 
						$cifra2=$_POST["valor2"]; 
						$multiplicar=($cifra1*$cifra2);
						echo ("El resultado de la multiplicación es: " .$multiplicar);
						 }

						 if (isset($_POST["div"])){
							
							$cifra1=$_POST["valor1"]; 
							$cifra2=$_POST["valor2"]; 
							$dividir=($cifra1/$cifra2);
							echo ("El resultado de la division es: " .$dividir);
							 }			 
			 			 	 
			 
			 ?>
                 

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


