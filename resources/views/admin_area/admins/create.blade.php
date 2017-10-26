@extends('admin_area/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Admin</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin_area/admins') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin_area/admins', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin_area.admins.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
