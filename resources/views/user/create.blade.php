<x-layout>
  <h1>Register</h1>
  <form method='POST' action='/users'>
    @csrf
    
    <div class='mb-3'>
      <label for='name' class='form-label'>Name</label>
      <input type="text" name="name" value='{{old('name')}}' class='form-control'>
      @error('name')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='userhandle' class='form-label'>Userhandle</label>
      <input type="text" name="userhandle" value='{{old('userhandle')}}' class='form-control'>
      @error('userhandle')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='email' class='form-label'>Email</label>
      <input type="text" name="email" value='{{old('email')}}' class='form-control'>
      @error('email')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='password' class='form-label'>Password</label>
      <input type="password" name="password" value='{{old('password')}}' class='form-control'>
      @error('password')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <label for='password_confirmation' class='form-label'>Confirm password</label>
      <input type="password" name="password_confirmation" value='{{old('password_confirmation')}}' class='form-control'>
      @error('password_confirmation')
        <p class='form-text text-danger'>{{ $message }}</p>
      @enderror
    </div>

    <div class='mb-3'>
      <button type='submit' class='btn btn-primary'>Submit</button>
    </div>

    <div class='mb-3'>
      <p>Already have an account? <a href='/login'>Login</a></p>
    </div>

  </form>
</x-layout>
