          <!-- Include header.blade.php -->
          @include('connection/header')

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Restaurant /</span> Add Restaurant Details</h4>

    <div class="card mb-4">
      <h5 class="card-header">Restaurant Details</h5>
      <!-- Account -->                
      <div class="card-body">
        <form action="{{url('/addindex')}}" method="post" enctype="multipart/form-data">
        <div class="row">         

        <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="form-control" type="text" id="name" name="name"  autofocus />
            </div>

          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input class="form-control" type="text" id="email" name="email" placeholder="" />
        </div>

          <div class="mb-3 col-md-6">
            <label class="form-label" for="number">Phone Number</label>
            <input type="text" id="number" name="number" class="form-control" placeholder="" />
          </div>                  

          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" placeholder="Address" rows="1">
                </textarea>
          </div>

          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">add</button>
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