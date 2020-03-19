@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Crear un Nuevo video</h2> 
    <form action="{{route('saveVideo')}}" method="post" enctype="multipart/form-data" class="col-lg-7">
        {!!csrf_field()!!} 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>   
        @endif   
        <div class="from-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control"  id="title" name="title" value="{{old('title')}}">
            </div>
            <div class="from-group">
                <label for="description">Descripcion</label>
            <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
            </div>
            <div class="from-group">
                <label for="image">Miniatura</label>
                <input type="file" class="form-control"  id="image" name="image">
            </div>
            <div class="from-group">
                <label for="video">Archivo de video</label>
                <input type="file" class="form-control"  id="video" name="video">
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-success"> Crear video</button>
            </div>
            
        </form>
    </div>
</div>

@endsection
