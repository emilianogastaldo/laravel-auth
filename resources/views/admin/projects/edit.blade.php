@extends('layouts.app')

@section('title', 'Modifica Progetto')

@section('content')
<form action="{{route('admin.projects.index')}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="title">Titolo Progetto</label>
                <input id="title" class="form-control my-2" type="text" name="title" value="{{old('title', $project->title)}}" >
            </div>
        </div>
        <div class="col-10">
            <div class="form-group">
                <label for="image">Screenshot progetto</label>
                <input id="image" class="form-control my-2" type="text" name="image" value="{{old('image', $project->image)}}" >
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="content">Descrizione progetto</label>
                <textarea name="content" id="content" class="form-control my-2" rows="10">{{old('content', $project->content)}}</textarea>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary"><i class="far fa-hand-point-left me-2"></i>Torna indietro</a>
        <button type="submit" class="btn btn-warning"><i class="fas fa-pen me-2"></i>Modifica</button>
    </div>
</form>
@endsection