@include('cdn')

<style>
    .custom-btn {
        background-color: #87CEEB;
        color: #003366;
        padding: 10px 20px;
        font-weight: bold;
        text-align: center;
        border-radius: 5px;
    }

    .custom-btn:hover {
        background-color: #62B2DB;
        color: white;
    }

    .abc {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 2rem;
        display: flex;
        flex-direction: column; /* Align items vertically */
        align-items: center; /* Center horizontally */
    }

    .section-heading {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1.5rem; /* Space between the heading and buttons */
        text-align: center;
        color: #333;
    }

    .button-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        width: 100%;
        max-width: 800px;
    }

    .btn-custom-1 {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 2.67in; /* Button height */
        padding: 0 1rem; /* Horizontal padding */
        border-radius: 20px;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease, box-shadow 0.3s ease;
        line-height: 1.2; /* Spacing between text lines */
    }
    /* Footer Styles */
    x-footer {
        margin-top: auto;  /* Pushes the footer to the bottom */
    }

    /* Gradient Colors */
    .btn-custom-1:nth-child(1) {
        background: linear-gradient(135deg, #ffe259, #ffa751); /* Bright Yellow */
    }

    .btn-custom-1:nth-child(2) {
        background: linear-gradient(135deg, #ff758c, #ff7eb3); /* Bright Pink */
    }

    .btn-custom-1:nth-child(3) {
        background: linear-gradient(135deg, #56ab2f, #a8e063); /* Bright Green */
    }

    .btn-custom-1:nth-child(4) {
        background: linear-gradient(135deg, #74ebd5, #acb6e5); /* Bright Blue */
    }

    .btn-custom-1:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
    }

    .btn-custom-1:active {
        transform: scale(0.98);
    }
</style>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/Ru.jpg') }}" alt="Logo" width="60" height="70" class="me-3">
            <div class="text-start">
                <p class="mb-0 fw-bold text-black" style="font-size: 1.5rem;">Past Paper Management System</p>
                <p class="mb-0 text-muted" style="font-size: 0.9rem;">Faculty of Science</p>
                <p class="mb-0 text-muted" style="font-size: 0.9rem;">University of Ruhuna</p>
            </div>
        </a>

        <div class="d-flex align-items-center">
            <p class="mb-0 text-black" style="font-size: 1.0rem;">Hello, {{$data->name}}</p>
            <ul class="nav nav-pills">  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('editUser/'.$data['id'])}}">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
    </div>    
</nav>
<hr>

<div class="abc">
    <!-- Heading Section -->
    <h1 class="section-heading">Admin Dashboard</h1>
    
    <!-- Button Section -->
    <div class="button-grid">
        <a href="/tempUserList" class="btn-custom-1">Registration Request Management</a>
        <a href="/inner" class="btn-custom-1">User Management</a>
        <a href="/add" class="btn-custom-1">Add Paper</a>
        <a href="/papers" class="btn-custom-1">Past Papers</a>
    </div>
</div>

<x-Footer/>