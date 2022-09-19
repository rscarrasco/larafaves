<x-layout>
  <h1>Login</h1>
    <form method='POST' action='/authenticate'>
      @csrf
      <div class='mb-3'>
        <label for='email' class='form-label'>Email</label>
        <input type='text' name='email' value='{{ old('email') }}' class='form-control'/>
        @error('email')
        <div >
          <p class='form-text text-danger'>{{ $message }}</p>
        </div>
        @enderror
      </div>

      <div class='mb-3'>
        <label for='password' class='form-label'>Password</label>
        <input type="password" name="password" class='form-control'/>
      </div>

      <div class='mb-3'>
        <button type='submit' class='btn btn-primary'>Login</button>
      </div>
    
    </form>
</x-layout>