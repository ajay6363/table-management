 <!-- Include header.blade.php -->
 @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
             <!-- Content -->

             <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Customer /</span>Login list</h4>
                            
                 <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Login list</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table" id="table">
                    <thead>
                      <tr>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>country code </th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      
                      @foreach ($view as $key )  

                 <tr>

                   <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$key->name}}</strong></td>                   
                   <td>{{$key->email}}</td>
                   <td>{{$key->country_code}}</td>
                   <td>{{$key->password}}</td>
                   <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item btn btn-outline-dark" 
                            id="{{$key->id}}" href="#"
                                ><i class='bx bx-show-alt' ></i> view</a
                              >
                              <a class="dropdown-item btn btn-outline-secondary" 
                              id="{{$key->id}}" href="#"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item btn btn-outline-dark" onclick="return confirm('Are you sure')" 
                              id="{{$key->id}}" href="#"
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