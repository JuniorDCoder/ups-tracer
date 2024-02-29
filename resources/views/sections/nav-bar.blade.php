<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{route('home')}}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>Elevate</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{Route::currentRouteName() == 'about' ? 'active' : ''}}">About</a>
                <a href="{{route('services')}}" class="nav-item nav-link {{Route::currentRouteName() == 'services' ? 'active' : ''}}">Service</a>
                <a href="{{route('pricing')}}" class="nav-item nav-link {{Route::currentRouteName() == 'pricing' ? 'active' : ''}}">Price</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link  {{Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'single-blog' ? 'active': ''}} dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{route('blog')}}" class="dropdown-item">Blog Grid</a>
                        <a href="{{route('blog-single')}}" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link {{Route::currentRouteName() == 'contact' ? 'active' : ''}}">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
        </div>
    </nav>
</div>
