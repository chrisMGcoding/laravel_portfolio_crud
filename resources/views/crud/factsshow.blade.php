@extends('template.html')

@section('content')

    <div class="container">

        <h3>Section About :</h3>

        <p>ID : {{($statistique->id)}}</p>
        <p>statistique : {{($statistique->titre)}}</p>
        <p>Nombre : {{($statistique->nombre)}}</p>

        <td>
            <button><a href="/crud/factsedit/{{$statistique->id}}">Update</a></button>
        </td>

    </div>

@endsection