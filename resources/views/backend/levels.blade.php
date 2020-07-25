@extends('layouts.backend.master')
@section('title')
    Levels
@endsection
@section('namepage')
    <li><a href="{{route('level')}}"><i class="fa fa-level-up"></i> level</a></li>
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table @yield('title')</h3>
                    <button class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"> Add @yield('title')</i></button>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>Name</th>
                            <th>Session</th>
                            <th>Max</th>
                            <th>Sort</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($levels as $level)
                            <tr>
                                <td>{{$level->name}}</td>
                                <td>{{$level->sessions}}</td>
                                <td>{{$level->max}}</td>
                                <td>{{$level->sort}}</td>
                                <td>
                                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal{{$level->id}}"><i class="fa fa-edit"> Edit</i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$level->id}}"><i class="fa fa-trash"> Delete</i></button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{$level->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('level.edit', $level->id)}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="upname" value="{{$level->name}}" class="form-control" id="name" placeholder="Enter name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sessions</label>
                                                    <input type="number" name="upsessions" value="{{$level->sessions}}" class="form-control" id="sessions" placeholder="Enter sessions" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Max</label>
                                                    <input type="number" name="upmax" value="{{$level->max}}" class="form-control" id="max" placeholder="Enter max" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sort</label>
                                                    <input type="number" name="upsort" value="{{$level->sort}}" class="form-control" id="sort" placeholder="Enter sort" required>
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
                            <div class="modal fade" id="deleteModal{{$level->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash"></i> Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('level.delete', $level->id)}}">
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
                            

                            <!-- Modal Add -->
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"></i> Add</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('level.store')}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sessions</label>
                                                    <input type="number" name="sessions" class="form-control" id="sessions" placeholder="Enter session" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Max</label>
                                                    <input type="number" name="max" class="form-control" id="max" placeholder="Enter max" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sort</label>
                                                    <input type="number" name="sort" class="form-control" id="sort" placeholder="Enter sort" >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info"> Add</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

@endsection