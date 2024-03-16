@extends('app')
@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 p-5 mx-auto">
            <form action="{{ route('films.index') }}" method="GET" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Film veya kategori ara" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Ara</button>
            </form>
        </div>
    </div>



</main>
@endsection
