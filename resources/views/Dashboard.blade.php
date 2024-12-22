@include('cdn')

<h1>Dashboard Page</h1>

<h2>Hello, {{session('user')}}</h2>

<p>This is the Dashboard</p>

<a href="logout">Logout</a>