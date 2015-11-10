<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$username = array('name' => 'username', 'placeholder' => 'Nombre de usuario', 'class' => 'form-control', 'value' => $users['username'], 'disabled' => true);
$id = array('name' => 'id', 'placeholder' => 'ID', 'class' => 'form-control', 'value' => $users['id'], 'disabled' => true);
?>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div style="position: relative; background-color: #fff; -webkit-background-clip: padding-box; background-clip: padding-box; border: 1px solid #999; border: 1px solid rgba(0,0,0,.2); border-radius: 6px; outline: 0;"> 
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmar eliminación</h4>
        </div>
        <div class="modal-body">
            <p>Estás a punto de eliminar un usuario, este procedimiento es irreversible.</p>
            <p>¿Quieres continuar?</p>
            <p class="debug-url"></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-danger btn-ok">Eliminar</a>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <h2>Perfil de <?php echo $users['username'] ?></h2>
  <div class="media">
    <div class="media-left top-middle">
      <a href="#">
        <img class="media-object" src="http://1.bp.blogspot.com/-e5heUPDd0W0/Vh4gERbRymI/AAAAAAAAAUc/tQ9nGQKkIww/s72-c/CI.png" alt="Avatar" />
      </a>
    </div>
  <div class="media-body">
    <span class="glyphicon glyphicon-user"></span>
    <strong>Nombre de usuario</strong>
    <p><?php echo $users['username']; ?></p>
    <span class="glyphicon glyphicon-pushpin"></span>
    <strong>Identificador</strong>
    <p><?php echo $users['id']; ?></p>
    <span class="glyphicon glyphicon-eye-open"></span>
    <strong>Perfil de usuario</strong>
    <p><?php echo $users['profile']; ?></p>
  </div>
</div>
<div class="col-lg">&nbsp;</div>
<div class="btn-group">
  <?php
  echo anchor('users/edit/' . $users['id'], 'Edit', 'class="btn btn-warning"') . ' ';
  echo anchor('', 'Delete', 'class="btn btn-danger" data-href="' . base_url() . 'users/delete/' . $users['id'] . '" data-toggle="modal" data-target="#confirm-delete"') . ' ';
  ?>
</div>
</div>
<script type="text/javascript">
  $(document).on('ready', function() {
    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
  });

</script>
