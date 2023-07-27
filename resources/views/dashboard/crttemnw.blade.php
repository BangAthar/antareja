<form method="POST" action="/dashboard/crt/adm/tem">
    @csrf
    <label for="email">email:</label>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <input type="submit" value="Login">
</form>