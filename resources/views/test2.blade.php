@extends("layouts.app")

@section("content")


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create a single file, movies.json, that contains an array of JSON objects for each movie, containing</h5>
                    <h6 class="card-subtitle mb-2 text-muted">movies.json ( Movies Excel )</h6>

                    <form action="{{ route('import_movies') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Movies</button>
                    </form>

                </div>
            </div>
        </div>


    </div>

@endsection
