<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AffiliateProgramController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $affiliateprogram = DB::table('page_affiliate_programs')->where('id', 1)->first();
        return view('pages.affiliate_programs', compact('affiliateprogram','g_setting'));
    }
}
