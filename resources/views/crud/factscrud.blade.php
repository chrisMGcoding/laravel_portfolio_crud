@extends('template.html')

@section('content')

    <div class="container">

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Nombre</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
            </tr>
        </thead>

        <tbody>

        @foreach($statistique as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->titre)}}</td>
                <td>{{($item->nombre)}}</td>
                <td>
                    <form action="/facts/{{$item->id}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <button><a href="/crud/factsshow/{{$item->id}}">Show</a></button>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    <h3 class="mt-2 mb-2">Ajout d'un nouveau titre/Nombre :</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/facts/store" method="post">
    @csrf

        <label class="mt-2 mb-2" for="">Titre :</label>
        <input type="text" name="titre" id="" value="{{old('titre')}}">
                <br>
        <label class="mt-2 mb-2" for="">Nombre :</label>
        <input type="text" name="nombre" id="" value="{{old('nombre')}}">
                <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>
    
    </form>



    </div>

@endsection