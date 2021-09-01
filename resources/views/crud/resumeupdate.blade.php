@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/resumeupdate/{{$annee->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Annee :</label>
            <input type="text" name="annee" id="" value="{{$annee->annee}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection
