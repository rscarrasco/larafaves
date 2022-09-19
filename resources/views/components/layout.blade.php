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
    <nav>
      <span>
        <a
        @auth
        href='/{{ auth()->user()->userhandle }}'
        @else
        href='/'
        @endauth
        >Larafaves<a>
        </span>
      <ul>
        @auth
        <li>{{ auth()->user()->name }}</li>
        <li><form method='POST' action='/logout'>
          @csrf
          <button type='submit'>Logout</button>
        </form>
        </li>
        @else
        <li><a href='/register'>Register</a></li>
        <li><a href='/login'>Login</a></li>
        @endauth
      </ul>
    </nav>
    {{$slot}}
    <x-flash-message />
  </body>
</html>