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
   <!-- specials section -->
    <section class="w3l-portfolio-8 py-5">
        <div class="portfolio-main py-md-5 py-4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="section-heading mb-sm-5 mb-4">
                            <h3 class="title-style mb-2">{{$key->title}}</h3>
                            <p class="lead">
                            {{$key->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach 
                               
            </div>
        </div>

        <div class="container py-lg-5 py-md-3">
            @foreach($package as $view)
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="pr-5">
                        <h3 class="title-big">{{$view->package}}</h3>                        
                    </div>
                    <!-- <div class="pr-5 mt-lg-5 mt-4 sec-bor">
                        <h3 class="title-big pt-lg-5 pt-4">Tque corr upti dolore</h3>
                        <p class="mt-4">Semper at tempufddfel. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            dignissimos quis</p>
                    </div> -->
                </div>
                <div class="col-lg-4 col-md-6 col-8 image-styling-sec mt-lg-0 mt-5">
                    <img src="{{url('public/assets/admin/assets/img/package/'.$view->image)}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 text-lg-right">
                    <div class="pl-lg-5">
                        <h3 class="title-big">₹ {{$view->price}}</h3>
                        <!-- <p class="mt-4">Semper at tempufddfel. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            dignissimos quis</p> -->
                    </div>
                    <div class="pl-lg-5 mt-lg-5 mt-4 sec-bor">
                        <!-- <h3 class="title-big pt-lg-5 pt-4">Nam libero tempore cum</h3> -->
                        <p class="mt-4">{{$view->description}}</p>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </section>
    <!-- //specials section -->


    
    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')