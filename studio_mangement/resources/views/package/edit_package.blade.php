 <!-- Include header.blade.php -->
      @include('connection/header')

 <!-- Content wrapper -->
 <div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Package /</span> Edit Package</h4>

     <div class="card mb-4">
       <h5 class="card-header">Package Details</h5>

       <!-- Account -->
       <div class="card-body">
         <form action="{{url('/packageupdate')}}" method="post" enctype="multipart/form-data">
           <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$edit->id}}">
           <div class="d-flex align-items-start align-items-sm-center gap-4">
             <img src="{{url('public/assets/admin/assets/img/package/'.$edit->image)}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
             <div class="button-wrapper">
               <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                 <span class="d-none d-sm-block">Upload photo</span>
                 <i class="bx bx-upload d-block d-sm-none"></i>
                 <input type="file" 
                 id="upload" 
                 name="upload" 
                 class="account-file-input" 
                 hidden accept="image/png, image/jpeg" />
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
             <input class="form-control" type="text" id="name" name="name" value="{{$edit->package}}" autofocus />
           </div>

           <div class="mb-3 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group input-group-merge">
                              <select name="symbol" id="symbol"class="input-group-text">
                                <option  value="{{$edit->currency_symbol}}">{{$edit->currency_symbol}}</option>
                                <option value="₹">₹</option>
                                <option value="$">$</option>
                                <option value="€">€</option>
                                <option value="£">£</option>
                                <option value="¥">¥</option>
                                </select>
                            <input
                              class="form-control"
                              type="text"
                              id="price"
                              name="price"
                              placeholder=""
                              value="{{$edit->price}}"
                            />
                            </div>
                          </div>

           <div class="mb-3 col-md-6">
             <label for="description" class="form-label">Description</label>
             <textarea class="form-control" id="description" name="description"  value="{{$edit->description}}" rows="1">
             {{$edit->description}}
             </textarea>
           </div>
           
           <div class="mt-2">
             <button type="submit" class="btn btn-primary me-2">Update</button>
             <a href="{{url('/package_list')}}">
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