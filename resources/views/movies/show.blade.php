@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <img src="https://img1.hotstarext.com/image/upload/f_auto,t_hcdl/sources/r1/cms/prod/7155/1317155-h-e387fd45d3bf" class="card-image-top">
        <div class="card-body">
            <h1>{{ $movie->title }}</h1>
        <div class="text-danger">
              @for ($i = 1; $i <= $movie->rating_star; $i++)
              <i class="fas fa-star"></i>
              @endfor
        </div>
            <p>{{ $movie->description }}</p>

            <h3>Cast
              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-plus"></i>
              </button>
            </h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Aulia Sarah - <span class="text-muted font-italic">Badarawuhi</span>
                <form action="#" method="post">
                  <button type="submit" class="btn btn-link text-danger">Delete</button>
                </form>
              </li>
              </ul>

              <h3>Comments</h3>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Antok:</b>comingsson
                <form action="#" method="post">
                  <button type="submit" class="btn btn-link text-danger">Delete</button>
                </form>
              </li>
              </ul>
              <form action="#" method="POST">
                <input type="text" class="form-control" placeholder="say something...">
                <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
              </form>
              
        </div>
        <div class="card-footer">
            <form action="#" method="POST">
                <button type="submit" class="btn btn-link float-right">Delete</button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Cast</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <h1>Cast Role</h1>
                <form action="{{ route('movie_cast_store', $movie->id) }}" method="POST">
                  @csrf
                  <label>Actor Name</label>
                  <div class="form-group">
                  <select class="form-control" name="cast_movie_name">
                    <option value="" disabled selected>Choose Cast</option>
                    @if (count($casts))
                        @foreach ($casts as $cast)
                        <option value="{{ $cast->id }}">{{ $cast->name }}</option>
                        @endforeach
                    @endif
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <input type="text" class="form-control" name="cast_movie_role">
                  </div>
                  <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
                </form>
              </div>

              <div class="col-md-6">
                <h1>New Cast</h1>
                <form action="{{ route('casts.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label>Actor Name</label>
                    <input type="text" class="form-control" name="cast_name">
                  </div>
                  <div class="form-group">
                    <label>Actor Image</label>
                    <input type="text" class="form-control" name="cast_image">
                  </div>
                  <button type="submit" class="btn btn-primary mt-2 float-right">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection