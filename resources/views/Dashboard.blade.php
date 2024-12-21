@include('cdn')

<h1>Dashboard Page</h1>

<h2>Hello, {{session('user')}}</h2>

<a href="logout">Logout</a>