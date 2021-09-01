@extends('template.html')

@section('content')

    <div class="container">

        <h3>Section About :</h3>

        <p>ID : {{($photo->id)}}</p>
        <p>photo : {{($photo->nom)}}</p>

        <td>
            <button><a href="/crud/photoedit/{{$photo->id}}">Update</a></button>
        </td>

    </div>

@endsection