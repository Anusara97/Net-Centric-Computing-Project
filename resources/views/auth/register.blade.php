@include('cdn')

<x-log-Reg_-Header/>

<style>
    .abc {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f8f9fa;
    }
</style>

<body style="background-color: #f8f9fa">
    <div class="abc">
        <form action="/register" method="POST" class="p-4 rounded shadow bg-white" style="width: 100%; max-width: 500px;">
            @csrf

            {{-- Registration Confirmation Notification --}}
                @if(Session::has('success'))
                    <div class="alert alert-success" style="text-align:center">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger" style="text-align:center">
                        {{Session::get('fail')}}
                    </div>
                @endif
            {{-- end notification --}}

            <!-- Placeholder for alert -->
            <div id="formAlertContainer"></div>

            <div class="mb-3 d-flex align-items-center">
                <img src="{{ asset('images/Ru.jpg') }}" alt="University logo" width="60" height="70" class="me-3">
                <div>
                    <label for="specificSizeInputName" class="form-label mb-0 fw-bold">Past Paper Management System</label><br>
                    <span class="text-muted">Faculty of Science</span><br>
                    <span class="text-muted">University of Ruhuna</span>
                </div>
            </div>

            <hr>
            
            <div class="mb-3">
                <h2 style="text-align: center">Registration</h2>
            </div>

            <!-- Name -->
            <div class="mb-3 row">
                <label for="specificSizeInputName" class="col-sm-4 col-form-label">Name with initials</label>
                <div class="col-sm-8">
                    <input name="name" type="text" class="form-control" id="specificSizeInputName" placeholder="A.B.C.Perera" required>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3 row">
                <label for="specificSizeInputEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input name="email" type="email" class="form-control" id="specificSizeInputEmail" placeholder="perera@ruh.ac.lk" required>
                </div>
            </div>

            {{-- designation --}}
            <div class="mb-3 row align-items-center">
                <label for="specificSizeInputName" class="col-sm-4 col-form-label">Designation</label>
                <div class="col-sm-8 d-flex">
                    {{-- staff --}}
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="designation" id="academicStaff" value="Academic Staff" onchange="toggleFields()">
                        <label class="form-check-label" for="academicStaff">Academic Staff</label>
                    </div>
                    {{-- student --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="designation" id="student" value="Student" onchange="toggleFields()">
                        <label class="form-check-label" for="student">Student</label>
                    </div>
                </div>
            </div>
            
            {{-- Hidden Fields Staff --}}
            <div id="academicFields" class="hidden">
                <div class="mb-3 row">
                    <label for="staffID" class="col-sm-4 col-form-label">Staff ID:</label>
                    <div class="col-sm-8">
                        <input name="staffId" type="text" class="form-control" id="staffID" placeholder="RUH/SC/XXX">
                    </div>
                </div>
            
                <div class="mb-3 row">
                    <label for="department" class="col-sm-4 col-form-label">Department:</label>
                    <div class="col-sm-8">
                        <select name="department" class="form-control" id="department" placeholder="-Select One-">
                            <option value="Botany">Botany</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Mathematics">Mathematics</option>        
                            <option value="Physics">Physics</option>
                            <option value="Zoology">Zoology</option>
                        </select>
                    </div>
                </div>
            </div>
            
            {{-- Hidden Field Student --}}
            <div id="studentFields" class="hidden">
                <div class="mb-3 row">
                    <label for="studentID" class="col-sm-4 col-form-label">Student ID:</label>
                    <div class="col-sm-8">
                        <input name="studentId" type="text" class="form-control" id="studentID" placeholder="SC/20XX/XXXXX">
                    </div>
                </div>
            </div>

            <script>
                // Initial State: Hide fields
                document.getElementById("academicFields").style.display = "none";
                document.getElementById("studentFields").style.display = "none";
            
                // Function to toggle field visibility
                function toggleFields() {
                    const isAcademicStaff = document.getElementById("academicStaff").checked;
                    const isStudent = document.getElementById("student").checked;
            
                    // Show/Hide fields based on the selection
                    document.getElementById("academicFields").style.display = isAcademicStaff ? "block" : "none";
                    document.getElementById("studentFields").style.display = isStudent ? "block" : "none";
                }
            </script>

            <!-- Password -->
            <div class="mb-3 row">
                <label for="specificSizeInputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input name="password" type="password" class="form-control" id="specificSizeInputPassword" placeholder="Password" required>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3 row">
                <label for="specificSizeInputConfirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                    <input name="confPassword" type="password" class="form-control" id="specificSizeInputConfirmPassword" placeholder="Confirm Password" required>
                </div>
            </div>

            <hr>

            <div class="d-flex justify">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            const password = document.getElementById('specificSizeInputPassword').value;
            const confPassword = document.getElementById('specificSizeInputConfirmPassword').value;

            // Get alert container and remove any existing alerts
            const alertContainer = document.getElementById('formAlertContainer');
            alertContainer.innerHTML = '';

            if (password !== confPassword) {
                event.preventDefault(); // Prevent form submission

                // Create a new Bootstrap-styled alert
                const alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-danger';
                alertDiv.role = 'alert';
                alertDiv.innerHTML = `
                    <strong>Error!</strong> Passwords do not match. Please re-enter the same password.
                `;

                // Add alert to the container
                alertContainer.appendChild(alertDiv);
            }
        });
    </script>
</body>