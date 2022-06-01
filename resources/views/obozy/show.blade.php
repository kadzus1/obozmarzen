@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pokaz produktu</div>

                <div class="card-body">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" maxlength="50" class="form-control" name="name" value="{{ $oboz->name}}" disabled>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="500" type="text" class="form-control"  name="description" disabled>{{$oboz->description}}</textarea>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="personLimit" class="col-md-4 col-form-label text-md-end">Limit osób</label>

                            <div class="col-md-6">
                                <input id="personLimit" type="number" min="0" class="form-control" name="personLimit" value="{{$oboz->personLimit}}" disabled>

                               
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control" name="price" value="{{$oboz->price}}" disabled>

                            </div>
                        </div>
                    
                    <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Kategoria</label>

                            <div class="col-md-6">
                                <select id="price" class="form-control" name="category_id" disabled>
                                    @if(!is_null($oboz->category))
                                    <option>{{$oboz->category->name}}</option>
                                    @else
                                    <option>Brak</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    
                    <div class="row mb-3">
                            <div class="col-md-6">
                                <img src="{{ asset('storage/' . $oboz->image_path) }}" alt="Zdjęcie produktu">
                            </div>
                        </div>

                    </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
