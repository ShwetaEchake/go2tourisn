@extends('layouts.app')

@section('content')
    <div class="packagedetailbanner-slider" >
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text" style="background-color:#fbdd3a;">
                <h1 style="font-family:Arial;">
                    {{ $package_detail->p_name }}<br>
                  {{--  
                  (<i class="{{ $g_setting->currency_sign }}"></i> {{ $package_detail->p_price }} / {{ PERSON }})
                  --}}
                </h1>
            </div>
        </div>
    </div>

<script >

function showWheather() {


  <?php $cityId = $package_detail->p_location;   $splite_data=explode(",",$cityId); ?>

  var lat="<?php if(!empty($splite_data[0])){  echo "$splite_data[0]";}  ?>";
  var long="<?php if(!empty($splite_data[1])){  echo"$splite_data[1]";}  ?>";
  var data;
 $.get("https://api.openweathermap.org/data/2.5/weather?lat="+ lat + "&lon=" + long + "&units=metric&appid=10ffdc82e6d2b423aeaf6be5ada8aadf", function(data, status){

  var temp=data["main"]["temp"];
    document.getElementById("Temparature").innerHTML = temp+"°";

    var countryname=data["sys"]["country"];
    document.getElementById("Country").innerHTML = countryname;

    var cityname=data["name"];
    document.getElementById("Citys").innerHTML = cityname;

    var mintemp2=data["main"]["temp_min"];
    document.getElementById("mintemp2").innerHTML = mintemp2+"°";

    var maxtemp2=data["main"]["temp_max"];
    document.getElementById("maxtemp2").innerHTML = maxtemp2+"°";

  var wheathercondition=data["weather.main"];
    document.getElementById("wheathercondition").innerHTML = wheathercondition;


  });

}       

showWheather();

</script>



    <div class="featured-detail country-detail pt_30 pb_20 bg_white">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-8 wow fadeIn" data-wow-delay="0.2s">

                    <div class="fea-descrip">
                        <div class="service-photo-item">
                            <img src="{{ asset('public/uploads/'.$package_detail->p_photo) }}" alt="">
                        </div>


    <!----------------------------------------- tab start ----------------------------------->
                        <div class="featured-detail country-detail pt_0 pb_80 bg_white">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">


                    <div class="fea-descrip mt_30">
                        <div class="headstyle-two">
                            <h4 style="font-family:Arial;">{{ MORE_INFORMATION }}</h4>
                        </div>
                    </div>


                    <div class="packmoreinfo-tab">
                        <ul class="nav nav-pills mb-3 packmoreinfo-tab-top" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">ITERNARY</button>
                            </li>
                            {{--<li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">DETAILED ITERNARY<!-- {{ TOUR_VIDEOS }} --></button>
                            </li>--}}
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">TRIP COST<!-- {{ TOUR_INFORMATION }} --></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria -selected="false">FAQ'S<!-- {{ ITINERARY }} --></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">MAP<!-- {{ POLICY }} --></button>
                            </li>

                             <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="true"> PHOTOS </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7" type="button" role="tab" aria-controls="pills-7" aria-selected="false"> VIDEOS </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-8-tab" data-bs-toggle="pill" data-bs-target="#pills-8" type="button" role="tab" aria-controls="pills-8" aria-selected="false">POLICY </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-9-tab" data-bs-toggle="pill" data-bs-target="#pills-9" type="button" role="tab" aria-controls="pills-9" aria-selected="false"> T&C </button>
                            </li>







                         
                        </ul>
                        <div class="tab-content packmoreinfo-tab-bottom" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">

                                <div class="row">
                                   <!-- 
                                    @foreach($package_photos as $row)
                                    <div class="col-md-4 col-xs-6 clear-three col-item">
                                        <div class="portfolio-item">
                                            <div class="portfolio-bg"></div>
                                            <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                                            <div class="portfolio-text">
                                                <a href="{{ asset('public/uploads/'.$row->photo) }}" class="
                                                    magnific"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach-->

                                      <div class="descrip-pre">
<?php
	//$package_detail_short=preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $package_detail->p_description_short);
	//$package_detail_itinerary=preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $package_detail->p_itinerary);

 $package_detail_short=preg_replace('/ style=("|\')(.*?)("|\')/','',$package_detail->p_description_short);
 $package_detail_itinerary=preg_replace('/ style=("|\')(.*?)("|\')/','',$package_detail->p_itinerary);

?>


                                          {!! clean($package_detail_short) !!}
                                          {!! clean($package_detail_itinerary) !!}
                                      
                                      </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

                                <div class="row">

                                   <!--  @foreach($package_videos as $row)
                                    <div class="col-md-6 col-xs-6 clear-two col-item">
                                        <div class="portfolio-item">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $row->video_youtube_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    @endforeach -->
                                   <!--   <div class="descrip-pre">
                                          {!! clean($package_detail->p_description) !!}
                                    </div> -->

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">

                                <div class="feat-detail-table table-responsive">
                                                                {{-- <table class="table table-bordered table-striped">
                                                                        <tr>
                                                                            <th class="w_200">{{ DETAIL_LOCATION }}</th>
                                                                            <td>
                                                                                {!! clean(nl2br($package_detail->p_location)) !!}
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>{{ TOUR_START_DATE }}</th>
                                                                            <td>{{ $package_detail->p_start_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>{{ TOUR_END_DATE }}</th>
                                                                            <td>{{ $package_detail->p_end_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>{{ LAST_BOOKING_DATE }}</th>
                                                                            <td>{{ $package_detail->p_last_booking_date }}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>{{ ADDRESS_IN_MAP }}</th>
                                                                            <td>
                                                                                {!! $package_detail->p_map !!}
                                                                            </td>
                                                                        </tr>
                                                                    </table>--}}

     <!-------------------------------------- TRIP COST -------------------------------------->
                                    <div class="fea-descrip mt_30">

                        <div class="headstyle-two">
                            <h4 style="font-family:Arial;">Tour Cost</h4>
                        </div>
                        <div class="row book-now">
                            <div class="col-md-12">
                                <form action="{{ route('front.package_store_list') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $package_detail->id }}">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                        

                                                <label>{{ TOTAL_PRICE_PER_PERSON }}</label>
                                                <div class="mb_5 fz_32">
                                                    <i class="{{ $g_setting->currency_sign }}"></i> {{ $package_detail->p_price }}
                                                </div>
                                                <div class="sep mb_10"></div>
                                                <label>{{ TOTAL_PERSONS }}</label>
                                                <select id="numberPerson" name="total_person" class="custom-select select2 mb_15 w_auto">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                </select>
                                                <div class="sep mb_15"></div>
                                                <label>{{ TOTAL_PRICE }}</label>
                                                <div class="mb_15 fz_32">
                                                    <i class="{{ $g_setting->currency_sign }}"></i> <span id="totalPrice">{{ $package_detail->p_price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @php
                                        $last_booking_date = \Carbon\Carbon::parse($package_detail->p_last_booking_date)->format('Y-m-d');
                                        $today_date = \Carbon\Carbon::parse(date('Y-m-d'))->format('Y-m-d');
                                        @endphp

                                    @if($last_booking_date>$today_date)
                                    <div class="form-group button-booking">
                                        <button class="btn btn-info btn-lg" type="submit">{{ BOOK_YOUR_SEAT }}</button>
                                    </div>
                                    @else
                                    <div class="text-danger">{{ CAN_NOT_BOOK_DATE_OVER_MESSAGE }}</div>
                                    @endif
                                    <br>

                                    
                                 <!--<div>
                                              <div class="headstyle-two "  >                                   
                                            <h3>{{ ADDRESS_IN_MAP }}</h3></div>
                                    
                                                {{---{!! $package_detail->p_map !!}---}}
                                                <iframe src="{{ $package_detail->p_map }}" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                  </div> -->
                                

                                </form>
                            </div>
                        </div>
                    </div>

    <!-------------------------------------------------- TRIP COST ---------------------------------------------->



                                </div>

                            </div>


                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">

<?php

 $package_detail_description=preg_replace('/ style=("|\')(.*?)("|\')/','',$package_detail->p_description);


//$package_detail_description=preg_replace('#(<[a-z ]*)(style=("|\')(.*?)("|\'))([a-z ]*>)#', '\\1\\6', $package_detail->p_description);                     ?>

                                {!! clean($package_detail_description) !!}
                            </div>
                            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">

                                  <div>
                                              <div class="headstyle-two "  >                                   
                                            <h3 style="font-family:Arial;">{{ ADDRESS_IN_MAP }}</h3></div>

                                            <!-- <div id="map_canvas" style="width:400px;height:400px"></div>-->
                                    
                                                {{---{!! $package_detail->p_map !!}
                                                <iframe src="{{ $package_detail->p_map }}" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>---}}

                                                 <?php 
                                                   $location=$package_detail->p_slug;
                                                   $address = str_replace('-', ' ', $location);
                                                 ?>

                                                       <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?ll={!! $package_detail->p_location !!}&q={!! $address !!}&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://techwithlove.com/how-to-know-who-viewed-my-whatsapp-profile/">https://techwithlove.com/how-to-know-who-viewed-my-whatsapp-profile/</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>

                                         
                                        </div>
                                        

                            </div>
                                        <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                                               <div class="row">                  
                                                   @foreach($package_photos as $row)
                                                        <div class="col-md-4 col-xs-6 clear-three col-item">
                                                            <div class="portfolio-item">
                                                                <div class="portfolio-bg"></div>
                                                                <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                                                                <div class="portfolio-text">
                                                                    <a href="{{ asset('public/uploads/'.$row->photo) }}" class="
                                                                        magnific"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                   @endforeach
                                                 </div>                         
                                         </div>
                                          <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
                                                  <div class="row">
                                                        @foreach($package_videos as $row)
                                                        <div class="col-md-6 col-xs-6 clear-two col-item">
                                                            <div class="portfolio-item">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $row->video_youtube_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                 </div>
                                          </div>

                                      <div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                                               
<?php
$package_detail_policy = preg_replace('/(<[^>]*) style=("[^"]+"|\'[^\']+\')([^>]*>)/i', '$1$3', $package_detail->p_policy);


                     ?>
                                                 {!! clean($package_detail_policy) !!}
                                                                    
                                        </div>
                                      <div class="tab-pane fade" id="pills-9" role="tabpanel" aria-labelledby="pills-9-tab">
                                                                    
                                              {!! clean($package_detail->p_terms) !!}
                                                                    
                                        </div>
                        </div>

                    </div><!-- //packmoreinfo-tab -->


                </div>
            </div>
        </div>
    </div>



<!---------------------------------- tab end ------------------------------------------->















                        {{---<div class="headstyle-two mt_30">
                            <h4>{{ TOUR_DATES }}</h4>
                        </div>
                        <div class="descrip-pre table-responsive mb_25">
                            <table class="table table-bordered">
                                <tr>
                                    <th>{{ TOUR_START_DATE }}</th>
                                    <th>{{ TOUR_END_DATE }}</th>
                                    <th>{{ LAST_BOOKING_DATE }}</th>
                                </tr>
                                <tr>
                                    <td><span class="fz_20"><b>{{ $package_detail->p_start_date }}</b></span></td>
                                    <td><span class="fz_20"><b>{{ $package_detail->p_end_date }}</b></span></td>
                                    <td>
                                        @php
                                        $last_booking_date = \Carbon\Carbon::parse($package_detail->p_last_booking_date)->format('Y-m-d');
                                        $today_date = \Carbon\Carbon::parse(date('Y-m-d'))->format('Y-m-d');
                                        @endphp

                                        @if($last_booking_date<$today_date)
                                            @php $cls = 'not-available-red'; @endphp
                                        @else
                                            @php $cls = 'available-green'; @endphp
                                        @endif

                                        <span class="{{ $cls }} fz_20"><b>{{ $package_detail->p_last_booking_date }}</b></span>
                                    </td>
                                </tr>
                            </table>
                        </div>---}}
                        <br>
                        <!-- short discription -->

                       <!--  <div class="headstyle-two">
                            <h4>{{ TOUR_DESCRIPTION }}</h4>
                        </div>
                        <div class="descrip-pre">
                            {!! clean($package_detail->p_description_short) !!}
                        </div> -->
                        <!--  -->
                       <!--  <div class="headstyle-two">
                            <h4>{{ ITINERARY }}</h4>
                        </div> -->
                        
                        <!-- <div class="descrip-pre">
                            {!! clean($package_detail->p_itinerary) !!}
                        </div> -->

                        <!-- TOUR_DESCRIPTION -->
                        <!-- <div class="headstyle-two">
                            <h4>Other Details</h4>
                        </div>
                        <div class="descrip-pre">
                            {!! clean($package_detail->p_description) !!}
                        </div> -->
                       
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="fea-descrip mt_30">
                        <div class="headstyle-two">
                            <h4 style="font-family:Arial;">Trip Highlights</h4>
                        </div>
                                    <table cellspacing="30" cellpadding="3">
						<tr>
                                                <td><label>Trip Code</label>&nbsp;:&nbsp;</td>
                                                <td> {{ $package_detail->id }}</td>
                                                </tr>
                                                <tr>
                                                <td><label>Minimum Pax</label>&nbsp;:&nbsp;</td>
                                                <td> {{ $package_detail->p_min_pack }}</td>
                                                </tr>
                                            

                                                <tr><td><label>Best time to visit</label>&nbsp;:&nbsp;</td>
                                                
                                                    <td>{{ $package_detail->p_best_time_to_visit }}</td>
                                                </tr>

                                                <tr><td><label>Trip Level</label>&nbsp;:&nbsp;</td>
                                               
                                                <td>{{ $package_detail->p_trek_level }}</td>
                                                </tr>

                                               <tr><td> <label>Fixed Departure Dates</label>&nbsp;:&nbsp;</td>
                                                <td>{{ $package_detail->p_fix_departure_date }}</td></tr>

                                                 <!-- <td>{{ $package_detail->p_location }}</td></tr> -->
                                                
                                    </table>
                                </div>







<br>
<br>

  <!--div>
      <p> 
            <span id="Citys"></span>
        [<strong><span id="Country"></span></strong>]
            <span id="Temparature"></span>°C
            
               
      
     </p>
</div-->
<!---Wheather Widget--->
 <div>
<style>
.main2 {
  margin-top: 10px;

}
.weather-panel {
  background-image: url("https://unsplash.it/600/400?image=1043&blur");
  background-size: cover;
  border-radius: 20px;
  box-shadow: 25px 25px 40px 0px rgba(0,0,0,0.33);
  color: #fff;
  overflow: hidden;
  position: relative;
  
  small {
    color: inherit;
    font-size: 50%;
  }
  ul.forecast > li {
    border-top: 1px solid #fff;
  }
  .temperature {
    & > span {
        font-size: 2em;
    }
  }
}
</style>
<div class="main2">
  <div class="row">
    <div class="col-xs-12">
      <div class="weather-panel">
        <div class="col-xs-6">
          <center><h2><span id="Citys">Lucerne</span>&nbsp;(<small id="Country"></small>)</h2>
		<h3><?php echo date('d F Y'); ?></h3>

          <!--p class="h3" id="wheathercondition"><i class="mi mi-fw mi-lg mi-rain-heavy"></i> Rainy</p-->
 </center>
        </div>
        <div class="col-xs-6 text-center">
          <div class="h3 temperature">
            <span id="Temparature">12°</span>
            <br>
            <small>Min &nbsp;<span id="mintemp2">8° </span>/Max &nbsp;<span id="maxtemp2"> 13°</small>
          </div>
        </div>
        <!--div class="col-xs-12">
          <ul class="list-inline row forecast">
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Wed</h3>
              <p><i class="mi mi-fw mi-2x mi-cloud-sun"></i><br>9°/18°</p>
            </li>
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Thu</h3>
              <p><i class="mi mi-fw mi-2x mi-sun"></i><br>12°/23°</p>
            </li>
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Fri</h3>
              <p><i class="mi mi-fw mi-2x mi-cloud-sun"></i><br>14°/24°</p>
            </li>
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Sat</h3>
              <p><i class="mi mi-fw mi-2x mi-rain"></i><br>15°/23°</p>
            </li>
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Sun</h3>
              <p><i class="mi mi-fw mi-2x mi-rain-heavy"></i><br>15°/22°</p>
            </li>
            <li class="col-xs-4 col-sm-2 text-center">
              <h3 class="h5">Mon</h3>
              <p><i class="mi mi-fw mi-2x mi-clouds"></i><br>12°/17°</p>
            </li>
          </ul>
        </div-->
      </div>
    </div>
  </div>
</div>
</div>
<!---Wheather widget ----->








<div class="fea-descrip mt_30">

                       <!--  <div class="headstyle-two">
                            <h4>Tour Cost</h4>
                        </div> -->
                        <div class="row book-now">
                           <!--  <div class="col-md-12"> -->
                                <form action="{{ route('front.package_store_list') }}" method="post">
                                    @csrf
                                   <!--  <input type="hidden" name="package_id" value="{{ $package_detail->id }}"> -->
                                  <!--   <div class="row"> -->
                                      <!--   <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                        

                                                <label>{{ TOTAL_PRICE_PER_PERSON }}</label>
                                                <div class="mb_5 fz_32">
                                                    <i class="{{ $g_setting->currency_sign }}"></i> {{ $package_detail->p_price }}
                                                </div>
                                                <div class="sep mb_10"></div>
                                                <label>{{ TOTAL_PERSONS }}</label>
                                                <select id="numberPerson" name="total_person" class="custom-select select2 mb_15 w_auto">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                </select>
                                                <div class="sep mb_15"></div>
                                                <label>{{ TOTAL_PRICE }}</label>
                                                <div class="mb_15 fz_32">
                                                    <i class="{{ $g_setting->currency_sign }}"></i> <span id="totalPrice">{{ $package_detail->p_price }}</span>
                                                </div>
                                            </div> -->
                                     <!--    </div> -->
                                 <!--    </div> -->
                                       <!--  @php
                                        $last_booking_date = \Carbon\Carbon::parse($package_detail->p_last_booking_date)->format('Y-m-d');
                                        $today_date = \Carbon\Carbon::parse(date('Y-m-d'))->format('Y-m-d');
                                        @endphp

                                    @if($last_booking_date>$today_date) -->
                                   <!--  <div class="form-group button-booking">
                        <button class="btn btn-info btn-lg" type="submit">{{ BOOK_YOUR_SEAT }}</button>
                                    </div> -->
                                  <!--   @else -->
                                  <!--   <div class="text-danger">{{ CAN_NOT_BOOK_DATE_OVER_MESSAGE }}</div> -->
                                <!--     @endif -->
                                    <br>







                                    
                                  <!--   <div>
                                              <div class="headstyle-two "  >                                   
                                            <h3>{{ ADDRESS_IN_MAP }}</h3></div>
                                    
                                                {{---{!! $package_detail->p_map !!}---}}
                                                <iframe src="{{ $package_detail->p_map }}" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                         
                                        </div>
                                         -->

                                

                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
<!--  -->









<?php if(count($package_details) > 0){?>
<div class="featured-package bg-area pt_80 pb_80">
    <div class="container wow fadeIn">
         <div class="headline">
                        <h2 style="font-family:Arial;" >Related Package</h2>
                    </div>
       
        <div class="row">
            <div class="col-md-12 mt_50">
                <div class="featured-carousel owl-carousel">

    
                    @foreach($package_details as $packagedata)
                    <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ url('package/'.$packagedata->p_slug) }}">

                        <div class="featured-photo left">
                            <img src="{{ asset('public/uploads/'.$packagedata->p_photo) }}" alt="{{ $packagedata->p_name }}">
                            <span class="price">
                               <!--  <i class="{{ $g_setting->currency_sign }}">
                                </i> {{ $packagedata->p_price }} / {{ PERSON }} -->
                                {{ $packagedata->p_name }}
                            </span>
                        </div>
                        <div class="featured-text">
                            <h4><a href="{{ url('package/'.$packagedata->p_slug) }}"><!-- {{ $packagedata->p_name }} --></a></h4>
                            <p>
                                
                                {{Str::limit($packagedata->p_description_short, 150, $end='......')}}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
 <?php }else{

 }?>
<!--  -->


 
<script>
    function initialize() {
      var myVariable = <?php echo(json_encode($package_detail->p_location)); ?>;
      // alert(myVariable);
      var id = myVariable.split(",");
      var myLatlng = new google.maps.LatLng(id[0],id[1]);
      //alert(myLatlng);
      var myOptions = {
        zoom: 15,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyC1P1DV4hh3NOwY9tNdKNe9UgxmhRt6Kg4&callback=initialize&libraries=places&v=weekly&sensor=false";
      document.body.appendChild(script);
    }

    window.onload = loadScript;


</script>
  


    <script>
        (function($) {
            
            "use strict";
            
            $(document).ready(function() {
                $('#numberPerson').on('change',function() {
                    var selectVal = $('#numberPerson').val();
                    var selectPrice = {{ $package_detail->p_price }};
                    var totalPrice = selectVal * selectPrice;
                     $('#totalPrice').text(totalPrice);
                });
            });
        
        })(jQuery);
    </script>


@endsection
