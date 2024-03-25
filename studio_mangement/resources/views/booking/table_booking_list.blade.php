 <!-- Include header.blade.php -->
 @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Order /</span> Details</h4>
              
              
                  <!-- Basic Bootstrap Table -->
              <div class="card">
              <div class="row">
                <div class="col-8">
                <h5 class="card-header">Table Booking  Details</h5>
                </div>
                <div class="col-4">
                <div class="dropdown">
                            <button type="button"  class="btn btn-primary me-2" data-bs-toggle="dropdown">
                            <i class='bx bx-export'></i> Export 
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" 
                              href="{{ url('booking_pdf') }}"
                                ><i class='bx bxs-file-pdf'></i>Pdf</a
                              >
                              <a class="dropdown-item btn btn-outline-secondary" onclick="return confirm('Are you sure')" 
                              href="{{ url('booking_excel') }}"
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
                        <th>Client Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                    <?php $counter = 0; ?>
                      @foreach ($view_booking as $key )  

                 <tr>

                 <td><?php echo ++$counter; ?> </td>
                   <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$key->name}}</strong></td>
                   <td>{{$key->date}}</td>
                   <td>{{$key->time}}</td>
                   <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-outline-dark" 
                            id="{{$key->id}}" href="{{ url('/booking_details/'.$key->id) }}"
                                ><i class='bx bx-show-alt' ></i> view</a
                              >

                              <!-- <a class="dropdown-item btn btn-outline-secondary" id="{{$key->id}}" href="{{ url('/edit_menu/'.$key->id) }}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              > -->

                              <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" 
                              id="{{$key->id}}" href="{{ url('/booking_delete/'.$key->id) }}"
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