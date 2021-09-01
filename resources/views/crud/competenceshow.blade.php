@extends('template.html')

@section('content')

    <div class="container">

        <h3>Section About :</h3>

        <p>ID : {{($competence->id)}}</p>
        <p>Compétence : {{($competence->competence)}}</p>
        <p>Pourcentage : {{($competence->pourcentage)}}</p>

        <td>
            <button><a href="/crud/competenceedit/{{$competence->id}}">Update</a></button>
        </td>

    </div>

@endsection