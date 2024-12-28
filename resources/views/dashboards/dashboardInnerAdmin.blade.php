@include('cdn')

<x-def-Header/>

<style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        height: 100vh;  /* Ensure body takes the full screen height */
    }

    .abc {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center items horizontally */
        flex-grow: 1;  /* Allow this section to take up available vertical space */
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

    /* Gradient Colors for Buttons */
    .btn-custom-1:nth-child(1) {
        background: linear-gradient(135deg, #56ab2f, #a8e063); /* Bright Green */
    }

    .btn-custom-1:nth-child(2) {
        background: linear-gradient(135deg, #74ebd5, #acb6e5); /* Bright Blue */
    }

    .btn-custom-1:nth-child(3) {
        background: linear-gradient(135deg, #ffe259, #ffa751); /* Bright Yellow */
    }

    .btn-custom-1:nth-child(4) {
        background: linear-gradient(135deg, #ff758c, #ff7eb3); /* Bright Pink */
    }

    .btn-custom-1:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
    }

    .btn-custom-1:active {
        transform: scale(0.98);
    }

    /* Footer Styles */
    x-footer {
        margin-top: auto;  /* Pushes the footer to the bottom */
    }

    /* Navbar Styles */
    .navbar {
        margin-bottom: 0;
    }

    .navbar-brand p {
        margin-bottom: 0; 
    }
</style>

<!-- Main Content Section -->
<div class="abc">
    <h1 class="section-heading">User Management</h1>
    
    <div class="button-grid">
        <a href="/addUser" class="btn-custom-1">Add User</a>
        <a href="/userList" class="btn-custom-1">View Users</a>        
    </div>
</div>

<!-- Footer Section -->
<x-Footer/>