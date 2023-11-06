@extends('layouts.app')

@section('content')





<!-- class="banner-slider" -->
    <div class="destinationdetailbanner-slider" style="background-image: url({{ asset('public/uploads/'.$service_detail->photo) }})">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>{{ $service_detail->name }}</h1>
            </div>
        </div>
    </div>

   
    <div class="single-service-area pt_50 pb_80">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-content mt_30">
                        <!--div class="service-photo-item">
                            <img src="{{ asset('public/uploads/'.$service_detail->photo) }}" alt="">
                        </div-->
                        <div class="row">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="service-details headstyle mt_30">
                                    <p>
                                        {!! clean($service_detail->description) !!}
                                    </p>




                                </div>
                            </div>
                        </div>


<div class="row">

                @foreach($packages as $row)
                    <!-- <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('public/uploads/'.$row->p_photo) }}" alt="">
                             <a href="{{ route('front.package_detail', $row->p_slug) }}">
                            <div class="portfolio-text">
                                <a href="{{ asset('public/uploads/'.$row->p_photo) }}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div> -->

                        <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                                   <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                                           <a href="{{ route('front.package_detail', $row->p_slug) }}">
                                                <div class="featured-photo left">
                                                    <img src="{{ asset('public/uploads/'.$row->p_photo) }}" alt="">
                                                       <a href="{{ route('front.package_detail', $row->p_slug) }}">

                                                     <span class="price"  style="text-transform:uppercase;">
                                                           {{ $row->p_name }}
                                                    </span>
                                                </div>
                                                <div class="featured-text">
                                                    <h4 style="">  <a href="{{ route('front.package_detail', $row->p_slug) }}"></a></h4>
                                                </div>
                                   </div>



         </div>




                      <!--   <div class="photo-title" style=" background-color: #50b6f1;">
                            <a href="{{ route('front.package_detail', $row->p_slug) }}">
                                {{ $row->p_name }}<br>
                                <span class="fz_22">
                                    <i class="{{ $g_setting->currency_sign }}"></i> 
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
                                @endif
                                
                            </a>
                        </div> -->
                  
                @endforeach

            </div>
                    </div>
                </div>
                <!--div class="col-md-3 wow fadeIn" data-wow-delay="0.2s">
                    <div class="service-sidebar mt_30">
                        <div class="service-widget service-list headstyle">
                            <h4>{{ ALL_SERVICES }}</h4>
                            <ul>
                                @foreach($service_items as $row)
                                <li class=""><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </div>

@endsection
