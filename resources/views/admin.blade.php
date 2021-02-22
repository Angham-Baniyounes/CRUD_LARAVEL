@extends('layout')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Manage Admin</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Creat Admin</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <hr>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                    <input name="admin_email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                    <input name="admin_password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                    <input name="admin_fullname" type="text" class="form-control">
                </div> 
                {{-- <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Image</label>
                    <input name="admin_image" type="file" class="form-control">
                </div>                               --}}
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                        Save                                                    
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Fullname</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <td>
                            {{$admin['id']}}
                        </td>
                        <td>
                            {{$admin['admin_email']}}
                        </td>
                        <td>
                            {{$admin['admin_fullname']}}
                        </td>
                        <td>
                            <a href="admin/{{$admin['id']}}/editadmin">Edit</a>
                        </td>
                        <td>
                            <a href="admin/{{$admin['id']}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END DATA TABLE-->
</div>
@endsection