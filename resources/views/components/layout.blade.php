<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Larafaves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
  </head>
  <body>
    <nav class='navbar navbar-expand-lg bg-dark navbar-dark'>
      <div class='container'>
        <span>
          <a class='navbar-brand'
          @auth
          href='/{{ auth()->user()->userhandle }}'
          @else
          href='/'
          @endauth
          >Larafaves<a>
        </span>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navmenu'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='navbar-collapse collapse' id='navmenu'>
          <ul class='navbar-nav ms-auto'>
            @auth
            <li class='nav-item nav-link'>{{ auth()->user()->name }}</li>
            <li class='nav-item'><form method='POST' action='/logout'>
              @csrf
              <button type='submit' class='btn btn-outline-warning'>Logout</button>
            </form>
            </li>
            @else
            <li class='nav-item'><a class='nav-link' href='/register'>Register</a></li>
            <li class='nav-item'><a class='btn btn-outline-info' href='/login'>Login</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    <div class='container'>
    <x-flash-message />
    {{$slot}}
    </div>
  </body>
</html>