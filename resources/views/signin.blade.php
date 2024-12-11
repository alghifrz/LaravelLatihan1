@if (session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

@if (session('belumlogin'))
    <p style="color: red;">{{ session('belumlogin') }}</p>
@endif

@if (session('success'))
    <p style="color: green;">{{  session('success') }}</p>
@endif

<form action="/profile" method="post">
    @csrf
    <h1>Sign In Page</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Sign In</button>
</form>
