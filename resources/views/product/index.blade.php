@extends('product.layout')

@section('content')
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Product List</h2>
            </div>
            <div class="pull-right">
                <a href="" class="btn btn-success"> Create new product</a>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th width="150px">Product Name</th>
                <th width="150px">Product Code</th>
                <th width="200px">Details</th>
                <th width="100px">Product Logo</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                @foreach($product as $pro)
                <td>{{$pro-> product_name}}</td>
                <td>{{$pro-> product_code}}</td>
                <td>{{$pro-> details}}</td>
                <td></td>
                <td>
                    <a href="" class="btn btn-info">show</a>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
                @endforeach
            </tr>
        </table>
    </div>

@endsection