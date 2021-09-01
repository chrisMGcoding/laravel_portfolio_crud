@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/aboutupdate/{{$titre->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Titre :</label>
            <input type="text" name="titre" id="" value="{{$titre->titre}}">
                <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="description" id="" value="{{$titre->description}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection

