@extends('layouts.app')

@section('content')
<style>
    button{
        background:#3367c1;
    }
</style>
@foreach($destinations as $row)
   <!--  <div class="destinationdetailbanner-slider" style="background-image: url({{ asset('public/uploads/'.$row->d_photo) }})">
        @endforeach
         <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1 style="font-family:Arial;">{{ $destination_detail->d_name }}</h1>
            </div>
        </div>
    </div> -->

      <div class="categorybanner-slider" >
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text" style="background-color:#fbdd3a">
                <h1 style="font-family:Arial;">{{ $destination_detail->d_name }}</h1>
            </div>
        </div>
    </div>
    

    <div class="country-package pt_80 pb_80">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <div class="country-text">
                        <h2 style="font-family: Arial;">{{ $destination_detail->d_heading }}</h2>
                    <div style="text-align:left;">
                        <p>
                            {!! clean(nl2br($destination_detail->d_short_description)) !!}
                        </p>
                    </div>
                        <div class="country-social mt_30 tac">
                        {{----<h3>{{ SHARE_NOW }}</h3>--}}
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php if(!empty($destination_detail)> 0){ ?>
    
  {{--   <div class="container">
                <div class="packmoreinfo-tab">
                        <ul class="nav nav-pills mb-3 packmoreinfo-tab-top" id="pills-tab" role="tablist">
                            <?php if(!empty($destination_detail->d_introduction) > 0){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">{{ INTRODUCTION }}</button>
                            </li>
                            <?php }?>
                            <?php if(!empty($destination_detail->d_experience) > 0){ ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">{{ EXPERIENCE }}</button>
                            </li>
                             <?php }?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">{{ WEATHER }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria -selected="false">{{ HOTEL }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">{{ TRANSPORTATION }}</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">{{ CULTURE }}</button>
                            </li>
                        </ul>
                        <div class="tab-content packmoreinfo-tab-bottom" id="pills-tabContent">
                             
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">

                            {!! clean($destination_detail->d_introduction) !!}
                          
                            </div>
                      
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

                            {!! clean($destination_detail->d_experience) !!}
                            
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                            {!! clean($destination_detail->d_weather) !!}

                            </div>

                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">

                            {!! clean($destination_detail->d_hotel) !!}
                            
                            </div>
                            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">

                            {!! clean($destination_detail->d_transportation) !!}
                               
                            </div>
                            <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                            {!! clean($destination_detail->d_culture) !!}

                            </div>
                        </div>

                    </div><!-- //packmoreinfo-tab -->
            </div>--}}
             
<?php }else{
    
 }?>
    
<br><br>

<?php if(!empty($destination_detail)> 0){ ?>
    <div class="portfolio-page pt_40 pb_80 bg-area">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-headline">
                        <div class="headline">
                            <h2 style="font-family: Arial;">{{ $destination_detail->d_package_heading }}</h2>
                        </div>
                        {{---<p>{{ $destination_detail->d_package_subheading }}</p>----}}
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($packages as $row)
<!--                     <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('public/uploads/'.$row->p_photo) }}" alt="">
                            <a href="{{ url('package/'.$row->p_slug) }}">
                            <div class="portfolio-text">
                                <a href="{{ asset('public/uploads/'.$row->p_photo) }}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div> -->

                 <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                               <a href="{{ url('package/'.$row->p_slug) }}">
                              <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="featured-photo left">
                            <img src="{{ asset('public/uploads/'.$row->p_photo) }}" alt="">
                                 <a href="{{ url('package/'.$row->p_slug) }}">

                         <span class="price"  style="text-transform:uppercase;">
                               {{ $row->p_name }}
                        </span>
                        </div>
                        <div class="featured-text">
                            <h4 style=""><a href="{{ url('package/'.$row->p_slug) }}"></a></h4>
                         
                        </div>
                    </div>



                     


          









                      <!--   <div class="photo-title" style="background-color: #50b6f1;">
                            <a href="{{ url('package/'.$row->p_slug) }}">
                                {{ $row->p_name }}<br>
                           {{-- <span class="fz_22"><i class="{{ $g_setting->currency_sign }}"></i> 
                                    {{ $row->p_price }} / {{ PERSON }}
                                </span>  
                                @php
                                $last_booking_date = \Carbon\Carbon::parse($row->p_last_booking_date)->format('Y-m-d');
                                $today_date = \Carbon\Carbon::parse(date('Y-m-d'))->format('Y-m-d');
                                @endphp

                                @if($last_booking_date<$today_date)
                                    <br><span class="not-available-red">({{ NOT_AVAILABLE_FOR_BOOKING }})</span>
                                @else
                                    <br><span class="available-green">({{ AVAILABLE_FOR_BOOKING }})</span>
                                @endif  --}}

                            </a>
                        </div> -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>
<?php }else{
} ?>  

@endsection
