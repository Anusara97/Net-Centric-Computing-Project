@include('cdn')

<x-def-Header/>

{{-- Scripts related to the deletion --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- end scripts --}}

<body style="background-color: #f8f9fa">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Level I Papers</h2>
        <div class="table-responsive mx-auto" style="max-width: 90%; padding: 15px; background: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            
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

            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Subject</th>
                        <th>Course Code</th> 
                        <th>Course Name</th>                       
                        <th>Year</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your dynamic content here -->
                    @foreach ($papersI as $paper)
                        <tr>
                            <td>{{$paper['department']}}</td>
                            <td>{{$paper['courseCode']}}</td>
                            <td>{{$paper['courseName']}}</td>
                            <td>{{$paper['year']}}</td>
                            
                            <td>
                                <a href="{{ route('download.paper', $paper->id) }}" class="btn btn-success">Download</a>
                                <button class="btn btn-danger" onclick="showRejectAlert('{{url('removePaper/'.$paper['id'])}}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- Leve 2 --}}

    <div class="container mt-5">
        <h2 class="text-center mb-4">Level II Papers</h2>
        <div class="table-responsive mx-auto" style="max-width: 90%; padding: 15px; background: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <tr>
                            <th>Subject</th>
                            <th>Course Code</th> 
                            <th>Course Name</th>                       
                            <th>Year</th>
                            <th>Operation</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your dynamic content here -->
                    @foreach ($papersII as $paper)
                        <tr>
                            <td>{{$paper['department']}}</td>
                            <td>{{$paper['courseCode']}}</td>
                            <td>{{$paper['courseName']}}</td>
                            <td>{{$paper['year']}}</td>
                            
                            <td>
                                <a href="{{ route('download.paper', $paper->id) }}" class="btn btn-success">Download</a>
                                <button class="btn btn-danger" onclick="showRejectAlert('{{url('removePaper/'.$paper['id'])}}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Level 3 --}}

    <div class="container mt-5">
        <h2 class="text-center mb-4">Level III Papers</h2>
        <div class="table-responsive mx-auto" style="max-width: 90%; padding: 15px; background: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <tr>
                            <th>Subject</th>
                            <th>Course Code</th> 
                            <th>Course Name</th>                       
                            <th>Year</th>
                            <th>Operation</th>
                        </tr>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your dynamic content here -->
                    @foreach ($papersIII as $paper)
                        <tr>
                            <td>{{$paper['department']}}</td>
                            <td>{{$paper['courseCode']}}</td>
                            <td>{{$paper['courseName']}}</td>
                            <td>{{$paper['year']}}</td>
                            
                            <td>
                                <a href="{{ route('download.paper', $paper->id) }}" class="btn btn-success">Download</a>
                                <button class="btn btn-danger" onclick="showRejectAlert('{{url('removePaper/'.$paper['id'])}}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function showRejectAlert(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to undo this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, Remove the Paper!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the URL to delete the user
                    window.location.href = url;
                }
            });
        }
    </script>
</body>