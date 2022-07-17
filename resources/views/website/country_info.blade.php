@extends('layouts.website')
@section('content')
<section id="all-data" class="mt-5">
    <div class="container data">
        <span class="{{'flag-icon flag-icon-'.strtolower($country->iso2).' flag-icon-squared flag-icon-lg'}}" style="font-size:50px"></span>
        <div class="row pt-5 g-4 ">
            <div class="col-md-4"> <b>Inkerested DAO: </b>{{$country->name}}</div>
            <div class="col-md-4"> <b>EPoH/VPoH: </b>{{$country->population}}</div>
            <div class="col-md-4"> <b>%Total: </b>{{number_format(($country->population/$countriesPopulation)* 100,3)}}
            </div>
        </div>
        <div class="row pt-5 g-4">
            <div class="col-md-4"> <b>HATA : </b>{{number_format($country->hata)}}</div>
            <div class="col-md-4"> <b>HCDA : </b>{{number_format($country->hcda)}}</div>
            <div class="col-md-4"> <b>N-HATA : </b>{{number_format($country->nhata)}}</div>
        </div>
        <div class="row pt-5 g-4">
            <div class="col-md-4"> <b>Liquidity : </b>{{number_format($country->liquidity)}}</div>
            <div class="col-md-4"> <b>DRT : </b>{{number_format($country->drt)}}</div>
            <div class="col-md-4"> <b>DRT per capital : </b>{{number_format($country->drtpercapital)}}</div>
            <div class="col-md-4"> <b>IDAO : </b>{{($country->idao)}}
            </div>
        </div>
    </div>
</section>
@endsection