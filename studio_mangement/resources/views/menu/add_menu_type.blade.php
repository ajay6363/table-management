 <!-- Include header.blade.php -->
 @include('connection/header')

 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu /</span> Add Type</h4>

         <div class="card mb-4">
             <h5 class="card-header">Menu Type Details</h5>
             <!-- Account -->
             <div class="card-body">
                 <form action="{{url('/add_type')}}" method="post" enctype="multipart/form-data">
                     <div class="row">

                         <div class="mb-3 col-md-6">
                             <label for="name" class="form-label">Menu Type</label>
                             <input type="hidden" name="_token" value="{{csrf_token()}}">
                             <input class="form-control" type="text" id="type" name="type" required />
                         </div>

                         <div class="mt-2">
                             <button type="submit" class="btn btn-primary me-2">add</button>
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