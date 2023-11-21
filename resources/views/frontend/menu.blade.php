<nav class="navbar navbar-dark bg-primary navbar-expand-lg navbar-light d-flex align-items-center justify-content-center">
    <div class="container-fluid w-auto">
        <a class="navbar-brand" href="{{ route('frontend.home') }}">Big Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.home') }}">Post
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.contact.index') }}">Contact
                    </a>
                </li>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdownMenuLink"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    {{--  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories as $category)
                            <li><a href="{{route('frontend.contact.submit', $category->id)}}">{{$category->title}}</a></li>
                        @endforeach
                    </ul>  --}}
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.users.register') }}">
                        <i class="fa-solid fa-user">Register</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.users.login') }}">
                        <i class="fa-solid fa-arrow-right-to-bracket ">Login</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
