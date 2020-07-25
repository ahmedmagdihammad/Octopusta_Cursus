@extends('layouts.backend.master')
@section('title')
    Sessions
@endsection
@section('namepage')
    <li><a href="{{route('session')}}"><i class="fa fa-laptop"></i> sessions</a></li>
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
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            <th>Level</th>
                            <th>Name</th>
                            <th>Sort</th>
                            <th>Video</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessions as $s)
                            <tr>
                                <td>{{$s->getLevel->name}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->sort}}</td>
                                <td>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{asset($s->video)}}" allowfullscreen></iframe>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal{{$s->id}}"><i class="fa fa-edit"> Edit</i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$s->id}}"><i class="fa fa-trash"> Delete</i></button>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('session.edit', $s->id)}}">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Level</label>
                                                    <select name="uplevel" id="uplevel" class="form-control">
                                                        @foreach($levels as $level)
                                                        <option value="{{$level->id}}" @if($level->id == $s->level) checked @endif>{{$level->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="upname" value="{{$s->name}}" class="form-control" id="name" placeholder="Enter name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sort</label>
                                                    <input type="number" name="upsort" value="{{$s->sort}}" class="form-control" id="sort" placeholder="Enter sort" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Video</label>
                                                    <input type="file" name="upvideo" value="{{$s->video}}" class="form-control" id="video" placeholder="Enter video">
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
                            <div class="modal fade" id="deleteModal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash"></i> Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{route('session.delete', $s->id)}}">
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
                                        <form method="POST" action="{{route('session.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Level</label>
                                                    <select name="level" id="level" class="form-control">
                                                        <option value="--">- Selected Level -</option>
                                                        @foreach($levels as $level)
                                                        <option value="{{$level->id}}">{{$level->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sort</label>
                                                    <input type="number" name="sort" class="form-control" id="sort" placeholder="Enter sort" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Video</label>
                                                    <input type="file" name="video" class="form-control"  required>
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