@extends('template.html')

@section('content')

    <div class="container">

        <h3>Données personnelles :</h3>

        <p>ID : {{($coordonnee->id)}}</p>
        <p>Anniversaire : {{($coordonnee->anniversaire)}}</p>
        <p>Website : {{($coordonnee->website)}}</p>
        <p>phone : {{($coordonnee->phone)}}</p>
        <p>ville : {{($coordonnee->ville)}}</p>
        <p>age : {{($coordonnee->age)}}</p>
        <p>diplome : {{($coordonnee->diplome)}}</p>
        <p>email : {{($coordonnee->email)}}</p>
        <p>freelance : {{($coordonnee->freelance)}}</p>

        <td>
            <button><a href="/crud/contactedit/{{$coordonnee->id}}">Update</a></button>
        </td>

    </div>

@endsection