<x-layout>
  <h1>New fave</h1>
  <form method='POST' action='/{{ auth()->user()->userhandle }}/faves/store'>
    @csrf
    
    <div>
      <label for='link'>Link</label>
      <input type='text' name='link' />
      @error('link')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='name'>Name</label>
      <input type='text' name='name' />
      @error('name')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='tags'>Tags</label>
      <input type='text' name='tags' />
      @error('tags')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='description'>Description</label>
      <textarea name='description' ></textarea>
      @error('description')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='is_public'>Make link public?</label>
      <input type='checkbox' name='is_public' />
      @error('is_public')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <button type="submit">Create</button>
    </div>

  </form>
</x-layout>