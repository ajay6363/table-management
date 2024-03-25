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
            @foreach($index as $key )
            <div class="d-grid contact section-gap">
                <div class="contact-info-left d-grid text-center">
                
                    <div class="contact-info">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h4>Location</h4>
                        <p>{{$key->address}}</p>
                    </div>
                    <div class="contact-info">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <h4>Phone</h4>
                        <p><a href="tel:{{$key->number}}">{{$key->number}}</a></p>
                    </div>
                    <div class="contact-info">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <h4>Email</h4>
                        <p><a href="mailto:{{$key->email}}" class="email">{{$key->email}}</a></p>
                    </div>
                    <div class="contact-info">
                        <span class="fa fa-clock-o" aria-hidden="true"></span>
                        <h4>Working Hours</h4>
                        <p>{{$key->week_start}}-{{$key->week_end}}</p>
                        <p>{{$key->start_time}}-{{$key->end_time}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="form-41-mian mt-5 pt-lg-5 pt-md-4">
                <div class="container">
                    <div class="form-inner-cont">
                        <form action="{{url('/client_contact')}}" method="GET" class="signin-form">
                            <div class="row align-form-map">
                                <div class="col-sm-6 form-input">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" placeholder="" />
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="" required="" />
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="" class="contact-input">
                                </div>
                                <div class="col-sm-6 form-input">
                                    <label for="number">Phone Number</label>
                                    <input type="number" name="number" id="number" placeholder="" class="contact-input">
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="message">Message</label>
                                <textarea placeholder="" name="message" id="message" required=""></textarea>
                            </div>
                            <div class="submit text-right">
                                <button type="submit" class="btn btn-style-white btn-style-primary">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="map mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7897.334764595986!2d77.23772754189777!3d8.236162817187374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04ff0099edf54b%3A0xc790ad0e7499489f!2sKarungal%2C%20Tamil%20Nadu%20629157!5e0!3m2!1sen!2sin!4v1706717495717!5m2!1sen!2sin" 
                        width="600" 
                        height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact page -->

    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')