<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Vista Principal</title>
  </head>
  <body>
    <div class="container">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Cantante
      </button>

      <h1>Listar Cantante</h1>
      
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
            <form method="POST" action="<?php echo base_url().'/crear' ?>" enctype="multipart/form-data">
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
    <!-- CDN SWEET ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
      let mensaje = '<?php echo ($mensaje); ?>';

      if(mensaje == 5) {
        // Mensaje en caso de error al eliminar cli
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Se ha generado un error al eliminar el cliente'
        })
      } else if(mensaje == 4) {
        // Mensaje de confirmación al eliminar cli
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
        // Mensaje de confirmación al actualizar cli
        Swal.fire({
          icon: 'success',
          title: 'Cliente actualizado exitosamente',
          showConfirmButton: false,
          timer: 1500
        })
      } else if(mensaje == 1) {
        // Mensaje en caso de confirmación al crear cli
        Swal.fire({
          icon: 'success',
          title: 'Cliente agregado exitosamente',
          showConfirmButton: false,
          timer: 1500
        })
      } else if(mensaje == 0) {
        // Mensaje en caso de error al crear cli
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Se ha generado un error al crear el cliente'
        })
      }
    </script>
  </body>
</html>
