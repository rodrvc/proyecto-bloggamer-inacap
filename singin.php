<div class="modal fade" id="mod_singin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="singinDB.php" method="POST">
          <div class="form-group" >
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" name="nombreUsuario" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" id="message-text" >
          </div>
          <button type="submit" name="envios_inginfrom" class="btn btn-primary">Iniciar</button>
          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>