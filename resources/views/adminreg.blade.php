<h1>Admin Registration</h1>

 {{-- span to show errors by the user  --}}
 <span style="color: red">
    {{-- then we do declare on errors to be shown --}}
    {{-- each error has been listed on its own on the same span --}}
    @error('adminname')
       {{ $message }} 
    @enderror<br>
    @error('email')
       {{ $message }} 
    @enderror<br>
    @error('password')
       {{ $message }} 
    @enderror
</span>

<form action="/adminregister" method="POST">
    @csrf
    <input type="text" name="adminname" placeholder="fill admin username"><br><br>
    <input type="email" name="email" placeholder="fill in your email"><br><br>
    <input type="password" name="password" placeholder="fill password"><br><br>
    <button type="submit">Register</button>
</form>

<span>You Already have an account <a href="/adminreg">Login</a></span>