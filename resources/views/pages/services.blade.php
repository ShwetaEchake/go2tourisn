@extends('layouts.app')

@section('content')

    <div class="categorybanner-slider" >
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text" style="background-color:#fbdd3a">
                <h1 style="font-family:Arial;">{{ $service->name }}</h1>
            </div>
        </div>
    </div>

    <div class="service-area pt_50 pb_80">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    {!! clean($service->detail) !!}
                </div>
            </div>

            <div class="row">

                @foreach($service_items as $row)
               <!--  <div class="col-md-4 col-xs-6 clear-three wow" data-wow-delay="0.1s">
                    <div class="service-item mt_30" style="background-image: url({{ asset('public/uploads/'.$row->photo) }})">
                        <a href="{{ url('service/'.$row->slug) }}">
                            <i class="{{ $row->icon }}"></i>
                            <div class="ser-text">
                                <h4>{{ $row->name }}</h4>
                                <p>
                                    {{---{!! clean(nl2br($row->short_description)) !!}---}}
                                </p>
                            </div>
                        </a>
                    </div>
                </div> -->
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">

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

            <div class="row">
                <div class="col-md-12">
                    {{ $service_items->links() }}
                </div>
            </div>

        </div>
    </div>

@endsection
