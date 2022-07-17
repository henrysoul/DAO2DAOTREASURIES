<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\card;
use App\Models\header;
use App\Models\live;
use App\Models\Country;
use App\Models\TableHeaderInformation;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $cards = card::all();
        $lives = live::all();
        $countries = Country::where('show', 1)->orderby('population', 'desc')->get();
        $header = header::all();
        $headerInfo = TableHeaderInformation::all();
        return view('welcome', compact('cards', 'lives', 'countries', 'header', 'headerInfo'));
    }

    public function country_info($id)
    {
        $country = Country::find($id)->first();
        $header = header::all();
        $headerInfo = TableHeaderInformation::all();
        $countriesPopulation = Country::sum('population');
        return view('website.country_info',compact('country', 'header', 'headerInfo','countriesPopulation'));
    }
}
