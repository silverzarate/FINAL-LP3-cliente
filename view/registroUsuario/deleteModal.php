<div class="modal fade" id="iddel<?=$row['idUsuario']?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¿Estas Seguro de Eliminar Usuario?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Una vez eliminado no se podrá recuperar el registro</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="delete.php?id=<?=$row['idUsuario']?>" type="button" class="btn btn-danger">Eliminar</a>
      </div>
    </div>
  </div>
</div>