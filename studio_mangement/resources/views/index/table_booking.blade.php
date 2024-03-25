    <!-- Include Index footer.blade.php -->
    @include('connection/index_header')
    @foreach($view as $key )
  
  <!-- inner banner -->
  <div class="inner-banner"  style="background-image: url('<?php echo 'public/assets/admin/assets/img/banner/'.$key->banner; ?>');">    
           <section class="w3l-breadcrumb">
               <div class="container">
                   <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">{{$key->title}}</h4>
                   <ul class="breadcrumbs-custom-path">
                       <li><a href="{{ url('/') }}">Home</a></li>
                       <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{$key->title}}</li>
                   </ul>
               </div>
           </section>
       </div>
    <!-- //inner banner -->
    

    <!-- contact page -->
    <section class="w3l-contact-11 py-5" id="contact">
        <div class="container py-md-5 py-5">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">{{$key->title}}</h3>
                        <p class="lead">{{$key->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">
                    <div class="form-inner-cont">
                        <form action="{{url('/booking_action')}}" method="GET" class="signin-form">
                            <div class="row align-form-map">
                                <div class="col-sm-6 form-input">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" placeholder="" required="" />
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </div>

                                <div class="col-sm-6 form-input">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="" required="" />
                                </div>

                                <div class="col-sm-6 form-input">
                                    <label for="number">People</label>
                                    <input type="number" name="people" id="people" placeholder="" class="contact-input" required="">
                                </div>
                                
                                <div class="col-sm-6 form-input">
                                    <label for="number">Phone Number</label>
                                    <input type="text" name="number" id="number" placeholder="" class="contact-input" required="">
                                </div>

                                <div class="col-sm-6 form-input">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" placeholder="" class="contact-input" required="">
                                </div>
                                
                                <div class="col-sm-6 form-input">
                                    <label for="time">Time</label>
                                    <input type="time" name="time" id="time" placeholder="" class="contact-input" required="">
                                </div>
                            </div>

                            <div class="form-input">
                                <label for="message">Message</label>
                                <textarea placeholder="" name="message" id="message" required=""></textarea>
                            </div>
                            <div class="submit text-right">
                                <button type="submit" class="btn btn-style-white btn-style-primary">booking
                                </button>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- //contact page -->

    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')