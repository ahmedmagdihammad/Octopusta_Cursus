@extends('layouts.backend.master')
@section('title')
    Administration
@endsection
@section('namepage')
  <li><a href="{{route('administration')}}"><i class="fa fa-user-plus"></i> Administration</a></li>
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->email}}</td>
                                <td>@if($user->status == 1) <a href="{{route('administration.deactive', $user->id)}}" class="btn btn-info btn-xs"><i class="fa fa-check"></i> active</a>  @else <a href="{{route('administration.active', $user->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Deactive</a> @endif</td>
                                <td>
                                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal{{$user->id}}"><i class="fa fa-edit"> Edit</i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$user->id}}"><i class="fa fa-trash"> Delete</i></button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('administration.edit', $user->id)}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Enter name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mobile</label>
                                                    <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" id="mobile" placeholder="Enter mobile" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Enter email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                                                </div>
                                                <div class="form-group hide">
                                                    <label for="exampleInputPassword1">type</label>
                                                    <input type="text" name="type" class="form-control" value="S" id="type" placeholder="Type">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash"></i> Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('administration.delete', $user->id)}}">
                                            @csrf
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this is account?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

@endsection