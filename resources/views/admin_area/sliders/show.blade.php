@extends('admin_area/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Slider {{ $slider->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin_area/sliders') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin_area/sliders/' . $slider->id . '/edit') }}" title="Edit Slider"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin_area/sliders', $slider->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Slider',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $slider->id }}</td>
                                    </tr>
                                    <tr><th> Heading </th><td> {{ $slider->heading }} </td></tr><tr><th> Description </th><td> {{ $slider->description }} </td></tr><tr><th> Image </th><td> {{ $slider->image }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
