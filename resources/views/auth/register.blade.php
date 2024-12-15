@include('cdn')

<style>
    /* Center the form in the middle of the screen */
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
        <form class="p-4 rounded shadow bg-white" style="width: 100%; max-width: 500px;">
            <div class="mb-3 d-flex align-items-center">
                <img src="{{ asset('images/Ru.jpg') }}" alt="University logo" width="60" height="70" class="me-3">
                <div>
                    <label for="specificSizeInputName" class="form-label mb-0 fw-bold">University of Ruhuna</label><br>
                    <span class="text-muted">Past Paper Management System</span><br>
                    <span class="text-muted">Faculty of Science</span>
                </div>
            </div>

            <hr>
            
            <div class="mb-3">
                <h2 style="text-align: center">Registration</h2>
            </div>

            <div class="mb-3 row">
                <label for="specificSizeInputName" class="col-sm-4 col-form-label">Name with initials</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="specificSizeInputName" placeholder="A.B.C.Perera" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="specificSizeInputEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="specificSizeInputEmail" placeholder="perera@ruh.ac.lk" required>
                </div>
            </div>
            
            <div class="mb-3 row align-items-center">
                <label for="specificSizeInputName" class="col-sm-4 col-form-label">Designation</label>
                <div class="col-sm-8 d-flex">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="Designation" id="academicStaff" value="AcademicStaff" onchange="toggleFields()">
                        <label class="form-check-label" for="academicStaff">Academic Staff</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Designation" id="student" value="Student" onchange="toggleFields()">
                        <label class="form-check-label" for="student">Student</label>
                    </div>
                </div>
            </div>
            
            {{-- Hidden Fields --}}
            <div id="academicFields" class="hidden">
                <div class="mb-3 row">
                    <label for="staffID" class="col-sm-4 col-form-label">Staff ID:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="staffID" placeholder="RUH/SC/XXX">
                    </div>
                </div>
            
                <div class="mb-3 row">
                    <label for="department" class="col-sm-4 col-form-label">Department:</label>
                    <div class="col-sm-8">
                        <select name="department" class="form-control" id="department">
                            <option value="Bot">Botany</option>
                            <option value="CS" selected>Computer Science</option>
                            <option value="Chem">Chemistry</option>
                            <option value="Maths">Mathematics</option>        
                            <option value="Phy">Physics</option>
                            <option value="Zoo">Zoology</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div id="studentFields" class="hidden">
                <div class="mb-3 row">
                    <label for="studentID" class="col-sm-4 col-form-label">Student ID:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="studentID" placeholder="SC/20XX/XXXXX">
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

            <div class="mb-3 row">
                <label for="specificSizeInputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="specificSizeInputPassword" placeholder="Password" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="specificSizeInputConfirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="specificSizeInputConfirmPassword" placeholder="Confirm Password" required>
                </div>
            </div>

            <hr>
        
            <div class="d-flex justify">
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-danger">Reset</button>
            </div>
          </form>
    </div>
</body>