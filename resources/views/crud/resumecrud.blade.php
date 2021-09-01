@extends('template.html')

@section('content')

    <div class="container">

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
            </tr>
        </thead>

        <tbody>

        @foreach($annee as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->annee)}}</td>
                <td>
                    <form action="/resume/{{$item->id}}" method="post">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <button><a href="/crud/resumeshow/{{$item->id}}">Show</a></button>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>

    <h3 class="mt-2 mb-2">Ajout d'une nouvelle année :</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/resume/store" method="post">
    @csrf

        <label class="mt-2 mb-2" for="">Nouvelle année :</label>
        <input type="text" name="annee" id="" value="{{old('annee')}}">
                <br>
        <button class="mt-2 mb-2" type="submit">Ajouter</button>
    
    </form>



    </div>

@endsection