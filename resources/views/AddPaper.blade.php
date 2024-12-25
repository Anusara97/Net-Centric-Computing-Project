@include('cdn')

<x-def-header />  {{--Default header component added--}}

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
        <form action="/add" method="POST" class="p-4 rounded shadow bg-white" style="width: 100%; max-width: 500px;" enctype="multipart/form-data">
            @csrf
                        
            <div class="mb-3">
                <h2 style="text-align: center">Add Past Paper</h2>
            </div>

            <hr>

            {{-- Paper Upload Confirmation Notification --}}
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

            {{-- Course name --}}
            <div class="mb-3 row">
                <label for="courseName" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                    <input name="courseName" type="text" class="form-control" id="specificSizeCourseName" placeholder="" required>
                </div>
            </div>

            {{-- Course Code --}}
            <div class="mb-3 row">
                <label for="specificSizeInputCourseCode" class="col-sm-4 col-form-label">Course Code</label>
                <div class="col-sm-8">
                    <input name="courseCode" type="text" class="form-control" id="specificSizeInputCourseCode" placeholder="COM1113" required>
                </div>
            </div>

            {{-- Department --}}
            <div class="mb-3 row">
                <label for="department" class="col-sm-4 col-form-label">Department:</label>
                <div class="col-sm-8">
                    <select name="department" class="form-control" id="">
                        <option value="Botany">Botany</option>
                        <option value="Computer Scienece" selected>Computer Science</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Mathematics">Mathematics</option>        
                        <option value="Physics">Physics</option>
                        <option value="Zoology">Zoology</option>
                    </select>
                </div>
            </div>

            {{-- Level --}}
            <div class="mb-3 row">
                <label for="level" class="col-sm-4 col-form-label">Level</label>
                <div class="col-sm-8">
                    <select name="level" class="form-control" id="">
                        <option value="Level 1 BSc. General Degree" selected>Level 1 BSc. General Degree</option>
                        <option value="Level 2 BSc. General Degree">Level 2 BSc. General Degree</option>
                        <option value="Level 3 BSc. General Degree">Level 3 BSc. General Degree</option>
                        <option value="Level 1 BSc. Special Degree">Level 1 BSc. Special Degree</option>
                        <option value="Level 2 BSc. Special Degree">Level 2 BSc. Special Degree</option> 
                        <hr>     
                        <option value="Level 1 BCS General Degree">Level 1 BCS General Degree</option>
                        <option value="Level 2 BCS General Degree">Level 2 BCS General Degree</option>
                        <option value="Level 3 BCS General Degree">Level 3 BCS General Degree</option>
                        <option value="Level 1 BCS Special Degree">Level 1 BCS Special Degree</option>
                        <option value="Level 2 BCS Special Degree">Level 2 BCS Special Degree</option>
                    </select>
                </div>
            </div>

            {{-- Semester --}}
            <div class="mb-3 row">
                <label for="semester" class="col-sm-4 col-form-label">Semester</label>
                <div class="col-sm-8">
                    <select name="semester" class="form-control" id="">
                        <option value="Semester 1" selected>Semester 1</option>
                        <option value="Semester 2">Semester 2</option>
                    </select>
                </div>
            </div>

            {{-- Academic Year --}}
            <div class="mb-3 row">
                <label for="academicYear" class="col-sm-4 col-form-label">Academic Year</label>
                <div class="col-sm-8">
                    <input name="year" type="text" class="form-control" id="specificSizeAcademicYear" placeholder="2024/25" required>
                </div>
            </div>

            {{-- Attachement --}}
            <div class="mb-3 row">
                <label for="paper" class="col-sm-4 col-form-label">Attachment:</label>
                <div class="col-sm-8">
                    <input type="file" name="paper" class="form-control" id="" required>
                </div>
            </div>

            {{-- Remark --}}
            <div class="mb-3 row">
                <label for="remark" class="col-sm-4 col-form-label">Remarks</label>
                <div class="col-sm-8">
                    <input name="remark" type="text" class="form-control" id="specificSizeAcademicYear">
                </div>
            </div>

            <hr>
        
            <div class="d-flex justify">
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-danger">Clear</button>
            </div>
          </form>
    </div>
</body>