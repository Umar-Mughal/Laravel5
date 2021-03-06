@extends('admin_area/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Slider</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin_area/sliders/create') }}" class="btn btn-success btn-sm" title="Add New Slider">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin_area/sliders', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Heading</th><th>Description</th><th>Image</th><th>Actions</th><th>Featured</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->heading }}</td><td>{{ $item->description }}</td><td><img src="{{ asset('storage/images/' .$item->image) }}" alt="image" width="160" height="160"></td>
                                        <td>
                                            <a href="{{ url('/admin_area/sliders/' . $item->id) }}" title="View Slider"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin_area/sliders/' . $item->id . '/edit') }}" title="Edit Slider"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin_area/sliders', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Slider',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $sliders->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
