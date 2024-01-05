@extends('common')

@section('content')
    <div class="container-md">
        <form action="">
            @csrf
            <br>

            <div class="mb-3">
                <label for="judul_film">judul film</label>
                <input type="text" class="form-control" name="judul_film">
            </div>
            <br>

            <div class="mb-3">
                <label for="description_film">Deskripsi</label>
                <input type="text" class="form-control" name="description_film">
            </div>

            <div class="mb-3">
                <label for="director_id">director</label>
                <select id="director_id" name="director_id" class="form-control">
                    @isset($director_id)
                        @foreach($director_id as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    @endisset
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="genre_id">genre</label>
                <select id="genre_id" name="genre_id" class="form-control">
                    @isset($genre_id)
                        @foreach($genre_id as $data)
                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    @endisset
                    
                </select>
            </div>
                $table->integer('director_id');
                $table->integer('genre_id');
                $table->integer('director_id');

            <button class="btn btn-md btn-success" type="submit">
                submit
            </button>

        </form>
    </div>
@endsection