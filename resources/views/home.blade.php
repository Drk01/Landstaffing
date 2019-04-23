@extends('layouts.app')

@section('content')

<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Parece que tu cueenta está incompleta, te invitamos a <a style="color: orange" href="{{ route('account') }}" class="alert-link">rellenar los datos que faltan en tu cuenta</a> para que puedas accesar a todos los beneficios de la plataforma  </strong>
  </div>

    <div class="page-title">
      <div class="title_left">
        <h3>Plain Page</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Plain Page</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              Add content to the page ...
          </div>
        </div>
      </div>
    </div>

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
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

@endsection
