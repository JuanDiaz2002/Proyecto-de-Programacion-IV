<?php
    require('header.php');

?>



<div class="content-wrapper">
      
<!-- Input addon -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Contacto</h3>
              </div>

              <div class="card-body">
                <div> 
                  <h4>Si tienes alguna duda, llena este formulario y nos comunicaremos lo más rapido posible contigo...<br><br></h4>
                </div>


                <?php
            if(!empty($errorMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='aler'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn btn-close' date-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
        ?>      
                <form action="" method="post" name="formulario" id="formulario">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Nombre Completo:</span>
                  </div>
                  <input type="hidden" name="id" id="id" class="form-control" value="">  
                  
                  <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Ingrese su nombre completo" >
                </div>

                 
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Correo Electronico:</span>
                  </div>
                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo">
                </div>

            
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Telefono Celular:</span>
                  </div>
                  <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su celular">
                </div>

          
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Producto:</span>
                  </div>
                  <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Ingrese la categoria de producto" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Mensaje:</span>
                  </div>
                  <input type="textarea" id="mensaje" name="mensaje" class="form-control" placeholder="Escriba su duda o comentario" style="height:80px">
                </div>


                

          
                <?php
            if(!empty($successMessage)){
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='aler'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn btn-close' date-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
        ?>
        
        <button  type="submit" class="btn btn-primary" onclick="guardaryeditar();">Enviar</button>
                                <!--fin de card body-->
                              </div>
          </form>

        
                
              

<center>
<div name="mapa">
      <h2>Encuentranos en: </h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1919.7626653869304!2d-86.77196972716952!3d15.776230284529563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f69a839f740363b%3A0x31fb005677d5b8a0!2sFerreter%C3%ADa%20Pamela!5e0!3m2!1ses-419!2shn!4v1678939377377!5m2!1ses-419!2shn" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    </div>
      </center>

      <script type="text/javascript" src="script/contacto.js"></script>
<?php
    require('footer.php');
?>