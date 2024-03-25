 <!-- Include header.blade.php -->
 @include('connection/header')

 <div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="py-3 mb-4">
       <span class="text-muted fw-light">Banner / </span>Details
     </h4>

    
     <div class="row">
       <!-- User Sidebar -->
       <div class="col-xl-2 col-lg-5 col-md-5">
         <!-- User Card -->
         <div class="card mb-4">
           <div class="card-body">
             <div class="user-avatar-section">
               <div class=" d-flex align-items-center flex-column">
                 <img class="img-fluid rounded my-4" src="{{url('public/assets/admin/assets/img/banner/'.$view->banner)}}" height="150" width="150" alt="User avatar" />
                 <div class="user-info text-center">
                   <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$view->id}}">
                   <h4 class="mb-2">{{$view->title}}</h4>
                   <!-- <span class="badge bg-label-secondary">{{$view->role}}</span> -->
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="col-xl-4 col-lg-5 col-md-5">
         <!-- User Card -->
         <div class="card mb-4">
           <div class="card-body">

             <h5 class="pb-2 border-bottom mb-4">Details</h5>
             <div class="info-container">
               <ul class="list-unstyled">
                               
                 <li class="mb-3">
                 <strong>
                   <span class="fw-medium me-2">Description:</span>
                   </strong>
                   <br>
                   <span>{{$view->description}}</span>
                 </li>

               </ul>
               <div class="d-flex justify-content-center pt-3">
                 <a id="{{$view->id}}" href="{{ url('/edit_banner/'.$view->id) }}" class="btn btn-outline-primary me-3">Edit</a>
                 <!-- <a id="{{$view->id}}" href="{{ url('/delete/'.$view->id) }}" class="btn btn-outline-secondary">Delete</a> -->
               </div>
             </div>
           </div>
         </div>
       </div> 
       <!-- /User Card -->

       <!-- Include footer.blade.php -->
       @include('connection/footer')