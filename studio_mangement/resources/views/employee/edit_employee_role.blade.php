 <!-- Include header.blade.php -->
 @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Employee /</span> Edit Role</h4>
               
                  <div class="card mb-4">
                    <h5 class="card-header">Role Details</h5>
                   <!-- Account -->                
                    <div class="card-body">
                        <form action="{{url('/update_role')}}" method="post" enctype="multipart/form-data">
                        <div class="row">         

                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Role</label>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$edit->id}}">
                            <input class="form-control" type="text" id="role" name="role" value="{{$edit->role}}" />
                            </div>

                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Update</button>                            
                            <a href="{{url('/employee/view__employee_role')}}">
                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                            </a>
                        </div>
                        </form>
                        </div>
                        <!-- /Account -->
                    </div>
                    </div>
                    <!-- / Content -->

                    <!-- Include footer.blade.php -->
                    @include('connection/footer')