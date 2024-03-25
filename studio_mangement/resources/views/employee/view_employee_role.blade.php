 <!-- Include header.blade.php -->
 @include('connection/header')

 <!-- Content wrapper -->
 <div class="content-wrapper">
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Employee /</span> Role Details</h4>
     <!-- Basic Bootstrap Table -->
     <div class="card">
       <div class="row">
         <h5 class="card-header">Role Details</h5>
       </div>
       <div class="table-responsive text-nowrap">
         <table class="table" id="table">
           <thead>
             <tr>
               <th>SI.No</th>
               <th>Role</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody class="table-border-bottom-0">
             <?php $counter = 0; ?>
             @foreach ($view_role as $key )

             <tr>
               <td><?php echo ++$counter; ?> </td>
               <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$key->role}}</strong></td>

               <td>
                 <div class="dropdown">
                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                     <i class="bx bx-dots-vertical-rounded"></i>
                   </button>
                   <div class="dropdown-menu">

                     <a class="dropdown-item btn btn-outline-secondary" id="{{$key->id}}" href="{{ url('/edit_role/'.$key->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                     <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" id="{{$key->id}}" href="{{ url('/delete_role/'.$key->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>

                   </div>
                 </div>
               </td>
             </tr>
             @endforeach

           </tbody>
         </table>
       </div>
     </div>
     <!--/ Basic Bootstrap Table -->
     <!-- / Content -->

     <!-- Include footer.blade.php -->
     @include('connection/footer')