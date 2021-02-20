
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina de acceso</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            </div>
        <h1 class="text-center">Descripcion de gastos</h1><br>
        </nav>

       <form action="multipart/form-data">
       <div class="row p-5 container">
     <div class="col col-3">
        <label for="peajes">peajes*</label>
        <input type="text" id="peajes" name="peajes" class="form-control" maxlength="20" placeholder="el valor de los peajes" required value="">
     </div>
     <div class="col col-3">
        <label for="combustible">combustible*</label>
        <input type="text" id="combustible" name="combustible" class="form-control" maxlength="20" placeholder="el precio del combustible" required value="">
     </div>
     <div class="col col-2">
        <label for="conductor">%conductor*</label>
        <input type="text" id="conductor" name="conductor" class="form-control" maxlength="20" placeholder="el porcentaje " required value="">
     </div>
     <div class="col col-2">
        <label for="encarrosada">encarrosada*</label>
        <input type="text" id="encarrosada" name="encarrosada" class="form-control" maxlength="20" placeholder="valor encarrosada" required value="">
     </div>
     <div class="col col-2">
        <label for="desencarrosada">desencarrosada*</label>
        <input type="text" id="desencarrosada" name="desencarrosada" class="form-control" placeholder="valor desencarrosoda" maxlength="20" required value="">
     </div>     
</div>
<div class="row p-5 container">
     <div class="col col-3">
        <label for="llantas">llantas*</label>
        <input type="text" id="llantas" name="llantas" class="form-control" maxlength="20" placeholder="montada llantas" required value="">
     </div>
     <div class="col col-3">
        <label for="parqueadero">parqueadero*</label>
        <input type="text" id="parqueadero" name="parqueadero" class="form-control" maxlength="20" placeholder="valor parqueadero" required value="">
     </div>
     <div class="col col-2">
        <label for="viaticos">viaticos*</label>
        <input type="text" id="viaticos" name="viaticos" class="form-control" maxlength="20" placeholder="total viaticos" required value="">
     </div>
     <div class="col col-2">
        <label for="comision">comision*</label>
        <input type="text" id="comision" name="comision" class="form-control" maxlength="20" placeholder="valor comision" required value="">
     </div>
     <div class="col col-2">
        <label for="lavada">lavada*</label>
        <input type="text" id="lavada" name="lavada" class="form-control" maxlength="20" placeholder="valor aseo" required value="">
     </div>     
</div>
    

<div class="row p-5 container">
     <div class="col col-3">
        <label for="cargue">cargue*</label>
        <input type="text" id="cargue" name="cargue" class="form-control" maxlength="20" placeholder="valor cargue" required value="">
     </div>
     <div class="col col-3">
        <label for="descargue">descargue*</label>
        <input type="text" id="descargue" name="descargue" class="form-control" maxlength="20" placeholder="valor descargue" required value="">
     </div>
     <div class="col col-3">
        <label for="otros">otros*</label>
        <input type="text" id="otros" name="otros" class="form-control" maxlength="20" placeholder="otros gastos" required value="">
     </div>
     <div class="col col-3">
       <label for="otros">descripcion</label>
         <input type="text" id="otross" name="otross" class="form-control" maxlength="20"placeholder="descripcion de los gastos">
     </div>
         
</div>
<div class="row p-3 container">
     <div class="col col-4">
        <label for="cargue"></label>
        <button type="button" class="btn btn-info" name="total" id="total"
        value="total" onclick="sumar();">total de gastos</button>
     </div>
     <div class="col col-4">
        <label for="descargue">total gastos</label>
        <input type="text" id="result" name="result" class="form-control" maxlength="20">
     </div>        
</div>
<br>
    <div class="left">
        <div class="col col-12">
            <h1>
            <a href="calculadora.php" class="btn btn-success">
                <h2>Anticipo</h2></a>
            </h1>
        
        </div>
      
     </div>
     <div class="row p-3 container">
     <div class="col col-4">
            <h1>
            <?php
            if (isset($mensaje)) {
                //es porque se realizo algun proceso de insercion
            echo $mensaje;
            }
            ?>
            </h1>
        </div>
        <div class="col col-8 text-right">
            <a href="calculadora.php" class="btn btn-danger">Cancelar</a><br>
            <button class="btn btn-secondary" id="boton" name="boton">Guardar</button>
        </div>
    </div>

     </div>
    
     

      </form>
     <script type="text/javascript">
     function sumar()
     {
         var peajes=parseInt(document.getElementById('peajes').value);
         var combustible=parseInt(document.getElementById('combustible').value);
         var conductor=parseInt(document.getElementById('conductor').value);         var encarrosada=parseInt(document.getElementById('encarrosada').value);
         var desencarrosada=parseInt(document.getElementById('desencarrosada').value);
         var llantas=parseInt(document.getElementById('llantas').value);
         var parqueadero=parseInt(document.getElementById('parqueadero').value);
         var viaticos=parseInt(document.getElementById('viaticos').value);
         var comision=parseInt(document.getElementById('comision').value);
         var lavada=parseInt(document.getElementById('lavada').value);
         var cargue=parseInt(document.getElementById('cargue').value);
         var descargue=parseInt(document.getElementById('descargue').value);
         var otros=parseInt(document.getElementById('otros').value);



         var result =peajes+combustible+conductor+encarrosada+desencarrosada+llantas+parqueadero+viaticos+comision+lavada+cargue+descargue+otros;

         document.getElementById('result').value=result;


     }


     </script> 
      
      <br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br>
      <div>
    <footer>
        <div class="fixed-bottom text-light bg-danger text-right">
          <div class="row">
              <div class="col-xs-12 col-md-4">
                  <br><br>
                  <h6 class=".text-light">REALIZADO:</h6>
                  <h6 class=".text-light">
                  Camilo Restrepo<br>
                  </h6>
              </div>
              <div class="col-xs-12 col-md-4">
              <div class="pull-right">
              <h6 class=".text-light">SIGUENOS EN </h6>
                    <div class="redes-footer">
                        <a href="https://www.facebook.com/"><img src="https://img.icons8.com/ios-filled/50/000000/facebook-circled.png"/></a>
                        <a href="https://twitter.com/"><img src="https://img.icons8.com/ios-filled/50/000000/twitter.png"/></a>
                        <a href="https://www.youtube.com/"><img src="https://img.icons8.com/ios-filled/50/000000/youtube-squared.png"/></a>
                    </div>
              </div>
              <div class="pull-right"> <p class=".text-light text-right">@2020.<br> Todos los derechos reservados.</p></div>
          </div>
        </div>  
      </div>
      </footer> 

</div> 

    </body>

    
</html>

<script async>(function(w, d) { var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/0a07081f44e1ceae93228cc15295341a"); h.appendChild(s); })(window, document);</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="js/funciones.js"></script>