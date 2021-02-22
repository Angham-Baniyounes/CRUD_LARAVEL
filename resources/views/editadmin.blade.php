
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Update Data Admin</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Update Admin</h3>
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
            <form action="/admin/{{$admin['id']}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                    <input name="admin_email" type="text" class="form-control" value="{{$admin['admin_email']}}">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                    <input name="admin_password" type="password" class="form-control" value="{{$admin['admin_password']}}">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                    <input name="admin_fullname" type="text" class="form-control" value="{{$admin['admin_fullname']}}">
                </div> 
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                        Update                                                    
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>