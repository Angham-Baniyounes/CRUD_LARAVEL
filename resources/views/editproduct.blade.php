<div class="card">
    <div class="card-header">Product Form</div>
    <div class="card-body card-block">
        <form action="/product/{{$product['id']}}" method="post" class="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" id="productname" name="Pro_name" placeholder="product name" class="form-control" value="{{$product['Pro_name']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <input type="number" id="price" name="Pro_price" placeholder="Product Price" class="form-control" value="{{$product['Pro_price']}}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                        <input  type="file" name="file" id="Pro_image" >
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