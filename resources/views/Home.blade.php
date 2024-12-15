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
        background-color: #87CEEB; /* Sky blue background */
        color: #003366; /* Darker text content */
        padding: 10px 20px; /* Add padding for a better button shape */
        font-weight: bold; /* Bold text for emphasis */
        text-align: center;
        border-radius: 5px; /* Smooth corners */
    }

    .custom-btn:hover {
        background-color: #62B2DB; /* Slightly darker shade on hover */
        color: white; /* White text on hover for contrast */
    }

    .me-2 {
        margin-right: 10px; /* Space between buttons */
    }

    /* Adjust carousel height */
    #carouselExampleCaptions .carousel-inner img {
        height: 50vh; /* Set height to 1/4 of the viewport height */
        object-fit: cover; /* Ensure the image fills the area without distortion */
    }

    #carouselExampleCaptions {
        height: 30vh; /* Apply consistent height to the carousel container */
    }
</style>

<div id="carouselExampleCaptions" class="carousel slide">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/Phy.jpg') }}" class="d-block w-100" alt="Computer Science">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Zoo.jpg') }}" class="d-block w-100" alt="Mathematics">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Chem.jpg') }}" class="d-block w-100" alt="Chemistry">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    
</div>
