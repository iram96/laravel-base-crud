<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}} </li>
                @endforeach
            </ul>
        </div>
        
    @endif


</div>

@if ($comic->exists)
    
<form action="{{ route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    
@else
    
<form action="{{ route('comics.store')}}" method="POST" enctype="multipart/form-data">
@endif

@csrf
<div class="container ">
    <div class="row justify-content-end">



        <div class="mb-3 col-8">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Type here..." value="{{ old('title', $comic->title)}}">
        </div>
        
        <br>

        <div class="mb-3 col-12">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control" id="content" rows="3" name="description" placeholder="Type here...">{{ old('description', $comic->description)}}</textarea>
        </div>

        <br>

        <div class="mb-3 col-12">
            <label for="type" class="form-label">Type</label>
            <textarea class="form-control" id="type" rows="3" name="type" placeholder="Type here...">{{ old('type', $comic->type)}}</textarea>
            
        </div>

        <br>
        <div class="mb-3 col-12">
            <label for="series" class="form-label">Series</label>
            <textarea class="form-control" id="series" rows="3" name="series" placeholder="Type here...">{{ old('series', $comic->series)}}</textarea>
            
        </div>

        <br>

        <div class="mb-3 col-12">
            <label for="price" class="form-label">Price</label>
            {{-- <textarea class="form-control" id="price" rows="3" name="price" placeholder="price here...">{{ old('price', $comic->price)}}</textarea> --}}
            <input type="number" name="price" id="price" value="{{ old('price', $comic->price)}}">
        </div>

        <br>
        <div class="mb-3 col-12">
            <label for="sale_date" class="form-label">Release Date</label>
            
            <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date)}}">
        </div>

        <br>

        <div class="mb-3 col-12">
            <label for="image" class="form-label">URL Immagine</label>
            <input type="file" class="form-control-file" id="image" name="image" placeholder="Type here...">
        </div>

        
    
        <button type="submit" class="btn btn-success">Save</button>
    </div> 


</div>
</form>