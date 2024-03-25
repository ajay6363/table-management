 <!-- Include header.blade.php -->
 @include('connection/header')
 
 <div class="content-wrapper">
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="py-3 mb-4">
       <span class="text-muted fw-light">Contact / </span>Details
     </h4>
     <div class="row">
       <!-- User Sidebar -->
       
       <div class="col-xl-4 col-lg-5 col-md-5">
         <!-- User Card -->
         <div class="card mb-4">
           <div class="card-body">

             <h5 class="pb-2 border-bottom mb-4">Details</h5>
             <div class="info-container">
               <ul class="list-unstyled">

                 <li class="mb-3">
                   <strong>
                     <span class="fw-medium me-2"> Name :</span>
                   </strong>
                   <span>{{$key->name}}</span>
                 </li>

                 <li class="mb-3">
                   <strong>
                     <span class="fw-medium me-2">Email :</span>
                   </strong>
                   <span>{{$key->email}}</span>
                 </li>

                 <li class="mb-3">
                   <strong>
                     <span class="fw-medium me-2">Number :</span>
                   </strong>
                   <span>{{$key->number}}</span>
                 </li>

                 <li class="mb-3">
                   <strong>
                     <span class="fw-medium me-2">Subject :</span>
                   </strong>
                   <span>{{$key->subject}}</span>
                 </li>                 

                 <li class="mb-3">
                   <strong>
                     <span class="fw-medium me-2">Message :</span>
                   </strong>
                   <span>{{$key->message}}</span>
                 </li>

                 

               </ul>
               <div class="d-flex justify-content-center pt-3">
                 <a id="{{$key->id}}" href="{{ url('/edit_index/'.$key->id) }}" class="btn btn-outline-primary me-3">Edit</a>
                 <!-- <a id="{{$key->id}}" href="{{ url('/delete_index/'.$key->id) }}" class="btn btn-outline-secondary">Delete</a> -->
               </div>
             </div>
           </div>
         </div>
       </div>
     
       <!-- /User Card -->

       <!-- Include footer.blade.php -->
       @include('connection/footer')