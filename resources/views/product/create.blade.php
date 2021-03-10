@extends('product.layout')
@section('content')


<br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add new product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.index') }}">Back</a>
            </div>
        </div>
    </div>


    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product name :</strong>
                    <input type="text" name="product_name" class="form-control" placeholder=" Entrer ...">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Product code :</strong>
                    <input type="text" name="product_code" class="form-control" placeholder=" Entrer ...">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>details :</strong>
                    <textarea class="form-control" name="details" placeholder="Entrer ..." style="height: 150px"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image :</strong>
                    <input type="file" name="logo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>

        </div>
    </form>


@endsection