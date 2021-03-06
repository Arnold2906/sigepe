<div class="modal fade" id="modal-edit-categoria" style="display: none;">
  <div class="modal-dialog">
    <form action="{{route('categorias.update',0)}}" method="post" class="modal-content">
      @csrf
      @method('PUT')
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Editar datos de la categoría</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-success">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre-edit">Nombre de la categoría</label>
                  <input id="nombre-edit" type="text" class="form-control"
                          name="nombre" placeholder="Ingrese la categoría" required>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!--/.col (left) -->
        </div> 
        <input id="id-edit" type="hidden" name="id">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success pull-left">Guardar cambios</button>
        <button type="" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </form><!-- /.form-modal-content -->
  </div><!-- /.modal-dialog -->
</div>
