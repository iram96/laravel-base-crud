@extends('layouts.main')

@section('script')
    
@endsection

@section('content')

<h1>Title: {{ $comic->title }}</h1>
<p>Description: <br>
    {{ $comic->description}}</p>
<img src="{{ $comic->thumb}}" alt="{{ $comic->title }}">
<h3>Price: {{ $comic->price}}</h3>
<p>Series: {{ $comic->series}} - Type: {{ $comic->type}}</p>
<span>Sale Date: {{ $comic->sale_date}}</span>
<form action="{{ route('comics.destroy', $comic)}}" method="POST" class="delete-forms" >
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-trash"></i>
    </button>
</form>
<a href="{{ route('comics.edit', $comic)}}"  class="btn btn-warning">Modify</a>


@endsection