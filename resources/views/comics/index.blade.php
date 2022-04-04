@extends('layouts.main')

@section('script')
    
@endsection

@section('content')

@forelse ($comics as $comic)
<div>
    <h3>{{ $comic->title}}</h3>
    <p>{{ $comic->description}}</p>
</div>
@empty
    -
@endforelse

@endsection