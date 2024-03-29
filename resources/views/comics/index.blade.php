@extends('layouts.main')

@section('script')
    
@endsection

@section('content')

<a href="{{ route('comics.create')}}" class="btn btn-success">Crea Nuovo Comic</a>

@forelse ($comics as $comic)
<div>
    <h3>{{ $comic->title}}</h3>
    <p>{{ $comic->description}}</p>
    <a href="{{ route('comics.show', $comic)}}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
    <a href="{{ route('comics.edit', $comic)}}"  class="btn btn-warning">Modify</a>
    <form action="{{ route('comics.destroy', $comic)}}" method="POST" class="delete-forms" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash"></i>
        </button>
    </form>
    
</div>
@empty
    -
@endforelse

@endsection