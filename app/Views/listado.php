<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vista Principal</title>
    <style>
        .has-error label.error {
            color : #f33923 !important;
            font-size : 11px !important;
        }
        .has-error .form-control {
            border-color: #a94442 !important;
        }
        label.error {
            color: #f33923!important;
            font-size: 11px !important;
        }
        input.has-error,
        select.has-error  {
            border: solid 2px #a94442 !important;
        }
        textarea {
            resize: none;
        }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <form class="d-flex">
              
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    <div class="container">
      <br>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Cantante
      </button>

      <br>
      <br>

      <h1>Lista de Cantantes</h1>
      
      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="table table-hover table-dordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>DOC</th>
                  <th>NOMBRE COMPLETO</th>
                  <th>NOMBRE ARTISTICO</th>
                  <th>FECHA NAC</th>
                  <th>PAIS</th>
                  <th>CIUDAD VIVE</th>
                  <th>EDITAR</th>
                  <th>ELIMINAR</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $key) { ?>
                  <tr>
                    <td><?php echo ($key->id_cant); ?></td>
                    <td><?php echo ($key->doc_cantante); ?></td>
                    <td><?php echo ($key->nombre_completo); ?></td>
                    <td><?php echo ($key->nombre_artistico); ?></td>
                    <td><?php echo ($key->fecha_nacimiento); ?></td>
                    <td><?php echo ($key->pais_vive); ?></td>
                    <td><?php echo ($key->ciudad_vive); ?></td>
                    <td>
                      <a href="<?php echo base_url() . '/obtenerPersona/'.$key->id_cant ?>" class="btn btn-warning btn-small">Editar</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url() . '/eliminar/'.$key->id_cant ?>" class="btn btn-danger btn-small">Eliminar</a>
                      <!-- <a href="#" data-id_cli="<?php echo ($key->id_cant) ?>" id="btnEliminarCli" name="btnEliminarCli" class="btn btn-danger btn-small">Eliminar</a> -->
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" id="formCrear" name="formCrear" action="<?php echo base_url().'/crear' ?>" enctype="multipart/form-data" onsubmit="return false;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar cantante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label for="nombre">Documento</label>
                <input type="text" id="doc_cantante" name="doc_cantante" class="form-control" minlength="10" maxlength="10" required>
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" minlength="10" maxlength="25" required>
                <label for="nombre">Nombre Artistico</label>
                <input type="text" id="nombre_artistico" name="nombre_artistico" class="form-control" minlength="10" maxlength="25" required>
                <label for="nombre">Fecha Nac</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                <label for="nombre">Pais Origen</label>
                <input type="text" id="pais_vive" name="pais_vive" class="form-control" minlength="5" maxlength="25" required>
                <label for="nombre">Ciudad Vive</label>
                <input type="text" id="ciudad_vive" name="ciudad_vive" class="form-control" minlength="5" maxlength="25" required>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            
            </form>
          </div>
        </div>
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
          digits: "Por favor, escribe s&oacute;lo d&iacute;??gitos.",
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
      $("#formCrear").on('submit', function(e){
          e.preventDefault();  //prevent form from submitting
          var data = $("#formCrear").serializeArray();
          if($(this).valid()){ 
              crearCliente(data);
          } else { 
              // Cuando a????n no se ha terminado de llenar los campos
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Por favor, llenar los campos completamente'
              })
          }
      });
      
      function crearCliente(data){
        $.ajax({
            url: '<?php echo base_url().'/crear' ?>',
            type: 'POST',
            dataType: 'json',
            data: $("#formCrear").serializeArray(),
            success: function(respuesta) {
              // console.log('success V2');
              // console.log(respuesta);
              if(respuesta.mensaje == "1") {
                // Mensaje en caso de confirmaci??n al crear cli
                Swal.fire({
                  icon: 'success',
                  title: 'Cliente agregado exitosamente',
                  showConfirmButton: false,
                  timer: 1500
                })

                setTimeout(() => {
                  location.reload();
                }, 2000);
              } else if(respuesta.mensaje == 0) {
                // Mensaje en caso de error al crear cli
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error al crear el cliente'
                })
              }
            },
            error: function(err) {
              // console.log('error V2');
              // console.log(err);
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error interno al crear el cliente'
                })
            }
        })
      }

      $('#btnEliminarCli').on('click', function(e){
        // console.log('llego al evento click del bot??n eliminar');
        console.log($(this).attr('data-id_cli'));
        let idEliminar = $(this).attr('data-id_cli');

        $.ajax({
            url: '<?php echo base_url().'/eliminar' ?>',
            type: 'POST',
            dataType: 'json',
            data: $("#formCrear").serializeArray(),
            success: function(respuesta) {
              // console.log('success V2');
              // console.log(respuesta);
              if(respuesta.mensaje == "1") {
                // Mensaje en caso de confirmaci??n al crear cli
                Swal.fire({
                  icon: 'success',
                  title: 'Cliente agregado exitosamente',
                  showConfirmButton: false,
                  timer: 1500
                })

                setTimeout(() => {
                  location.reload();
                }, 2000);
              } else if(respuesta.mensaje == 0) {
                // Mensaje en caso de error al crear cli
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error al crear el cliente'
                })
              }
            },
            error: function(err) {
              // console.log('error V2');
              // console.log(err);
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Se ha generado un error interno al crear el cliente'
                })
            }
        })
        // console.log(e);
        // debugger;
      });

      let mensaje = '<?php echo ($mensaje); ?>';

      if(mensaje == 5) {
        // Mensaje en caso de error al eliminar cli
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Se ha generado un error al eliminar el cliente'
        })
      } else if(mensaje == 4) {
        // Mensaje de confirmaci??n al eliminar cli
        Swal.fire({
          icon: 'success',
          title: 'Cliente eliminado exitosamente',
          showConfirmButton: false,
          timer: 1500
        })
      } else if(mensaje == 3) {
        // Mensaje en caso de error al actualizar cli
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Se ha generado un error al actualizar el cliente'
        })
      } else if(mensaje == 2) {
        // Mensaje de confirmaci??n al actualizar cli
        Swal.fire({
          icon: 'success',
          title: 'Cliente actualizado exitosamente',
          showConfirmButton: false,
          timer: 1500
        })
      }
    </script>
  </body>
</html>
