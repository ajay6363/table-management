 <!-- Include header.blade.php -->
 @include('connection/header')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Booking / </span>Details

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
                      <span class="fw-medium me-2">Client Name :</span>
                    </strong>
                    <span>{{$view->name}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Booking Id :</span>
                    </strong>
                    <span>{{$view->id}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Email :</span>
                    </strong>
                    <span>{{$view->email}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Number :</span>
                    </strong>
                    <span>{{$view->number}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Date :</span>
                    </strong>
                    <span>{{$view->date}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Time :</span>
                    </strong>
                    <span>{{$view->time}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">People :</span>
                    </strong>
                    <span>{{$view->people}}</span>
                  </li>

                  <li class="mb-3">
                    <strong>
                      <span class="fw-medium me-2">Message :</span>
                    </strong>
                    <span>{{$view->message}}</span>
                  </li>

                </ul>
                <div class="d-flex justify-content-center pt-3">
                  <!-- <a id="{{$view->id}}" href="{{ url('/edit_menu/'.$view->id) }}" class="btn btn-outline-primary me-3">Edit</a> -->
                  <a id="{{$view->id}}" href="{{ url('/booking_delete/'.$view->id) }}" class="btn btn-outline-secondary">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /User Card -->

<!-- Include footer.blade.php -->
    @include('connection/footer')