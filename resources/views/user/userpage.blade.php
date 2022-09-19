<x-layout>
  <h1>{{ $user['name'] }}'s faves</h1>
  @auth
  <a class='mb-3 btn btn-success' href='/{{ $user['userhandle'] }}/faves/create'>New fave</a>
  @endauth
  @if($faves)
    @foreach($faves as $fave)
      <div class='card mb-3'>
        <div class='card-body'>
          <h2 class='card-title'>
            <a target='_blank' href='{{ $fave->link }}'>{{ $fave->name }}</a>
          </h2>
          <x-fave-tags :tagsCsv='$fave->tags' />
          <p>{{ $fave->description }}</p>
        </div>
        @if($show_owner_tools)
        <div class='card-footer'>
          <a class='btn btn-outline-primary me-3' href= '/{{ $user['userhandle'] }}/faves/{{ $fave->id }}/edit/'>Edit</a>
          <form method='POST' action='/{{ $user['userhandle'] }}/faves/{{ $fave->id }}/remove' style='display:inline'>
            @csrf
            @method('DELETE')
            <button class='btn btn-outline-danger' type='submit'>Delete</button>
          </form>
        </div>
        @endif
      </div>
    @endforeach
  @else
  <p>No faves found.</p>
  @endif
  <div>{{ $faves->links() }}</div>
</x-layout>