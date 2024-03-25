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

    <!-- about section -->
    <section class="w3l-text-6 py-5" id="about">
        <div class="text-6-mian py-md-5 py-4">
            <div class="container">
          
                <div class="row top-cont-grid align-items-center">  
                   
                        <h3 class="title-style mb-3">{{$key->title}}</h3>
                        <p class="mt-4">{{$key->description}}</p>
               
             </div>
               
            </div>
        </div>
    </section>
     @endforeach 
    <!-- //about section -->

    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')