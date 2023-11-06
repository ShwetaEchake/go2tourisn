@extends('layouts.app')

@section('content')

    <div class="destinationbanner-slider" >
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text" style="background-color:#fbdd3a">
                <h1 style="font-family:Arial;">{{ $destination->name }}</h1>
            </div>
        </div>
    </div>

    <div class="portfolio-page pt_50 pb_80">
        <div class="container wow fadeIn">

            <div class="row">
                <div class="col-md-12">
                    {!! clean($destination->detail) !!}
                </div>
            </div>

            <div class="row">

                @foreach($destinations as $row)
                <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                   <!--  <div class="portfolio-item mt_30">
                        <div class="portfolio-bg"></div>
                        <img src="{{ asset('public/uploads/'.$row->d_photo) }}" alt="">
                        <a href="{{ url('destination/'.$row->d_slug) }}">
                        <div class="portfolio-text">
                            <a href="{{ asset('public/uploads/'.$row->d_photo) }}" class="magnific"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-title" style=" background-color: #50b6f1;">
                        <a href="{{ url('destination/'.$row->d_slug) }}">{{ $row->d_name }}</a>
                    </div>
                -->




                                    <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                                           <a href="{{ url('destination/'.$row->d_slug) }}">
                                                <div class="featured-photo left">
                                                    <img src="{{ asset('public/uploads/'.$row->d_photo) }}" alt="">
                                                         <a href="{{ url('destination/'.$row->d_slug) }}">

                                                     <span class="price"  style="text-transform:uppercase;">
                                                           {{ $row->d_name }}
                                                    </span>
                                                </div>
                                                <div class="featured-text">
                                                    <h4 style=""><a href="{{ url('destination/'.$row->d_slug) }}"></a></h4>
                                                </div>
                                   </div>

              </div>
                @endforeach

            </div>
        </div>
    </div>

    @if($page_service_items->status == 'Show')
<div class="service-area pt_80 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>{{ $page_service_items->name}}</h2>
                    </div>
                    {{-----<p>{{ $page_service_items->service_subtitle }}</p>---}}
                </div>
            </div>
        </div>
        <div class="row">


            @foreach($services as $row)
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
               <!--  <div class="service-item mt_30" style="background-image: url({{ asset('public/uploads/'.$row->photo) }})">
                    <a href="{{ url('service/'.$row->slug) }}">
                        <i class="{{ $row->icon }}"></i>
                        <div class="ser-text">
                            <h4>{{ $row->name }}</h4>
                            <p>
                            
                                {{Str::limit($row->short_description, 150, $end='......')}}
                            </p>
                        </div>
                    </a>
                </div>
                 <div class="photo-title" style="text-transform: uppercase;  background-color: #50b6f1;">
                    <a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a>
                </div>
            </div> -->

            
                                    <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                                            <a href="{{ url('service/'.$row->slug) }}">
                                                <div class="featured-photo left">
                                                    <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                                                         <a href="{{ url('service/'.$row->slug) }}">

                                                     <span class="price" style="text-transform:uppercase;">
                                                           {{ $row->name }}
                                                    </span>
                                                </div>
                                                <div class="featured-text" >
                                                    <h4 style=""><a href="{{ url('service/'.$row->slug) }}"></a></h4>
                                                </div>
                                   </div>



         </div>


            @endforeach
     </div>
    </div>
</div>
@endif


@endsection
