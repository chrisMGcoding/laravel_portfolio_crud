@extends('template.html')

@section('content')

    <div class="container">

        <h3>Section About :</h3>

        <p>ID : {{($annee->id)}}</p>
        <p>Année : {{($annee->annee)}}</p>

        <td>
            <button><a href="/crud/resumeedit/{{$annee->id}}">Update</a></button>
        </td>

    </div>

@endsection