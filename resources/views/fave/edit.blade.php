<x-layout>
  <h1>Edit fave</h1>
  <form method='POST' action='/{{ auth()->user()->userhandle }}/faves/{{ $fave->id }}'>
    @csrf
    @method('PUT')

    <div>
      <label for='link'>Link</label>
      <input type='text' name='link' value='{{ $fave->link }}' />
      @error('link')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='name'>Name</label>
      <input type='text' name='name' value='{{ $fave->name }}' />
      @error('name')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='tags'>Tags</label>
      <input type='text' name='tags' value='{{ $fave->tags }}' />
      @error('tags')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='description'>Description</label>
      <textarea name='description' >{{ $fave->description }}</textarea>
      @error('description')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='is_public'>Make link public?</label>
      <input 
        type='checkbox'
        name='is_public' 
        @if($fave->is_public)
        checked
        @endif 
        />
      @error('is_public')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <button type="submit">Edit</button>
    </div>

  </form>
</x-layout>