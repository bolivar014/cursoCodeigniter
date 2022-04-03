<?php 
  $idCantante = $datos[0]['id_cant'];
  $docCantante = $datos[0]['doc_cantante'];
  $nombCantante = $datos[0]['nombre_completo'];
  $nomArtCantante = $datos[0]['nombre_artistico'];
  $fNCantante = $datos[0]['fecha_nacimiento'];
  $paisCantante = $datos[0]['pais_vive'];
  $viveCantante = $datos[0]['ciudad_vive'];
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar datos</title>
  </head>
  <body>
    <div class="container">
      <h1>Actualización de cliente: <strong><?php echo ($nombCantante); ?></strong></h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" id="formActualizar" name="formActualizar" action="<?php echo base_url().'/actualizar' ?>" enctype="multipart/form-data" onsubmit="return false;">
            <input type="text" id="id_cant" name="id_cant" hidden="" value="<?php echo ($idCantante); ?>">
            <label for="nombre">Documento</label>
            <input type="text" id="doc_cantante" name="doc_cantante" class="form-control" value="<?php echo ($docCantante); ?>" required>
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" value="<?php echo ($nombCantante); ?>" required>
            <label for="nombre">Nombre Artistico</label>
            <input type="text" id="nombre_artistico" name="nombre_artistico" class="form-control" value="<?php echo ($nomArtCantante); ?>" required>
            <label for="nombre">Fecha Nac</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?php echo ($fNCantante); ?>" required>
            <label for="nombre">Pais Origen</label>
            <input type="text" id="pais_vive" name="pais_vive" class="form-control" value="<?php echo ($paisCantante); ?>" required>
            <label for="nombre">Ciudad Vive</label>
            <input type="text" id="ciudad_vive" name="ciudad_vive" class="form-control" value="<?php echo ($viveCantante); ?>" required>

            <br>
            
            <button class="btn btn-success" type="submit">Guardar</button>
          </form>
        </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- CDN SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
      // Eventos JQuery Validator
      jQuery.extend(jQuery.validator.messages, {
          required: "Este campo es obligatorio.",
          remote: "Por favor, rellena este campo.",
          email: "Por favor, escribe una direcci&oacute;n de correo v&aacute;lida",
          url: "Por favor, escribe una URL v&aacute;lida.",
          date: "Por favor, escribe una fecha v&aacute;lida.",
          dateISO: "Por favor, escribe una fecha (ISO) v&aacute;lida.",
          number: "Por favor, escribe un n&uacute;mero entero v&aacute;lido y sin espacios.",
          digits: "Por favor, escribe s&oacute;lo d&iacute;­gitos.",
          creditcard: "Por favor, escribe un n&uacute;mero de tarjeta v&aacute;lido.",
          equalTo: "Por favor, escribe el mismo valor de nuevo.",
          accept: "Por favor, escribe un valor con una extensi&oacute;n aceptada.",
          maxlength: jQuery.validator.format("Por favor, no escribas m&aacute;s de {0} caracteres."),
          minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
          rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
          range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
          max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
          min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
      });
      jQuery.validator.addMethod("filesize_max", function(value, element, param) {
          var isOptional = this.optional(element),
              file;
          if(isOptional) {
              return isOptional;
          }
          if ($(element).attr("type") === "file") {
              if (element.files && element.files.length) {
                  file = element.files[0];
                  return ( file.size && file.size <= param ); 
              }
          }
          return false;
      }, "El archivo supera un peso de (47kb).");

      // Valido todo tipo de formulario "form"
      $('form').each(function() {
          // Capturo formulario para verificar campos requeridos...
          $(this).validate({
              ignore: [],
              highlight: function (input) {
                  if($(input).parents('.form-group-sm').hasClass('formh')){
                      $(input).parents('.form-group-sm').addClass('has-error has-feedback');
                  } else {
                      $(input).addClass('has-error has-feedback');
                  }
              },
              unhighlight: function (input) {
                  if($(input).parents('.form-group-sm').hasClass('formh')){
                      $(input).parents('.form-group-sm').removeClass('has-error has-feedback');
                  } else {
                      $(input).removeClass('has-error has-feedback');
                  }
              },
              errorPlacement: function (error, element) {
                  if($(element).parents('.form-group-sm').hasClass('formh')){
                      $(element).parents('.form-group-sm .col-sm-8').append(error);
                  } else {
                      $(element).parent().append(error);
                  }
              }
          });
      });
      $("#formActualizar").on('submit', function(e){
          e.preventDefault();  //prevent form from submitting
          var data = $("#formActualizar").serializeArray();
          if($(this).valid()){ 
              actualizarCliente(data);
          } else { 
              // Cuando aÃºn no se ha terminado de llenar los campos
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Por favor, llenar los campos completamente'
              })
          }
      });
      
      function actualizarCliente(data){
        $.ajax({
            url: '<?php echo base_url().'/actualizar' ?>',
            type: 'POST',
            dataType: 'json',
            data: $("#formActualizar").serializeArray(),
            success: function(respuesta) {
              // console.log('success V2');
              // console.log(respuesta);
              if(respuesta.mensaje == "2") {
                // Mensaje de confirmación al actualizar cli
                Swal.fire({
                  icon: 'success',
                  title: 'Cliente actualizado exitosamente',
                  showConfirmButton: false,
                  timer: 1500
                })

                setTimeout(() => {
                  window.location.replace('<?php echo base_url().'/' ?>');
                }, 2000);
              } else if(respuesta.mensaje == "3") {
                // Mensaje en caso de error al actualizar cli
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error al actualizar el cliente'
                })
              }
            },
            error: function(err) {
              // console.log('error V2');
              // console.log(err);
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error interno al actualizar el cliente'
                })
            }
        })
      }
    </script>
  </body>
</html>
