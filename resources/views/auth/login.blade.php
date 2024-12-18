@include('cdn')

<x-log-Reg_-Header/>

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
        <form action="/result" class="p-4 rounded shadow bg-white" style="width: 100%; max-width: 400px;">
            @csrf
            <div class="mb-3 d-flex align-items-center">
                <img src="{{ asset('images/Ru.jpg') }}" alt="University logo" width="60" height="70" class="me-3">
                <div>
                    <label for="specificSizeInputName" class="form-label mb-0 fw-bold">Past Paper Management System</label><br>
                    <span class="text-muted">Faculty of Science</span><br>
                    <span class="text-muted">University of Ruhuna</span>
                </div>
            </div>
            
            {{-- username --}}
            <div class="mb-3">
              <label for="specificSizeInputName" class="form-label">Username</label>
              <input name="username" type="text" class="form-control" id="specificSizeInputName" placeholder="Username" value="{{old('username')}}">              
                <span class="text-danger">
                  @error('username')
                    <br>
                    <div class="alert alert-danger" style="text-align:center;" >
                      {{$message}}
                    </div>
                  @enderror
                </span>              
            </div>
            
            {{-- password --}}
            <div class="mb-3">
              <label for="specificSizeInputPassword" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="specificSizeInputPassword" placeholder="Password">
              <span class="text-danger">
                @error('password')
                  <br>
                  <div class="alert alert-danger" style="text-align:center;" >
                    {{$message}}
                  </div>
                @enderror
              </span>
            </div>
        
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
              <label class="form-check-label" for="autoSizingCheck2">Remember me</label>
            </div>
        
            <div class="d-flex justify">
                <button type="submit" class="btn btn-primary me-2">Login</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </div>
          </form>
    </div>
</body>