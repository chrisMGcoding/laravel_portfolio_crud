@extends('template.html')

@section('content')

    <div class="container">

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Anniversaire</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">Ville</th>
                <th scope="col">Age</th>
                <th scope="col">Diplome</th>
                <th scope="col">email</th>
                <th scope="col">freelance</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
            </tr>
        </thead>

        <tbody>

        @foreach($coordonnee as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->anniversaire)}}</td>
                <td>{{($item->website)}}</td>
                <td>{{($item->phone)}}</td>
                <td>{{($item->ville)}}</td>
                <td>{{($item->age)}}</td>
                <td>{{($item->diplome)}}</td>
                <td>{{($item->email)}}</td>
                <td>{{($item->freelance)}}</td>
                <td>
                    <form action="/contact/{{$item->id}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <button><a href="/crud/contactshow/{{$item->id}}">Show</a></button>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    <h3 class="mt-2 mb-2">Ajout de nouvelles coordoonnées :</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/store" method="post">
    @csrf

        <label class="mt-2 mb-2" for="">Anniversaire :</label>
        <input type="text" name="anniversaire" id="" value="{{old('anniversaire')}}">
                <br>
        <label class="mt-2 mb-2" for="">Website :</label>
        <input type="text" name="website" id="" value="{{old('website')}}">
                <br>
        <label class="mt-2 mb-2" for="">Phone :</label>
        <input type="text" name="phone" id="" value="{{old('phone')}}">
                <br>
        <label class="mt-2 mb-2" for="">Ville :</label>
        <input type="text" name="ville" id="" value="{{old('ville')}}">
                <br>
        <label class="mt-2 mb-2" for="">Age :</label>
        <input type="text" name="age" id="" value="{{old('age')}}">
                <br>
        <label class="mt-2 mb-2" for="">Diplôme :</label>
        <input type="text" name="diplome" id="" value="{{old('diplome')}}">
                <br>
        <label class="mt-2 mb-2" for="">Email :</label>
        <input type="text" name="email" id="" value="{{old('email')}}">
                <br>
        <label class="mt-2 mb-2" for="">Freelance :</label>
        <input type="text" name="freelance" id="" value="{{old('freelance')}}">
                <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>
    
    </form>



    </div>

@endsection