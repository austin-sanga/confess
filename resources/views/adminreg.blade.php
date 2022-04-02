<h1>Admin Registration</h1>
<form action="adminregister" method="POST">
    @csrf
    <input type="text" name="adminname" placeholder="fill admin username"><br><br>
    <input type="email" name="email" placeholder="fill in your email"><br><br>
    <input type="password" name="password" placeholder="fill password"><br><br>
    <button type="submit">Register</button>
</form>