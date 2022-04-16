<h1>Admin Login</h1>

{{-- passing any login errors --}}
@error('adminname')
    {{ $message }}
@enderror

{{-- linked to the adminAuth which is currently on  hault --}}
<form action="/login" method="POST">
    @csrf
    <input type="text" name="adminname" placeholder="fill your admin name"><br><br>
    <input type="password" name="password" placeholder="fill in password"><br><br>
    <button type="submit">Login</button>
</form>

<span>You don't have an account <a href="/adminreg">register now</a></span>