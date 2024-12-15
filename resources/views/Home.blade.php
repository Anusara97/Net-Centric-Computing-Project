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

    #carouselExampleCaptions .carousel-inner img {
        height: 50vh; 
        object-fit: cover; /* Ensure the image fills the area without distortion */
    }

    #carouselExampleCaptions {
        height: 30vh; /* Apply consistent height to the carousel container */
    }
</style>

{{-- <div id="carouselExampleCaptions" class="carousel slide carousel-fade"> --}}
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/CS.jpg') }}" class="d-block w-100" alt="Computer Science">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Computer Science</h5>
                <p>The Department of Computer Science of the University of Ruhuna is the oldest and one of the most esteemed computer science departments in the university system of Sri Lanka.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Chem.jpg') }}" class="d-block w-100" alt="Chemistry">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Chemistry</h5>
                <p>The vision of the Department is to produce graduates with a sound knowledge in Chemistry having international recognition and the ability to fulfill chemistry based current needs of the country.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/Bot.jpg') }}" class="d-block w-100" alt="Botany">
            <div class="carousel-caption d-none d-md-block">
                <h5>Department of Botany</h5>
                <p>The Department of Botany conducts courses in all major fields of Botany for undergraduate students registered for B.Sc. General Degree and B.Sc. Special Degree programmes</p>
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
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>    
</div>