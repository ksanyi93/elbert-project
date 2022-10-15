<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
        {{-- <a class="navbar-brand" href="#page-top"><img src="{{ url('template/assets/img/navbar-logo.svg') }}" alt="..." /></a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">


            <div class="dropdown">
                <button class="btn btn-light me-1  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Kategóriák
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/admin/category/add">Kategóriák felvétele</a></li>
                    <li><a class="dropdown-item" href="/admin/category/list">Kategóriák listázása</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-light me-1  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Cikkek
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/admin/article/add">Cikkek felvétele</a></li>
                    <li><a class="dropdown-item" href="/admin/article/list">Cikkek listázása</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>
