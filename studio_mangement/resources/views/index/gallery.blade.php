       <!-- Include Index footer.blade.php -->
       @include('connection/index_header')

       <style>
        .galler-top img {
  max-width: 290px;
  height: 290px;
  padding-bottom: 10px;
}
        </style>

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
                <div class="row galler-top">
                @foreach($view_image as $ket )
                    <div class="col-md-4 col-sm-6 protfolio-item hover14">
                            <figure>
                                <img src="{{url('public/assets/admin/assets/img/restaurant/'.$ket->image)}}" alt="product"  class="img-fluid">
                                <!-- <div class="p-4">                                    
                                    <a href="{{ url('/menu') }}" class="mb-5 img-title">Noodles</a>
                                </div> -->
                            </figure>                       
                    </div>
                    @endforeach  
                </div>                
            </div>
        </div>
    </section>
    <!-- //specials section -->

    
    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')