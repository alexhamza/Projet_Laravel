
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link test" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <h5 class="nav-link test">Projet Laravel</h5>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
              <a style="color:black;" href="{{ url('/email') }}">Envoyer un mail |</a>
          @if(auth()->check())
              <a style="color:black;" href="{{ url('/signout') }}">Sign out</a>
          @else
              <a style="color: black" href="{{ url('/connexion') }}">Log in </a> / <a style="color: black" href="{{ url('/inscription') }}"> Sign in</a>
          @endif
        </form>
      </div>
    </nav>
</body>
</html>
