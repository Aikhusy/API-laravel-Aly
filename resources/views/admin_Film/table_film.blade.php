@extends('common')

@section('content')
    <div class="container-md">
        <form action="">
            @csrf
            <br>

            <label for="judul_film">judul film</label>
            <input type="text" class="form-control" name="judul_film">
            <br>

            <label for="description_film">Deskripsi</label>
            <input type="text" class="form-control" name="description_film">
            <br>

            <label for="description_film"></label>
            <input type="text" class="form-control" name="description_film">
            <br>

            <button class="btn btn-md btn-success" type="submit">
                submit
            </button>

        </form>
    </div>
@endsection