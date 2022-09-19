<x-layout>
  <h1>{{ $user['name'] }}'s faves</h1>
  @auth
  <a href='/{{ $user['userhandle'] }}/faves/create'>New fave</a>
  @endauth
  @if($faves)
    @foreach($faves as $fave)
      <div>
        <p>
          <a target='_blank' href='{{ $fave->link }}'>{{ $fave->name }}</a>
        </p>
        <p>{{ $fave->tags }}</p>
        <p>{{ $fave->description }}</p>
        @if($show_owner_tools)
        <p>
          <a href= '/{{ $user['userhandle'] }}/faves/{{ $fave->id }}/edit/'>Edit</a>
        </p>
        @endif
      </div>
    @endforeach
  @else
  <p>No faves found.</p>
  @endif
  <div>{{ $faves->links() }}</div>
</x-layout>