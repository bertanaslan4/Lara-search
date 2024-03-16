@extends('app')
@section('content')
<main class="container">

    <div class="row mb-2">
        <div class="col-md-12">
            @foreach($films as $film)
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">

                        <h3 class="mb-0">{{$film->name}}</h3>
                        <p class="card-text mb-auto">
                        </p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link" onclick="confirmDelete('{{ route('films.delete',$film->id) }}')">
                            Sil
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" />
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <script>
        function confirmDelete(url) {
            if (confirm('Bu filmi silmek istediğinizden emin misiniz?')) {
                window.location.href = url;
            }
        }
    </script>
</main>
@endsection
