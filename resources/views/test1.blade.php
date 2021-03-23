@extends("layouts.app")

@section("content")


    <div class="row">

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Genres, just using id and name, as genres.json</h5>
                    <h6 class="card-subtitle mb-2 text-muted">genres.json ( Movies Excel )</h6>

                    <form action="{{ route('import_genres') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Genres</button>
                    </form>

                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Keywords, just using id and name, as keywords.json</h5>
                    <h6 class="card-subtitle mb-2 text-muted">keywords.json ( Movies Excel )</h6>

                    <form action="{{ route('import_keywords') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Keywords</button>
                    </form>

                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Actors, just using id and name, as actors.json</h5>
                    <h6 class="card-subtitle mb-2 text-muted">actors.json ( Movies Excel )</h6>

                    <form action="{{ route('import_actors') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Actors</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
