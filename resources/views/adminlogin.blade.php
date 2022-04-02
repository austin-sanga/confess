<h1>Admin Login</h1>

{{-- linked to the adminAuth which is currently on  hault --}}
<form action="logedin" method="GET">
    @csrf
    <input type="text" name="addminname" placeholder="fill your admin name"><br><br>
    <input type="password" name="password" placeholder="fill in password"><br><br>
    <button type="submit">Login</button>
</form>