     <!-- Include Index footer.blade.php -->
     @include('connection/index_header')

    <!-- banner section -->
    <section class="w3l-banner">
        <div class="container-fluid">
            <div class="row">
          
            @foreach($index as $key )
                <div class="col-md-6 banner-left d-flex align-items-center pl-lg-5">
                    <div>
                        <h3 class="text-white mb-4">{{$key->name}} <br>
                            Healthy <span class="type-js"><span class="text-js">Fresh Meals!</span></span></h3>
                        <p class="banner-text text-white">Open Everyday - <span>{{$key->start_time}} to {{$key->end_time}}</span>
                        </p>
                        <a class="btn btn-style-white btn-style-border mt-5" href="{{ url('/booking') }}">Table Booking</a>
                    </div>
                </div>
                @foreach($banner as $view )
                <div class="col-md-6 banner-right" style="background-image: url('<?php echo 'public/assets/admin/assets/img/banner/'.$view->banner; ?>');">
                
                    <div class="small-images">
                    @foreach ($me->take(2) as $item)
                        <div class="ban-grid position-relative  mt-4">
                            <img src="{{url('public/assets/admin/assets/img/menu/'.$item->image)}}" height="200px" width="200px" class="img-responsive" alt="" />
                            <div class="img-ban-sec">
                                <h5>{{$item->type}}</h5>
                                <a href="{{ url('/menu') }}" class="btn p-0">More <i class="fa fa-angle-right ml-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row justify-content-between align-items-center pb-lg-5">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <div class="image-box inverse position-relative">
                        <div class="image-box__static">
                            <img src="{{url('public/assets/images/about2.jpg')}}" alt="" width="364" height="459">
                        </div>
                        <div class="image-box__float">
                            <img src="{{url('public/assets/images/about1.jpg')}}" alt="" width="364" height="459">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-left pl-lg-5 mt-lg-0 mt-5">
                    <h3 class="title-style mb-3">{{$view->title}}</h3>
                    <p class="mt-4">{{$view->description}}</p>
                        @endforeach
                    <div class="address-sec d-flex align-items-center mt-5">
                        <i class="fa fa-map-marker mr-4" aria-hidden="true"></i>
                        <h6>{{$key->address}}</h6>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- dishes section -->
    <section class="w3l-recipes py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-lg-6 recipe-left mb-md-0 mb-5">
                    @foreach($menu_b as $title)
                    <div class="section-heading mb-sm-5 mb-4">
                        <h3 class="title-style mb-2 text-white">{{$title->title}}</h3>
                        <p class="lead text-white">
                            {{$title->description}}
                        </p>
                    </div>
                    @endforeach

                    @foreach ($menu->take(3) as $item)
                    <div class="menu-sec mt-5 pt-md-4">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name-home">
                                <h6>{{$item->menu_name}}</h6>
                            </div>
                            <div class="col-4 menu-item-price-home text-right">
                                <h6>{{$item->currency_symbol}} {{$item->price}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <a class="btn btn-style-white btn-style-border mt-5" href="{{ url('/menu') }}">View More</a>
                </div>
                <div class="col-lg-6 recipe-right pl-5">
                    <img src="{{url('public/assets/images/image1.png')}}" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- //dishes section -->

   

    <!-- stats section -->
    <section class="w3-bottom-stats py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-7 pr-lg-5">
                    <h5 class="text-new mb-4">Hello. <br>Our structure has been present for over 36 years. <br>We
                        make
                        the best !
                    </h5>
                    <p class="mb-3">Nibh eu consequat magna ipsum ac ex. Nulla iaculis
                        tincidunt elit, tortor luctus sit amet.
                    </p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo.</p>
                    <a href="{{ url('/about') }}" class="btn btn-style-white btn-style-primary mt-lg-5 mt-4">Learn More</a>
                </div>
                <div class="col-md-5 mt-md-0 mt-5">
                    <div class="counter text-center">
                        <div class="timer count-title count-number" data-to="6370" data-speed="1500"></div>
                        <p class="count-text mt-2">happy customer's</p>
                    </div>
                    <div class="counter text-center mt-5">
                        <div class="timer count-title count-number" data-to="421" data-speed="1500"></div>
                        <p class="count-text mt-2">master chef's</p>
                    </div>
                    <div class="counter text-center mt-5">
                        <div class="timer count-title count-number" data-to="7300" data-speed="1500"></div>
                        <p class="count-text mt-2">Order's Everyday</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats section -->   

     <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')