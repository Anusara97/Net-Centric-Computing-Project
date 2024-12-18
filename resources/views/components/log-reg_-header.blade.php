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

    .light-row {
        background-color: #f8f9fa; /* Light background color */
        padding: 10px 20px; /* Add some padding for spacing */
        border: 1px solid #ddd; /* Optional: Light border for clarity */
    }
</style>

<div class="light-row">
    <div class="d-flex justify-content-end align-items-center">
        <a class="btn custom-btn" href="{{ url('/') }}">Home</a>
    </div>
</div>
