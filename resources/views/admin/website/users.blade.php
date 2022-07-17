@extends('layouts.dashboard')
@section('users')
active
@endsection
@section('title')
Users
@endsection
@section('content')
@include('partials.alerts')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Users</strong>
            </div>
            <div class="card-body">
                <button class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">Add user</button>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="my-5">
                            @php $count = 1 @endphp
                            @foreach ($users as $user )

                            <tr>
                                <td scope="row">{{$count ++}}</td>
                                <td>{{$user->name}}
                                </td>
                                <td>{{$user->email}}
                                </td>
                                <td><button class="btn btn-primary mt-2" data-toggle="modal"
                                        data-target="#mediumModal{{$user->id}}">Edit</button>&nbsp<a
                                        class="btn btn-secondary mt-2" href="{{route('delete_user',$user->id)}}"
                                        onclick="return confirm('Are you sure you want to delete user?')">Delete</a>
                                </td>
                            </tr>
                            {{-- edit modal --}}
                            <div class="modal fade" id="mediumModal{{$user->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="mediumModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="mediumModalLabel">Create user</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('update_user')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Name</label>
                                                    <input name="name" type="text"
                                                        value="{{old('name')?old('name'):$user->name}}" required
                                                        class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Email</label>
                                                    <input name="email" type="text"
                                                        value="{{old('email')?old('email'):$user->email}}" required
                                                        class="form-control">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label class="control-label mb-1">Password</label>
                                                    <input name="password" type="text" value="{{old('password')}}"
                                                        required class="form-control">
                                                </div> --}}
                                                <input name="id" type="hidden" value="{{$user->id}}"/>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Create user</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('create_user')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label mb-1">Name</label>
                                    <input name="name" type="text" value="{{old('name')}}" required
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Email</label>
                                    <input name="email" type="text" value="{{old('email')}}" required
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Password</label>
                                    <input name="password" type="text" value="{{old('password')}}" required
                                        class="form-control">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- .card -->
    </div>
</div>
@endsection