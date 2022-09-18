<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Larafaves</title>
  </head>
  <body>
    <nav>
      <span>Larafaves</span>
      <ul>
        @auth
        <li>{{ auth()->user()->name }}</li>
        <li><a href='/logout'>Logout</a></li>
        @else
        <li><a href='/register'>Register</a></li>
        <li><a href='/login'>Login</a></li>
        @endauth
      </ul>
    </nav>
    {{$slot}}
  </body>
</html>