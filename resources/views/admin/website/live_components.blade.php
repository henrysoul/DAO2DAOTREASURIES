@extends('layouts.dashboard')
@section('components')
active
@endsection
@section('title')
Live components
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Live components</strong>
            </div>
            <div class="card-body">
                <form action="{{route('live_components')}}" method="post">
                    @csrf
                    @foreach($lives as $live)
                    <div class="form-group">
                        <label class="control-label mb-1">Message</label>
                        <input name="name[]" value="{{$live->value}}" required class="form-control" aria-required="true"
                            aria-invalid="false">
                        <input type="hidden" name="id[]" value="{{$live->id}}">
                    </div>
                    @endforeach

                    {{--
            </div> --}}
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
            </form>
        </div>

    </div> <!-- .card -->

</div>
</div>
@endsection