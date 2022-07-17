@extends('layouts.dashboard')
@section('components')
active
@endsection
@section('title')
Header components
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">DAO's</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">DAO's</label>
                        <input name="value" type="text" value="{{$header->where('name','daos')->first()?->value}}"
                            required class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="daos" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$header->where('name','daos')->first()?->info}}</textarea>
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
                <form action="{{route('header_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">DRT</label>
                        <input name="value" type="text" value="{{$header->where('name','drt')->first()?->value}}"
                            required class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="drt" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$header->where('name','drt')->first()?->info}}</textarea>
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
                <strong class="card-title">Golden No</strong>
            </div>
            <div class="card-body">
                <form action="{{route('header_components')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label class="control-label mb-1">Golden no</label>
                        <input name="value" type="text"
                            value="{{$header->where('name','golden_no')->first()?->value}}" required
                            class="form-control" aria-required="true" aria-invalid="false">
                        <input name="name" value="golden_no" type="hidden" class="form-control" aria-required="true"
                            aria-invalid="false">
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-1">Info</label>
                        <textarea name="info" class="form-control"
                            required>{{$header->where('name','golden_no')->first()?->info}}</textarea>
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