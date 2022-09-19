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