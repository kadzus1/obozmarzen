@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6"><h1>Lista obozów</h1></div>
        <div class="col-6"><a class="float-right" href="{{route('obozy.create')}}">
                <button type="button" class="btn btn-primary">Dodaj</button>
                </a>
            </div>
    </div>
    <div class="row">
        
    
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nazwa</th>
            <th scope="col">Opis</th>
            <th scope="col">Limit osób</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($obozy as $oboz)
            <tr>
                <th scope="row">{{ $oboz->id }}</th>
                <td>{{ $oboz->name }}</td>
                <td>{{ $oboz->description }}</td>
                <td>{{ $oboz->personLimit }}</td>
                <td>{{ $oboz->price }}</td>
                <td>
                    <a href="{{route('obozy.show', $oboz->id)}}">
                        <button class="btn btn-primary btn-sm ">Podgląd<br></button>
                    </a>
                    <a href="{{route('obozy.edit', $oboz->id)}}">
                        <button class="btn btn-success btn-sm ">Edycja<br></button>
                    </a>
                    <button class="btn btn-danger btn-sm delete" data-id="{{$oboz->id}}">Usuwanie<br></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$obozy->links()}}
    </div>
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{url('obozy')}}/" ;
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection