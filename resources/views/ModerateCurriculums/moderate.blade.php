@extends('layouts.app')

@section('title-left')
Revisando curriculum: {{ $Usuario->name }} {{ $Usuario->lastname }}.
@endsection

@section('content')
  <form action="{{ route('ModerateStore',$Usuario->id) }}" method="post">
      @csrf
      @method('PUT')
    <div class="col-xs-6">
        <div class="form-group">
          <label for="name">Nombre: </label>
          <input type="text" class="form-control" id="name" value="{{ $Usuario->name }}" disabled>
        </div>
        <div class="form-group">
          <label for="lastname">Apellido paterno: </label>
          <input type="text" class="form-control" id="lastname" value="{{ $Usuario->lastname }}" disabled>
        </div>
        <div class="form-group">
          <label for="motherLastname">Apellido materno: </label>
          <input type="text" class="form-control" id="motherLastname" value="{{ $Usuario->motherLastname }}" disabled>
        </div>
    </div>
    <div class="col-xs-6">
      <div class="form-group">
        <label for="curriculum">Curriculum: </label>
        <textarea name="curriculum" rows="10" cols="100" class="form-control" disabled>{{ $Usuario->curriculum->first()->curriculum }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="abilities">Asignar habilidades/puestos: </label>
      <select id="abilities" name="abilities[]" multiple class="form-control">
        @foreach ($Puestos as $key => $Puesto)
          <option value="{{ $Puesto->id }}">{{ $Puesto->name }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
  </form>
@endsection

<script>
  window.onload = () => {
    $(document).ready(function() {
        $('#abilities').select2();
    });
}
</script>
