 <!-- Include header.blade.php -->
 @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Menu /</span> Menu Details</h4>
                            
                 <!-- Basic Bootstrap Table -->
              <div class="card">
              <div class="row">
                <div class="col-8">
                <h5 class="card-header">Menu Details</h5>
                </div>
                <div class="col-4">
                <div class="dropdown">
                            <button type="button"  class="btn btn-primary me-2" data-bs-toggle="dropdown">
                            <i class='bx bx-export'></i> Export 
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" 
                              href="{{ url('/menu_pdf') }}"
                                ><i class='bx bxs-file-pdf'></i>Pdf</a
                              >
                              <a class="dropdown-item btn btn-outline-secondary" onclick="return confirm('Are you sure')" 
                              href="{{ url('/menu_excel') }}"
                                ><i class='bx bx-file'></i> Excel</a
                              >
                             
                            </div>
                          </div>
                          </div>
              </div>                
                <div class="table-responsive text-nowrap">
                  <table class="table" id="table">
                    <thead>
                      <tr>
                        <th>SI.No</th>
                        <th>Menu Name</th>
                        <th>Image</th>
                        <th>Menu Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                    <?php $counter = 0; ?>
                      @foreach ($view_menu as $key )  

                 <tr>

                 <td><?php echo ++$counter; ?> </td>
                   <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$key->menu_name}}</strong></td>
                   
                   
                   <td><img src="{{url('public/assets/admin/assets/img/menu/'.$key->image)}}" height="50px" width="50px" class="rounded-circle"></td>

                   <td>{{$key->type}}</td>
                   <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-outline-dark" 
                            id="{{$key->id}}" href="{{ url('/menu_view/'.$key->id) }}"
                                ><i class='bx bx-show-alt' ></i> view</a
                              >
                              <a class="dropdown-item btn btn-outline-secondary" id="{{$key->id}}" href="{{ url('/edit_menu/'.$key->id) }}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" 
                              id="{{$key->id}}" href="{{ url('/menu_delete/'.$key->id) }}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
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