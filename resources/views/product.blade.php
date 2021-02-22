@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Product Form</div>
    <div class="card-body card-block">
        <form action="" method="post" class="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" id="productname" name="Pro_name" placeholder="product name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <input type="number" id="price" name="Pro_price" placeholder="Product Price" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                        <input type="file" name="file" id="Pro_image" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                    </div>
                    <select name="cat_id"  name="cat_name">
                        <?php
                            $cat = App\Category::all() ;
                        ?>
                        @foreach($cat -> all() as $value)
                        <option   value="{{$value['cat_id']}}">{{$value['cat_name']}}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </form>
    </div>
</div>
<div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{$product['id']}}
                        </td>
                        <td>
                            {{$product['Pro_name']}}
                        </td>
                        <td>
                            {{$product['Pro_price']}}
                        </td>
                        <td>
                            <img width="65px"  height="65px" src="{{$product['Pro_image']}}" >
                        </td>
                        <td>
                            <a href="product/{{$product['id']}}/editproduct">Edit</a>
                        </td>
                        <td>
                            <a href="product/{{$product['id']}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection