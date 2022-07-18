@extends('layouts.website')
@section('header')
<style>
    th {
        overflow: hidden;
        white-space: nowrap;
    }
</style>
@endsection
@section('content')
<section id="all-data">
    <div class="container data ">
        <div class="row pt-5 g-4">
            <div class="col col-md-4 col-sm-6 mb-3">
                <div class="card-fluid h-100 w-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 py-2">
                        <div class="col d-flex">
                            <p>EPoH</p>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom" title="{{$cards->where('name','epoh')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','epoh')->first()?->value}}</p>
                    </div>
                </div>

            </div>
            <div class="col col-md-4 col-sm-6 col-xs-12 mb-3">
                <div class="card-fluid h-100 w-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 pt-2">
                        <div class="col d-flex">
                            <div>
                                <p>Distributed Reserve Coin</p>
                                <p style="margin-top: -18px"><small>(Pink Duchess)</small></p>
                            </div>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom" title="{{$cards->where('name','drc')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','drc')->first()?->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6 col-xs-12 mb-3">
                <div class="card-fluid h-100 w-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 py-2">
                        <div class="col d-flex">
                            <p>VPoH</p>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom" title="{{$cards->where('name','vpoh')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','vpoh')->first()?->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6 col-xs-12 mb-3">
                <div class="card-fluid h-100 w-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 py-2">
                        <div class="col d-flex">
                            <p>Global Allocation</p>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom"
                                title="{{$cards->where('name','global_allocation')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','global_allocation')->first()?->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6 col-xs-12 mb-3">
                <div class="card-fluid h-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 pt-2">
                        <div class="col d-flex">
                            <div>
                                <p>Distributed Reserve Stablecoin</p>
                                <p style="margin-top: -18px"><small>(Universal Basic Income Dollar)</small></p>
                            </div>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom" title="{{$cards->where('name','dsrc')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','dsrc')->first()?->value}}</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6 col-xs-12 mb-3">
                <div class="card-fluid h-100">
                    <div class="card-hd">

                    </div>
                    <div class="card-body mb-3 px-4 py-2">
                        <div class="col d-flex">
                            <p>Liquidity</p>
                            <i class="bi bi-info-circle ms-auto" tabindex="0" data-toggle="tooltip"
                                data-placement="bottom"
                                title="{{$cards->where('name','liquidity')->first()?->info}}"></i>
                        </div>
                        <p class="fw-bold">{{$cards->where('name','liquidity')->first()?->value}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="all-countries">
    <div class="container mt-5">
        <div class="card-fluid countries  mx-auto">
            <div class="card-body">
                <div class="scrollable text-center py-4">
                    <div class="r-circle">
                        <img src="assets/images/r-circle.png" alt="" class="r_img">

                    </div>

                    <div class="l-circle">
                        <img src="assets/images/l-circle.png" alt="" class="l_img">
                    </div>
                    <div class="live">
                        <img src="assets/images/Vector.svg" alt="">
                        <a href="#"> Live</a>
                    </div>
                    @foreach ($lives as $live )
                    <p>
                        <span>{{$live->value}}</span> @foreach ($countries as $country )
                        @if($country->id==$live->country)<span
                            class="{{'flag-icon flag-icon-'.strtolower($country->iso2).' flag-icon-squared'}}"></span>@endif
                        @endforeach
                    </p>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section>


<section id="all-table">
    <div class="container-fluid px-md-5 mt-5 ">
        <div class="table-responsive">
            <table class="table table-condensed">
                <thead class="table-bordered">
                    <tr>
                        <th scope="col" class="stickyTop">#</th>
                        <th scope="col" class="stickyTop">Federated&nbspDAO&nbsp<i class="bi bi-info-circle"
                                tabindex="0" data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','inkrested')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">EPoH/VPoH&nbsp<i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','epoh')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">%&nbspof&nbspTotal <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','total')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">HATA <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','hata')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">HCDA <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','hcda')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">N&nbsp-&nbspHATA <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','nhata')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">Liquidity <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','liquidity')->first()?->value}}"></i></th>
                        <th scope="col" class="stickytTop">DRT <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','drt')->first()?->value}}"></i></th>
                        <th scope="col" class="stickyTop">DRT&nbspper&nbspcapital <i class="bi bi-info-circle"
                                tabindex="0" data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','drtpercapital')->first()?->value}}"></i>
                        </th>
                        <th scope="col" class="stickyTop">IDAO <i class="bi bi-info-circle" tabindex="0"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{$headerInfo->where('name','idao')->first()?->value}}"></i></th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $count=1;
                    $total=0;
                    $percentage_total=0;
                    @endphp
                    @foreach ($countries as $country )
                    <tr class="td-row" id="8">
                        @php
                        $total += $country->population;
                        @endphp
                        <th scope="row">
                            {{$count++;}}
                        </th>
                        <td>
                            <span
                                class="{{'flag-icon flag-icon-'.strtolower($country->iso2).' flag-icon-squared'}}"></span>&nbsp<a
                                href="{{url('view/'.$country->id)}}"
                                style="text-decoration:none; color:rgb(43, 40, 40)">{{$country->name}}&nbspDAO</a>
                        </td>
                        <td>
                            {{number_format($country->population)}}
                        </td>
                        <td class="text-success">
                            @php
                            $percent = $country->population/$countries->sum('population')*100;
                            $percentage_total+= $percent;
                            @endphp
                            {{number_format($percent,3)}} %
                        </td>
                        <td>
                            {{number_format($country->hata)}}
                        </td>
                        <td>
                            {{number_format($country->hcda)}}
                        </td>
                        <td>
                            {{number_format($country->nhata)}}
                        </td>
                        <td>
                            {{number_format($country->liquidity)}}
                        </td>
                        <td>
                            ${{number_format($country->drt)}}

                        </td>
                        <td>
                            ${{number_format($country->drtpercapital)}}
                        </td>
                        <td>
                            {{$country->idao}}
                        </td>

                    </tr>

                    @endforeach
                    <tr class="fw-bold">
                        <th scope="row"></th>
                        <td>TOTAL</td>
                        <td>{{number_format($total)}}</td>
                        {{-- <td>100&nbsp%</td> --}}
                        <td>{{round( $percentage_total,3)}}&nbsp%</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection