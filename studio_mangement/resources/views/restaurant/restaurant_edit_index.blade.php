          <!-- Include header.blade.php -->
          @include('connection/header')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Restaurant /</span> edit Restaurant Details</h4>

              <div class="card mb-4">
                <h5 class="card-header">Restaurant Details</h5>
                <!-- Account -->
                <div class="card-body">
                  <form action="{{url('/index_update')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" id="exampleInputName1" name="id" value="{{$edit->id}}">
                    <div class="row">

                      <div class="mb-3 col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input class="form-control" type="text" id="name" name="name" value="{{$edit->name}}" autofocus />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" name="email" value="{{$edit->email}}" placeholder="" />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="number">Phone Number</label>
                        <input type="text" id="number" name="number" class="form-control" value="{{$edit->number}}" placeholder="" />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Address" value="{{$edit->address}}" rows="1">
                        {{$edit->address}}
                        </textarea>
                      </div>

                      <h6 class="card-header">Works Hours</h6>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="st">Start</label>
                        <input type="time" id="st" name="st" class="form-control" value="{{$edit->start_time}}" placeholder="" />
                      </div>

                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="end">End</label>
                        <input type="time" id="end" name="end" class="form-control" value="{{$edit->end_time}}" placeholder="" />
                      </div>

                      <h6 class="card-header">Week</h6>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="weekst">Start</label>
                        <select id="weekst" name="weekst" class="form-control">
                          <option value="{{$edit->week_start}}">{{$edit->week_start}}</option>
                          <option value="Sunday">Sunday</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>
                          <option value="Friday">Friday</option>
                          <option value="Saturday">Saturday</option>

                        </select>

                      </div>

                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="weekend">End</label>
                        <select id="weekend" name="weekend" class="form-control">
                          <option value="{{$edit->week_end}}">{{$edit->week_end}}</option>
                          <option value="Sunday">Sunday</option>
                          <option value="Monday">Monday</option>
                          <option value="Tuesday">Tuesday</option>
                          <option value="Wednesday">Wednesday</option>
                          <option value="Thursday">Thursday</option>
                          <option value="Friday">Friday</option>
                          <option value="Saturday">Saturday</option>

                        </select>

                      </div>


                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        
                        <a href="{{url('/index_details')}}">
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