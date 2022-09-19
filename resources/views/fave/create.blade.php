<x-layout>
  <h1>New fave</h1>
  <form method='POST' action='/{{ auth()->user()->userhandle }}/faves/store'>
    @csrf
    
    <div class='mb-3'>
      <label for='link' class='form-label'>Link</label>
      <input type='text' name='link' class='form-control'/>
      @error('link')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='name' class='form-label'>Name</label>
      <input type='text' name='name' class='form-control'/>
      @error('name')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='tags' class='form-label'>Tags</label>
      <input type='text' name='tags' class='form-control'/>
      @error('tags')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='description' class='form-label'>Description</label>
      <textarea name='description' class='form-control'></textarea>
      @error('description')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='form-check form-switch mb-3'>
      <input type='checkbox' name='is_public' class='form-check-input' />
      <label for='is_public' class='form-label' class='form-check-label'>Make link public?</label>
      @error('is_public')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <button type="submit" class='btn btn-primary'>Create</button>
    </div>

  </form>
</x-layout>