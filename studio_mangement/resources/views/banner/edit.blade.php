 <!-- Include header.blade.php -->
 @include('connection/header')

  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Banner /</span> Edit Banner</h4>
      
      <div class="card mb-4">
        <h5 class="card-header">Banner Details</h5>
        <!-- Account -->
        <div class="card-body">
          <form action="{{url('/update_banner')}}" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$edit->id}}">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="{{url('public/assets/admin/assets/img/banner/'.$edit->banner)}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />

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
              <label for="title" class="form-label">Title</label>
              <input class="form-control" type="text" id="title" name="title" value="{{$edit->title}}" autofocus />
            </div>    

            <div class="mb-3 col-md-6">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" id="description" name="description" value="{{$edit->description}}" placeholder="" rows="4">
              {{$edit->description}}
              </textarea>
            </div>

            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">update</button>
              <a href="{{url('/banner_view')}}">
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