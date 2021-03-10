@extends('product.layout')

@section('content')
    <br><br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>laravel product list</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create.product') }}">Create new product</a>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="150px">Prodect name</th>
                <th width="100px">Prodect code</th>
                <th width="230px">Details</th>
                <th width="90px">Logo</th>
                <th width="200px">Actions</th>
            </tr>     
            @foreach($product as $pro)
             <tr>
            
                <td>{{ $pro->product_name }}</td>
                <td>{{ $pro->product_code }}</td>
                <td>{{ $pro->details }}</td>
                <td> <img src="{{ URL::to($pro->logo) }}" height="80px;" width="90px;"> </td>
                <td>
                    <a class="btn btn-info" href="{{ URL::to('show/product/'.$pro->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ URL::to('edit/product/'.$pro->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ URL::to('delete/product/'.$pro->id) }}" onclick="return confirm('are you sure ?')">Delete</a>
                </td>
            
            </tr>    
            @endforeach
        </table>
        {!! $product->links() !!}
    </div>

@endsection