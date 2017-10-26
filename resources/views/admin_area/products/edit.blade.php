@extends('admin_area/layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Product #{{ $product->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin_area/products') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($product, [
                            'method' => 'PATCH',
                            'url' => ['/admin_area/products', $product->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin_area.products.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
