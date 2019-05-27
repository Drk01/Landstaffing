@extends('layouts.app')

@section('title-left')
    Curriculum
@endsection

@section('content')
    <div class="col-xs-12">
        <form action="" method="post">
            <div class="form-group">
              <label for="curriculum">Ingrese una breve descripción de los servicios que pueda prestar: </label>
              <textarea class="form-control" name="curriculum" id="curriculum" rows="3">{{ $Curriculum }}</textarea>
            </div>
        </form>
    </div>
@endsection
