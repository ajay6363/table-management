       <!-- Include Index footer.blade.php -->
       @include('connection/index_header')

       @foreach($view as $key )

       <style>
        .menu-item img {
  max-width: 65px;
  height: 65px;
}
        </style>

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
                @endforeach 

    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
   
      


        <div class="container py-md-5 py-4">
            <h3 class="title-big mb-2"> Menu</h3>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                @foreach($menu as $key )
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row no-gutters">
                            <div class="col-6 menu-item-name">
                                <h6>{{$key->menu_name}}</h6>
                            </div>
                         
                            <div class="col-2 menu-item-price text-right">
                                <h6>{{$key->currency_symbol}} {{$key->price}}</h6>
                            </div>
                        <div class="col-1">

                        </div>
                            <div class="col-3 ">
                        <img src="{{url('public/assets/admin/assets/img/menu/'.$key->image)}}"  class="rounded-circle">
                            </div>

                        </div>
                        <div class="menu-item-description">
                            <p>{{$key->description}}</p>
                        </div>
                    </div>
                    
                    <!-- Item ends -->
                    
                </div>
@endforeach 
                <!-- Section ends: Breakfast -->

                
                <!-- Section ends: Breakfast -->
            </div>           

        </div>
       
    </div>
    <!-- //menu -->

    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')