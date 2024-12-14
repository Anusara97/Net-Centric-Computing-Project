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
    <h1>Enter your login details</h1>
    <div class="abc">
        <form class="p-4 rounded shadow bg-white" style="width: 100%; max-width: 400px;">
            <div class="mb-3">
                <input type="text" class="form-control" id="specificSizeInputName" placeholder="User Name">
              </div>

            <div class="mb-3">
              <label for="specificSizeInputName" class="form-label">Username</label>
              <input type="text" class="form-control" id="specificSizeInputName" placeholder="User Name">
            </div>
            
            <div class="mb-3">
              <label for="specificSizeInputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="specificSizeInputPassword" placeholder="Password">
            </div>
        
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
              <label class="form-check-label" for="autoSizingCheck2">Remember me</label>
            </div>
        
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary me-2">Login</button>
              <button type="reset" class="btn btn-danger">Clear</button>
            </div>
          </form>
    </div>
</body>