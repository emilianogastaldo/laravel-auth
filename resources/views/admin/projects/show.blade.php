@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <header class="my-5">
        <h1>{{$project->title}}</h1>
    </header>
    <div class="clearfix">
        @if ($project->image)
        <img src="{{asset('/storage/' . $project->image)}}" alt="{{$project->post}}" class="me-4 float-start img-fluid">
        @endif
        <p>{{$project->content}}</p>
        <div>
            <p><strong>Creato il: </strong>{{$project->getFormatedDate('created_at', 'd-m-Y H:i:s')}}</p>
            <p><strong>Ultima modifica il: </strong>{{$project->getFormatedDate('updated_at', 'd-m-Y H:i:s')}}</p>
        </div>
    </div>
    <footer class="mt-5 d-flex justify-content-between alig-items-center">
        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary"><i class="far fa-hand-point-left me-2"></i>Torna indietro</a>
        <div class="d-flex justify-content-between alig-items-center gap-2">
            <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-outline-warning"><i class="fas fa-pen me-2"></i>Modifica</a>
            <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger"><i class="fas fa-trash-can me-2"></i>Elimina</button>
            </form>
        </div>
    </footer>
@endsection

@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection