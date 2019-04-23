@extends('layouts.app')

<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Parece que tu cuenta está incompleta, te invitamos a <a style="color: orange" href="{{ route('account') }}" class="alert-link">rellenar los datos que faltan en tu cuenta</a> para que puedas accesar a todos los beneficios de la plataforma.</strong>
  </div>

@section('title-left')
Plain page
@endsection

@section('x-title')
Plain page
@endsection

@section('content')
Add content to the page ...
@endsection

<script type="text/javascript">
window.onload= () => {
  document.getElementById('open_modal').click();
}
</script>

    <button id="open_modal" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <h4>Text in a modal</h4>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>

        </div>
      </div>
    </div>
