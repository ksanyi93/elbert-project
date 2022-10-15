<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        {{-- <a class="navbar-brand" href="#page-top"><img src="{{ url('template/assets/img/navbar-logo.svg') }}" alt="..." /></a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            @foreach ($category as $cat)
                <div class="dropdown">
                    <button class="btn btn-light me-1 @if ($cat->articles()->count() > 0) dropdown-toggle @endif"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $cat->name }}
                    </button>
                    @if ($cat->articles()->count() > 0)
                        <ul class="dropdown-menu">
                            @foreach ($cat->articles as $art)
                                <li><a class="dropdown-item" href="{{ $art->id }}">{{ $art->title }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</nav>
