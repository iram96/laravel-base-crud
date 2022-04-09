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


@endsection