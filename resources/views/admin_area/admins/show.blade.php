@extends('admin_area/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin {{ $admin->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin_area/admins') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin_area/admins/' . $admin->id . '/edit') }}" title="Edit Admin"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin_area/admins', $admin->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Admin',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $admin->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $admin->name }} </td></tr><tr><th> Email </th><td> {{ $admin->email }} </td></tr><tr><th> Password </th><td> {{ $admin->password }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
