@if ($project->exists)
    <form action="{{route('admin.projects.update', $project)}}" method="POST">
        @method('PUT')
    @else
    <form action="{{route('admin.projects.store')}}" method="POST"> 
@endif

    @csrf
    <div class="row g-4">
        <div class="col-6">
            <div class="form-group">
                <label for="title">Titolo Progetto</label>
                <input id="title" class="form-control my-2 @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror" type="text" name="title" value="{{old('title', $project->title)}}" >
                @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @else
                <div class="form-text">Inserisci il titolo del progetto</div>
                @enderror
            </div>
        </div>
        <div class="col-10">
            <div class="form-group">
                <label for="image">Screenshot progetto</label>
                <input id="image" class="form-control my-2 @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" type="url" name="image" value="{{old('image', $project->image)}}" >
                @error('image')
                <div class="invalid-feedback">{{$message}}</div>
                @else
                <div class="form-text">Inserisci il link dell'immagine</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="content">Descrizione progetto</label>
                <textarea name="content" id="content" class="form-control my-2 @error('content') is-invalid @elseif(old('content', '')) is-valid @enderror" rows="10">{{old('content', $project->content)}}</textarea>
                @error('content')
                <div class="invalid-feedback">{{$message}}</div>
                @else
                <div class="form-text">Inserisci la descrizione del progetto</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between my-4">
        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-secondary"><i class="far fa-hand-point-left me-2"></i>Torna indietro</a>
        <button type="submit" class="btn btn-warning"><i class="fas fa-pen me-2"></i>Modifica</button>
    </div>
</form>