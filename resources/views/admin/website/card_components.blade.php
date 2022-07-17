@extends('layouts.dashboard')
@section('components')
active
@endsection
@section('title')
Card components
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">EPoH</strong>
            </div>
            <div class="card-body">
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">EPoH</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','epoh')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="epoh" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','epoh')->first()?->info}}</textarea>
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
                <strong class="card-title">Distributed reserved coin</strong>
            </div>
            <div class="card-body">
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">Distributed reserved coin</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','drc')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="drc" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','drc')->first()?->info}}</textarea>
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
                <strong class="card-title">VPoH</strong>
            </div>
            <div class="card-body">
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">VPoH</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','vpoh')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="vpoh" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','vpoh')->first()?->info}}</textarea>
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
                <strong class="card-title">Global Allocation</strong>
            </div>
            <div class="card-body">
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">Global allocation</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','global_allocation')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="global_allocation" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','global_allocation')->first()?->info}}</textarea>
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
                <strong class="card-title">Distributed reserved stable coin</strong>
            </div>
            <div class="card-body">
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">Distributed reserved stable coin</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','dsrc')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="dsrc" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','dsrc')->first()?->info}}</textarea>
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
                <form action="{{route('card_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">Liquidity</label>
                        <input name="value" type="text"
                            value="{{$card->where('name','liquidity')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="liquidity" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$card->where('name','liquidity')->first()?->info}}</textarea>
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