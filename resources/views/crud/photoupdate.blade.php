@extends('template.html')

@section('content')

    <div class="container">

        <form action="/crud/photoupdate/{{$photo->id}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Photo :</label>
            <input type="text" name="nom" id="" value="{{$photo->nom}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection