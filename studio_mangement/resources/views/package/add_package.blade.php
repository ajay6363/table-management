 <!-- Include header.blade.php -->
 @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Package /</span> Add Package</h4>

               
                  <div class="card mb-4">
                    <h5 class="card-header">Package Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                    <form  action="{{url('/addpackage')}}" method="post" enctype="multipart/form-data">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="{{url('public/assets/admin/assets/img/avatars/default_profile.jpg')}}"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              name="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
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
                            <label for="name" class="form-label">Package Name</label>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input
                              class="form-control"
                              type="text"
                              id="name"
                              name="name"                              
                              autofocus
                            />
                          </div> 

                          <div class="mb-3 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group input-group-merge">
                              <select name="symbol" id="symbol" class="input-group-text">
                                <option value="₹">₹</option>
                                <option value="$">$</option>
                                <option value="€">€</option>
                                <option value="£">£</option>
                                <option value="¥">¥</option>
                              </select>
                              <input class="form-control" type="text" id="price" name="price" placeholder=""  />
                            </div>
                          </div>

                          <div class="mb-3 col-md-6">
                          <label for="description" class="form-label">Description</label>
                            <textarea 
                            class="form-control" 
                            id="description" 
                            name="description" 
                            placeholder="Description"
                            rows="1"
                              >
                            </textarea>
                          </div>
                                                  
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Add package</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                       
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                
            </div>
            <!-- / Content -->

              <!-- Include footer.blade.php -->
            @include('connection/footer')