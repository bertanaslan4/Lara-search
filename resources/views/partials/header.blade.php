<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

            <div class="col-4 text-center mx-auto">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{route('home')}}">Gorev</a>
            </div>

        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="{{route('home')}}">Anasayfa</a>
            @foreach($categories as $category)
            <a class="nav-item nav-link link-body-emphasis" href="{{route('category',$category->id)}}">{{$category->name}}</a>
            @endforeach

        </nav>
    </div>
</div>
