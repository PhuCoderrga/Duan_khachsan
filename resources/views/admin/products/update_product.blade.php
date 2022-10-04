@extends('admin.layout.master')

@section('content')

@if (\Session::has('success'))
<div class="alert alert-success">
    Thành Công Thêm Sản Phẩm Mới
</div>
@endif
<main class="container">
    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
        @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach($errors->all() as $value)
                <li>{{$value}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        <fieldset>
            <!-- Form Name -->
            <legend>Cập Nhập Sản Phẩm mới</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_name">Tên</label>
                <div class="col-md-12">
                    <input id="product_name" name="name" value="{{$product->name}}" placeholder="--Tên sản phẩm mới--"
                        class="form-control input-md" required="" type="text">
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="category_id">Danh Mục</label>
                <div class="col-md-6">
                    <select id="product_categorie" name="category_id" class="form-control">
                        <option value="">Chọn Danh Mục</option>
                        @foreach($categories->get() as $key => $category)
                        <option value="{{$category->id}}" {{$category->id == $product->category_id ?'selected':''}}>{{
                            $category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="available_quantity">Giá</label>
                <div class="col-md-6">
                    <input id="available_quantity" name="price" placeholder="--Giá cho sản phẩm--"
                        class="form-control input-md" required="" type="text" value="{{$product->price}}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_weight">Giá Giảm</label>
                <div class="col-md-6">
                    <input id="product_weight" name="price_discount" placeholder="--Giá giảm--"
                        class="form-control input-md" required="" type="text" value="{{$product->price_discount}}">

                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_weight">Mô Tả Ngắn</label>
                <div class="col-md-12">
                    <input id="product_weight" name="desc_short" placeholder="--Mô tả ngắn về sản phẩm--"
                        class="form-control input-md" required="" type="text" value="{{$product->desc_short}}">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_description">Mô Tả Dài</label>
                <div class="col-md-12">
                    <textarea class="form-control" rows="4" cols="50" id="product_description"
                        name="desc_long">{{$product->desc_long}}</textarea>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <!-- File Button -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="filebutton">
                        Ảnh Sản Phẩm
                    </label>
                    <div class="col-md-12">
                        <!--<input id="filebutton" type="file">-->
                        <div class="row d-flex align-items-center">
                            <div class="col-md-3">
                                <input type='file' id="readUrl" name="feature_img" class="input-file" value="">
                            </div>
                            <div class="col-md-4">
                                <img class="img-fluid" src="{{asset($product->feature_img)}}" id="uploadedImage"
                                    alt="Uploaded Image" style="display:block;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button id="singlebutton" class="btn btn-success w-50">Cập Nhập Sản Phẩm</button>
                    </div>
                </div>
            </div>
            </div>
        </fieldset>
    </form>
</main>
@endsection

@section('scripts')
<script type="text/javascript">
    document.getElementById('readUrl').addEventListener('change', function(){
        if (this.files[0] ) {
        var picture = new FileReader();
            picture.readAsDataURL(this.files[0]);
            picture.addEventListener('load', function(event) {
            document.getElementById('uploadedImage').setAttribute('src', event.target.result);
            document.getElementById('uploadedImage').style.display = 'block';
        });
    }
    });
</script>
@endsection