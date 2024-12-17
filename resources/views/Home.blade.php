@include('cdn')
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
            <a class="btn custom-btn me-2" href="{{ url('/register') }}">Sign up</a>
            <a class="btn custom-btn" href="{{ url('/login') }}">Sign in</a>
        </div>
    </div>
</nav>

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

    #carouselExampleCaptions .carousel-inner img {
        height: 50vh; /* Proper height for images */
        object-fit: cover;
    }

    #carouselExampleCaptions {
        margin-bottom: 30px; /* Space below the carousel */
    }

    /* Body section styling */
    .page-body {
        padding: 20px;
        background-color: #f8f9fa;
    }

    /* Footer styling */
    footer {
        background-color: #2C3E50;
        color: white;
        padding: 30px 20px;
        text-align: center;
    }

    footer a {
        color: #ddd;
        text-decoration: none;
    }

    footer a:hover {
        color: white;
    }
</style>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/CS.jpg') }}" class="d-block w-100" alt="Computer Science">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Computer Science</h5>
                <p>The Department of Computer Science at the University of Ruhuna is one of the oldest and most esteemed departments in Sri Lanka.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Chem.jpg') }}" class="d-block w-100" alt="Chemistry">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Chemistry</h5>
                <p>Producing graduates with sound knowledge of Chemistry to fulfill the country's current needs.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Bot.jpg') }}" class="d-block w-100" alt="Botany">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Botany</h5>
                <p>Conducting courses in major fields of Botany for B.Sc. programs.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Mat.jpg') }}" class="d-block w-100" alt="Mathematics">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Mathematics</h5>
                <p>The Department of Mathematics is one of the most prestigious Mathematics departments in the country and is also one of the oldest among the six departments of the Faculty of Science, University of Ruhuna.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Phy.jpg') }}" class="d-block w-100" alt="Physics">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Physics</h5>
                <p>The Department of Physics conducts course in all majorfields of Physics for undergraduate students registered for B.Sc.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Zoo.jpg') }}" class="d-block w-100" alt="Zoology">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Zoology</h5>
                <p>The Department of Zoology conducts courses covering basic and applied fields of Zoology for undergraduate students registered for B.Sc. General Degree and B.Sc. Special Degree programs.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Page Body -->
<div class="page-body">
    <h1 class="text-center">Welcome to the <br> Past Paper Management System</h1>
    <p class="text-center">
        This system helps you access and manage <br>past examination papers across departments.
        Our aim is to make learning efficient and <br>accessible for all students.
    </p>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 University of Ruhuna - Faculty of Science. All rights reserved.</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
</footer>
