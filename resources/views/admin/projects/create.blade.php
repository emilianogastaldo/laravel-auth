@extends('layouts.app')

@section('title', 'Nuovo Progetto')

@section('content')
<h1>Crea un nuovo progetto</h1>
@include('includes.projects.form')
@endsection

@section('scripts')
<script>
    const placeholder = 'https://marcolanci.it/boolean/assets/placeholder.png';
    const input = document.getElementById('image');
    const preview = document.getElementById('preview');

    input.addEventListener('input', () =>{
        preview.src = input.value || placeholder;
    })
    // MAGIA NERA
    // cancello le due costanti input  e preview e scrivo direttamente:
    // 
    // image.addEventListener('input', () =>{
    //     preview.src = input.value || placeholder;
    // })
</script>

@endsection