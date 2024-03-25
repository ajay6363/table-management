       <!-- Include Index footer.blade.php -->
       @include('connection/index_header')

       <style>
        .team-wrap{
  padding-bottom: 25px;
}

.team-img{
  max-width: 100%;
  height: 300px;
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

    <!-- about section -->
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
    </section>
    <!-- //about section -->

    <!-- team section -->
    <section class="w3l-team-main" id="team">
        <div class="team py-5">
            <div class="container py-md-5 py-4">
                <h3 class="title-style text-white text-center">Our Chefs</h3>
                <div class="row team-row mt-md-5 mt-4">
                @foreach($view_emp as $employee ) 
                    <div class="col-lg-3 col-6 team-wrap">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="{{url('public/assets/admin/assets/img/employee/'.$employee->image)}}" height="300px" width="100px" class="radius-image">
                            </div>
                            <a href="#url" class="team-title">{{$employee->name}}</a>
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fa fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
                    <!-- end team member -->
                </div>
            </div>
        </div>
    </section>
    <!-- //team section -->



    <!-- Include Index footer.blade.php -->
    @include('connection/index_footer')