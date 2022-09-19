<x-layout>
  <h1>{{ $user['name'] }}'s faves</h1>
  @auth
  <a href='/{{ $user['userhandle'] }}/faves/create'>New fave</a>
  @endauth
</x-layout>