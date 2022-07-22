@extends('layouts.dashboard')
@section('components')
active
@endsection
@section('title')
Table components
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Countries</strong>
            </div>
            <div class="card-body">
                <form action="{{route('table_components')}}" method="post">
                    @csrf

                    <div class="table-responsive">
                        <table class="table table-hover table-condensed">
                            <thead class="table-bordered">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Federated DAO <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">EPoH/VPoH <i class="bi bi-info-circle"></i></th>
                                    {{-- <th scope="col">% of Total <i class="bi bi-info-circle"></i></th> --}}
                                    <th scope="col">HATA <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">HDCA <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">N-HATA <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">NWT <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">Liquidity <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">Treasuries <i class="bi bi-info-circle"></i></th>
                                    <th scope="col">IDAO <i class="bi bi-info-circle"></i></th>

                                </tr>
                            </thead>
                            <tbody class="my-5">
                                @php $count = 1 @endphp
                                @foreach ($countries as $country )

                                <tr>
                                    <th scope="row">{{$count ++}}</th>
                                    <td><span
                                            class="{{'flag-icon flag-icon-'.strtolower($country->iso2).' flag-icon-squared'}}"></span>{{($country->name)}}&nbspDAO
                                    </td>
                                    <td>EPoH/VPoH<input name="population[]" value="{{$country->population}}"  />
                                    </td>
                                    {{-- <td class="text-success">%<input name="percentage[]"
                                            value="{{$country->percentage}}" ></td> --}}
                                    <td>hata<input name="hata[]" value="{{$country->hata}}" ></td>
                                    <td>hdca<input name="hcda[]" value="{{$country->hcda}}" ></td>
                                    <td>nhata<input name="nhata[]" value="{{$country->nhata}}" ></td>
                                   
                                    <td>nwt<input name="drt[]" value="{{$country->drt}}" ></td>
                                    <td>liquidity<input name="liquidity[]" value="{{$country->liquidity}}" >
                                    </td>
                                    <td>treasuries<input name="drtpercapital[]" value="{{$country->drtpercapital}}"
                                            ></td>
                                    <td>idao<input name="idao[]" value="{{$country->idao}}" ></td>
                                    <input type="hidden" name="id[]" value="{{$country->id}}"/>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->
    </div>
    @endsection