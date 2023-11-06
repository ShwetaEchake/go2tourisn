<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = DB::table('sliders')->get();
    	$page_home = DB::table('page_home_items')->where('id',1)->first();
    	$services = DB::table('services')->get();
    	$testimonials = DB::table('testimonials')->get();
    	$team_members = DB::table('team_members')->get();
    	$blogs = DB::table('blogs')->get();
        $clients = DB::table('clients')->get();
        $destinations = DB::table('destinations')->orderBy('d_seq','asc')->get();
        $featured_packages = DB::table('packages')->where('p_is_featured','Yes')->take(5)->get();
        return view('pages.index', compact('sliders','page_home','services', 'testimonials','team_members','blogs', 'clients','destinations', 'featured_packages'));

		return view('pages.index');


    }


    public function weather(Request $request){
        // $apiKey = "10ffdc82e6d2b423aeaf6be5ada8aadf";
        // $lat= $_REQUEST['lat'];
        // $lon= $_REQUEST['long'];
     
        // $googleApiUrl = "api.openweathermap.org/data/2.5/weather?lat=". $lat . "&lon=" . $lon . "&units=metric&appid=" . $apiKey;
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_VERBOSE, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // $response = curl_exec($ch);
        // curl_close($ch);
        // $data = json_decode($response);
        // date_default_timezone_set("Asia/Calcutta");
        // $currentTime = time();
    $data="123456";
   

        return view('pages.index',compact('data'));
        return view('pages.index');

    }
}
