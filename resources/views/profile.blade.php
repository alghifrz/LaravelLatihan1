@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<h1>Ini Profile Page</h1>
<p>username: {{ session('user')['username'] }}</p>
<p>password: {{ session('user')['password'] }}</p>