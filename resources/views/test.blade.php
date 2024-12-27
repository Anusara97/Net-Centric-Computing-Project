@include('cdn')

<style>
    .abc {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 1rem;  /* Reduced the overall padding from 2rem to 1rem */
        padding-top: 1rem; /* Reduces the space above the heading (reducing it to half) */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Ensures the heading and button section are stacked */
        height: 100vh;
    }

    .button-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two buttons per row */
        gap: 1rem;
        width: 100%;
        max-width: 800px;
        margin-top: 1rem; /* Provides space between heading and buttons */
    }

    .btn-custom-1 {
        display: flex;
        justify-content: center; /* Centers content horizontally */
        align-items: center; /* Centers content vertically */
        text-align: center; /* Ensures text lines are aligned at the center */
        height: 2.67in; /* Button height */
        padding: 0 1rem; /* Adds horizontal padding for better text appearance */
        border-radius: 20px;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        color: white;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s ease, box-shadow 0.3s ease;
        line-height: 1.2; /* Adjusts spacing between lines of text */
    }

    /* Gradient Colors */
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

    h2 {
        text-align: center; /* Centers the heading */
        font-size: 2rem;
        color: #333;
        margin-bottom: 1.5rem; /* Space between the heading and buttons */
    }
</style>

<div class="abc">
    <h2>Staff Dashboard</h2> <!-- Heading Section -->
    <div class="button-grid">
        <!-- Button 1 -->
        <a href="/function1" class="btn-custom-1">Registration Request Management</a>

        <!-- Button 2 -->
        <a href="/function2" class="btn-custom-1">User Management</a>
    </div>
</div>