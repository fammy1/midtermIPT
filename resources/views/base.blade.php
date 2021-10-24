<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>IWatch</title>
    <
</head>
<body>
<div class="container">
   <style>
        body {
            background-color: black;
            
        }
    </style>
    
    <nav class="navbar navbar-expand-lg navbar bg-secondary bg-gradient  p-md-3">
        <div class="container">
        
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link box text-white  " href="/">Home</a>
                    </li>
                   
                </ul>
                <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     @if(Auth::check())
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" aria-current="page" href="/dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link dropdown-toggle text-white nav-link py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-list-alt"></i> Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach(App\Models\Category::get() as $category)
                            <li>
                                <a class="dropdown-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/authors"><i class="fas fa-users"></i> Authors</a></li>
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" style="margin-left:1rem;" aria-current="page" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link py-3 px-0 px-lg-3 rounded" style="margin-left:5px;" aria-current="page" href="/register">Register</a>
                            </li>
                        @endif
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    @if (session ('Error'))
        <div class="alert alert-warning">
            <div class="container">
                {{session('Error')}}
            </div>
        </div>
    @endif
    @if (session ('Message'))
        <div class="alert alert-success">
            <div class="container">
                {{session('Message')}}
            </div>
        </div>
    @endif
    @if (session ('errors'))
        <div class="alert alert-warning">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    </div>

    
    
        @yield('content')
    </div>
</div>
</body>
</html>