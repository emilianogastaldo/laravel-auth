@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <header class="mt-5">
        <h1>Projects</h1>
    </header>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Stato</th>
            <th scope="col">Creato il</th>
            <th scope="col">Ultima modifica</th>
            <th scope="col">
              <div class="text-center">
                <a href="{{route('admin.projects.create')}}" class="btn btn-success"><i class="fas fa-plus-square me-2"></i>Nuovo</a>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project )
            <tr>
              <th scope="row">{{$project->id}}</th>
              <td>{{$project->title}}</td>
              <td>{{$project->slug}}</td>
              <td>{{$project->is_published ? 'Pubblicato' : 'Non pubblicato'}}</td>
              <td>{{$project->getFormatedDate('created_at')}}</td>
              <td>{{$project->getFormatedDate('updated_at', 'd-m-Y H:i:s')}}</td>
              <td>
                <div class="d-flex gap-2 justify-content-center">
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
                    <form action="{{route('admin.projects.destroy', $project)}}" method="POST" class="delete-form" data-bs-toggle="modal" data-bs-target="#modal">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger"><i class="fas fa-trash-can"></i></button>
                    </form>
                </div>
              </td>
            </tr>
                
            @empty
                <tr>
                    <td colspan="6"><h3>Non ci sono progetti</h3></td>
                </tr>
            @endforelse
         
        </tbody>
      </table>

      {{-- Paginazione --}}
      @if ($projects->hasPages())
          {{$projects->links()}}
      @endif  
@endsection

@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection