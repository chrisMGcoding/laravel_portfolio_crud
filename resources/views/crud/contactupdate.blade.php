@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/contactupdate/{{$coordonnee->id}}" method="post">
        @csrf
        @method("PUT")

        <label class="mt-2 mb-2" for="">Anniversaire :</label>
        <input type="text" name="anniversaire" id="" value="{{($coordonnee->anniversaire)}}">
                <br>
        <label class="mt-2 mb-2" for="">Website :</label>
        <input type="text" name="website" id="" value="{{($coordonnee->website)}}">
                <br>
        <label class="mt-2 mb-2" for="">Phone :</label>
        <input type="text" name="phone" id="" value="{{($coordonnee->phone)}}">
                <br>
        <label class="mt-2 mb-2" for="">Ville :</label>
        <input type="text" name="ville" id="" value="{{($coordonnee->ville)}}">
                <br>
        <label class="mt-2 mb-2" for="">Age :</label>
        <input type="text" name="age" id="" value="{{($coordonnee->age)}}">
                <br>
        <label class="mt-2 mb-2" for="">Diplôme :</label>
        <input type="text" name="diplome" id="" value="{{($coordonnee->diplome)}}">
                <br>
        <label class="mt-2 mb-2" for="">Email :</label>
        <input type="text" name="email" id="" value="{{($coordonnee->email)}}">
                <br>
        <label class="mt-2 mb-2" for="">Freelance :</label>
        <input type="text" name="freelance" id="" value="{{($coordonnee->freelance)}}">
                <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>

        </form>

    </div>

@endsection