<x-layout>
  <h1>Login</h1>
    <form method='POST' action='/authenticate'>
      @csrf
      <div>
        <label for='email'>Email</label>
        <input type='text' name='email' value='{{ old('email') }}' />
        @error('email')
        <p>{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label for='password'>Password</label>
        <input type="password" name="password" />
      </div>

      <div>
        <button type='submit'>Login</button>
      </div>
    
    </form>
</x-layout>