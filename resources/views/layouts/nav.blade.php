@php
    $about_page_data = DB::table('page_about_items')->where('id', 1)->first();
    $service_page_data = DB::table('page_service_items')->where('id', 1)->first();
    $team_page_data = DB::table('page_team_items')->where('id', 1)->first();
    $faq_page_data = DB::table('page_faq_items')->where('id', 1)->first();
    $blog_page_data = DB::table('page_blog_items')->where('id', 1)->first();
    $contact_page_data = DB::table('page_contact_items')->where('id', 1)->first();
    $testimonial_page_data = DB::table('page_testimonial_items')->where('id', 1)->first();
    $destination_page_data = DB::table('page_destination_items')->where('id', 1)->first();
    $package_page_data = DB::table('page_package_items')->where('id', 1)->first();
    $dynamic_pages = DB::table('dynamic_pages')->orderby('id', 'asc')->get();
    $services = DB::table('services')->orderby('id', 'asc')->get();
    $destination = DB::table('destinations')->orderby('d_name', 'asc')->get();

@endphp

@if($dynamic_pages)
    @php $d_page_stat = 'Found';  @endphp
@else
    @php $d_page_stat = 'Not Found';  @endphp
@endif


<style>

body {margin:0;font-family:Arial}

.topnav {
overflow: hidden;
  /*background-color: #333;*/
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
/*  text-decoration: none;
*/  /*font-size: 17px;*/
}

.active {
  /*background-color: #04AA6D;*/
  /*color: white;*/
}

.topnav .icon {
  display: none;
}

.topnav a:hover{
  background-color: #555;
  /*color: white;*/
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
 
}
</style>

   

<!----div class="topnav" id="myTopnav" >
 
<a href="{{ route('front.category') }}" style="margin-left:100px">Category</a>
<a href="{{ route('front.destination') }}">Destination</a>


			<a href="http://45.79.124.136/go2tourism/page/flight">Flight</a></li>
                            <a href="http://45.79.124.136/go2tourism/page/hotels">Hotels</a>
                            <a href="http://45.79.124.136/go2tourism/page/trains">Trains</a>
                           <a href="http://45.79.124.136/go2tourism/page/cars">Cars</a>
                            <a href="http://45.79.124.136/go2tourism/page/cruise">Cruise</a>
                           <a href="http://45.79.124.136/go2tourism/page/insurance">Insurance</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script---->
<div class="menu-area"  style="background-color:#45A3E8;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo" > 
                        <select name="destination" id="destination" class="form-control" style="margin-top:10px">
                        <option>Select Tour Destination</option>
                         @foreach($destination as $row)
                         <option href="" value="http://45.79.124.136/go2tourism/destination/{{ $row->d_slug }}">{{ $row->d_name }}</option>   
                         @endforeach  
                        </select>
<!--input type="text" class="form-control" style="margin-top:10px"--->
                </div>
            </div>










            <div class="col-md-9 col-sm-12">

<div class="topnav" id="myTopnav">
  <a href="http://45.79.124.136/go2tourism/" >Home</a>
  <a href="{{ route('front.category') }}" >Category</a>
  <a href="{{ route('front.destination') }}">Destination</a>
  <a href="http://45.79.124.136/go2tourism/page/flight">Flight</a></li>
  <a href="http://45.79.124.136/go2tourism/page/hotels">Hotels</a>
  <a href="http://45.79.124.136/go2tourism/page/trains">Trains</a>
  <a href="http://45.79.124.136/go2tourism/page/cars">Cars</a>
  <a href="http://45.79.124.136/go2tourism/page/cruise">Cruise</a>
  <a href="http://45.79.124.136/go2tourism/page/insurance">Insurance</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
           
      </div>
</div>
</div>

<!---div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                      </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="nav-wrapper main-menu">
                    <nav>
                        <ul class="sf-menu" id="menu">

                           <li><a href="{{ url('/') }}">{{ HOME }}</a></li>
                           @if($about_page_data->status == 'Show' || $team_page_data->status == 'Show' || $testimonial_page_data->status == 'Show' || $faq_page_data->status == 'Show' || $d_page_stat == 'Found')
                            <li class="menu-item-has-children"><a href="javascript:void;">Tours</a>
                                <ul>

                                
                                    {{--<li><a href="{{ url('/') }}">{{ HOME }}</a></li>

                                    @if($about_page_data->status == 'Show')
                                        <li><a href="http://45.79.124.136/go2tourism/page/">{{ ABOUT_US }}</a></li>
                                    @endif--}}

                                    @if($service_page_data->status == 'Show')
                            <li><a href="{{ route('front.category') }}">Category</a>
                                <ul>
                                     @foreach($services as $row)
                                    <li><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></li>   
                                    @endforeach                               
                                </ul>
                            </li>
                            @endif

                             @if($destination_page_data->status == 'Show')
                            <li><a href="{{ route('front.destination') }}">{{ DESTINATIONS }}</a>
                                   <ul>
                                     @foreach($destination as $row)
                                    <li><a href="{{ url('destination/'.$row->d_slug) }}">{{ $row->d_name }}</a></li>   
                                    @endforeach                               
                                </ul>
                            </li>
                            @endif
                            @if($package_page_data->status == 'Show')
                                <li><a href="{{ route('front.package') }}">{{ PACKAGES }}</a></li>
                            @endif

                                </ul>
                            </li>
                            @endif

                            {{---@if($blog_page_data->status == 'Show')
                            <li><a href="{{ route('front.blogs') }}">{{ BLOG }}</a></li>
                            @endif

                            @if($contact_page_data->status == 'Show')
                            <li><a href="{{ route('front.contact') }}">{{ CONTACT }}</a></li>
                            @endif---}}

                           <li><a href="http://45.79.124.136/go2tourism/page/flight">Flight</a></li>
                            <li><a href="http://45.79.124.136/go2tourism/page/hotels">Hotels</a></li>
                            <li><a href="http://45.79.124.136/go2tourism/page/trains">Trains</a></li>
                            <li><a href="http://45.79.124.136/go2tourism/page/cars">Cars</a></li>
                            <li><a href="http://45.79.124.136/go2tourism/page/cruise">Cruise</a></li>
                            <li><a href="http://45.79.124.136/go2tourism/page/insurance">Insurance</a></li>


                            {{--@if($service_page_data->status == 'Show')
                            <li><a href="{{ route('front.category') }}">Category</a></li>
                            @endif

                            @if($destination_page_data->status == 'Show')
                            <li><a href="{{ route('front.destination') }}">{{ DESTINATIONS }}</a></li>
                            @endif

                            @if($package_page_data->status == 'Show')
                                <li><a href="{{ route('front.package') }}">{{ PACKAGES }}</a></li>
                            @endif---}}

                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div-->



<script>

//-----------Dropdown Onchange

var urlMenu = document.getElementById('destination');
urlMenu.onchange = function()
{
    var userOption = this.options[this.selectedIndex];
    if (userOption.value != "nothing")
    {
    window.open(userOption.value, "HTML CSS javascript", "");
    }

}
//-----------Dropdown Onchange

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
