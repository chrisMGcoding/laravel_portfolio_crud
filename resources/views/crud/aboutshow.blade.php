@extends('template.html')

@section('content')

    <div class="container">

        <h3>Section About :</h3>

        <p>ID : {{($titre->id)}}</p>
        <p>Titre : {{($titre->titre)}}</p>
        <p>Description : {{($titre->description)}}</p>

        <td>
            <button><a href="/crud/aboutedit/{{$titre->id}}">Update</a></button>
        </td>

    </div>

@endsection