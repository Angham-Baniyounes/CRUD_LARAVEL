<div class="card">
    <div class="card-header">Category Form</div>
    <div class="card-body card-block">
        <form action="/category/{{$category['id']}}" method="post" class="">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" id="cat_name" name="cat_name" placeholder="Category name" class="form-control" value="{{$category['cat_name']}}">
                </div>
            </div>
            <div class="form-actions form-group">
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </form>
    </div>
</div>