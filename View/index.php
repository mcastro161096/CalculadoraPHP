<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Calculadora</title>
  <meta charset="utf-8">
  <link href="../CSS/style.css" rel="stylesheet" type="text/css" />
  <link href="../CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <div class="row">
    <div class=" ">
      <div class="container">

        <form class="calc well center-block" method="POST" action="../Controller/Calculadora.php">

          <div>
            <input id="display" type="text" name="expressao" readonly class="center-block espacamento input-lg" />

            <div class="container  center-block ">
              
              <button type="button" class="btn btn-warning btn-md" onclick="InsereValor(value)" value="C">
                <span class="" aria-hidden="true"></span>C
              </button>
              <button type="button" class="btn btn-danger btn-md" onclick="InsereValor(value)" value="x">
                <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
              </button>

              <div class=" btn-group-lg espacamento cont">
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="1">1</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="2">2</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="3">3</button>
                <button type="button" class="btn btn-success" onclick="InsereValor(value)" value="*">
                  <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                </button>

              </div>

              <div class=" btn-group-lg espacamento cont">

                <button type="button" class="btn btn-default " onclick="InsereValor(value)" value="4">4</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="5">5</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="6">6</button>
                <button type="button" class="btn btn-success" onclick="InsereValor(value)" value="/">
                  <span class="glyphicon glyphicon-italic" aria-hidden="true"></span>
                </button>

              </div>

              <div class="btn-group-lg espacamento cont">
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="7">7</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="8">8</button>
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="9">9</button>
                <button type="button" class="btn btn-success" onclick="InsereValor(value)" value="+">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>


              </div>

              <div class=" btn-group-lg espacamento cont">
                <button type="button" class="btn btn-default" onclick="InsereValor(value)" value="0">0</button>
                <button type="button" class="btn btn-default " onclick="InsereValor(value)" value=",">,</button>
                <button type="submit" class="btn btn-default"  value="=">=</button>
                <button type="button" class="btn btn-success" onclick="InsereValor(value)" value="-">
                  <span class="glyphicon glyphicon-minus " aria-hidden="true"></span>
                </button>

              </div>

            </div>


          </div>

        </form>

      </div>

    </div>




  </div>


</body>
<script type="text/javascript" src="../Scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../Scripts/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../Scripts/validacao.js"></script>

</html>

