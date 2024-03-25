          <!-- Include header.blade.php -->
          @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Employee /</span> Add Employee</h4>

              <div class="card mb-4">
                <h5 class="card-header">Employee Details</h5>
                <!-- Account -->
                <div class="card-body">
                  <form action="{{url('/ademployee_action')}}" method="post" enctype="multipart/form-data">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <img src="{{url('public/assets/admin/assets/img/avatars/default_profile.jpg')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                      <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                          <span class="d-none d-sm-block">Upload photo</span>
                          <i class="bx bx-upload d-block d-sm-none"></i>
                          <input type="file" id="upload" name="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                        </label>
                        <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                          <i class="bx bx-reset d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Reset</span>
                        </button>

                        <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                      </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label for="name" class="form-label">Name</label>
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <input class="form-control" type="text" id="name" name="name" required autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="organization" class="form-label">Gender</label>
                      <br>
                      <label>
                        <input type="radio" id="gender" name="gender" value="Male" checked="">
                        Male
                      </label>
                      <label>
                        <input type="radio" id="gender" name="gender" value="Female">
                        Female
                      </label>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label for="role" class="form-label">Role</label>
                      <select class="form-control" name="role" id="role" required>
                        <option selected="" value="">--Select Type--</option>
                        @foreach ($view_role as $key )
                        <option value="{{$key->role}}">{{$key->role}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label for="email" class="form-label">E-mail</label>
                      <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label" for="number">Phone Number</label>
                      <input type="text" id="number" name="number" class="form-control" placeholder="" required />
                    </div>

                    <div class="mb-3 col-md-6">
                      <label for="pincode" class="form-label">Pin Code</label>
                      <input type="text" class="form-control" id="pincode" name="pincode" placeholder="629157"  maxlength="6" required />
                    </div>

                    <div class="mb-3 col-md-6">
                      <label for="address" class="form-label">Address</label>
                      <textarea class="form-control" id="address" name="address" placeholder="Address" rows="1" required>
                            </textarea>
                    </div>

                    <div class="mt-2">
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      <!-- <button type="reset" class="btn btn-outline-secondary">Reset</button> -->
                      <a href="{{url('/dashboard')}}"> 
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