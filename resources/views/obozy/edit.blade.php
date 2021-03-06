@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edycja produktu</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('obozy.update', $oboz->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="50" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $oboz->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="500" type="text" class="form-control @error('description') is-invalid @enderror"  name="description" autofocus>{{$oboz->description}}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="personLimit" class="col-md-4 col-form-label text-md-end">Limit os??b</label>

                            <div class="col-md-6">
                                <input id="personLimit" type="number" min="0" class="form-control @error('personLimit') is-invalid @enderror" name="personLimit" value="{{$oboz->personLimit}}" required autocomplete="personLimit" autofocus>

                                @error('personLimit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$oboz->price}}" required autocomplete="price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                            <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Kategoria</label>

                            <div class="col-md-6">
                                <select id="price" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">Brak</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if(!is_null($oboz->category)&& $oboz->category->id==$category->id) selected @endif>{{$category->name}}</option>
                                        
                                        @endforeach
                                        
                                </select>
                                    
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                         <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Grafika</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">

                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/obozy/img.php?q=' . $oboz->image_path) }}" alt="Zdj??cie produktu">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Zapisz') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
