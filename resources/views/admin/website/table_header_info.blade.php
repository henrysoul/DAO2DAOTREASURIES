@extends('layouts.dashboard')
@section('components')
active
@endsection
@section('title')
Table Header info
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Federated DAO</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="inkrested" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','inkrested')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">EPoH</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="epoh" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','epoh')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Total</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="total" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','total')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Hata</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="hata" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','hata')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Hcda</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="hcda" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','hcda')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">N-HATA</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="nhata" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','nhata')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Liquidity</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="liquidity" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','liquidity')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">DRT</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="drt" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','drt')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">DRT per capital</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="drtpercapital" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','drtpercapital')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">IDAO</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_info')}}" method="post">
                    @csrf

                    <input name="name" value="idao" type="hidden" class="form-control" aria-required="true"
                    aria-invalid="false">
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$info->where('name','idao')->first()?->value}}</textarea>
                    </div>
                    <div class="form-actions form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>

        </div> <!-- .card -->

    </div>
</div>
@endsection