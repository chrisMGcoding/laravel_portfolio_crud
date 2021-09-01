@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/competenceupdate/{{$competence->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Compétence :</label>
            <input type="text" name="competence" id="" value="{{$competence->competence}}">
                <br>
            <label class="mt-2 mb-2" for="">Pourcentage :</label>
            <input type="text" name="pourcentage" id="" value="{{$competence->pourcentage}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection
