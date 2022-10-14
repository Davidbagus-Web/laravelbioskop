@extends('layouts.app')

@section('content')
<div class="card my-4">
    <img class="card-image-top" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/02/04/1176998900.jpg">
    <div class="card-body">
        <h1>Badarawuhi</h1>
        <p>All Movies of Badarawuhi</p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a href="#">KKN DI DESA PENARI</a>
        </li>
        </ul>
    </div>
    <div class="card-footer">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-link float-right">Delete</button>
        </form>
    </div>
</div>
@endsection