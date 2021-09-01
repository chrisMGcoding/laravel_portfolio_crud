@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/factsupdate/{{$statistique->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Titre :</label>
            <input type="text" name="titre" id="" value="{{$statistique->titre}}">
                <br>
            <label class="mt-2 mb-2" for="">Nombre :</label>
            <input type="text" name="nombre" id="" value="{{$statistique->nombre}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection