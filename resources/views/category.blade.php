@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">Category Form</div>
    <div class="card-body card-block">
        <form action="" method="post" class="">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Category name" class="form-control">
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
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{$category['id']}}
                        </td>
                        <td>
                            {{$category['cat_name']}}
                        </td>
                        <td>
                            <a href="category/{{$category['id']}}/editcategory">Edit</a>
                        </td>
                        <td>
                            <a href="category/{{$category['id']}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection