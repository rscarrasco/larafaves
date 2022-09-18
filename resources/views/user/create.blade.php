<x-layout>
  <h1>Register</h1>
  <form method='POST' action='/users'>
    @csrf
    
    <div>
      <label for='name'>Name</label>
      <input type="text" name="name" value='{{old('name')}}'>
      @error('name')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='userhandle'>Userhandle</label>
      <input type="text" name="userhandle" value='{{old('userhandle')}}'>
      @error('userhandle')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='email'>Email</label>
      <input type="text" name="email" value='{{old('email')}}'>
      @error('email')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='password'>Password</label>
      <input type="password" name="password" value='{{old('password')}}'>
      @error('password')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for='password_confirmation'>Confirm password</label>
      <input type="password" name="password_confirmation" value='{{old('password_confirmation')}}'>
      @error('password_confirmation')
        <p>{{ $message }}</p>
      @enderror
    </div>

    <div>
      <button type='submit'>Submit</button>
    </div>

    <div>
      <p>Already have an account? <a href='/login'>Login</a></p>
    </div>

  </form>
</x-layout>
