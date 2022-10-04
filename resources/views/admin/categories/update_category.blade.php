@extends('admin.layout.master')
@section('content')
@if (\Session::has('success'))
<div class="alert alert-success">
    Cập Nhập Danh Mục Thành Công
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
            <legend>Thêm Danh Mục mới</legend>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_name">Tên</label>
                <div class="col-md-12 d-flex justify-content-center">
                    <input id="product_name" name="name" value="{{$categories->name}}"
                        placeholder="--Tên danh mục mới--" class="form-control w-75" required="" type="text">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-12 control-label" for="product_weight">Mô Tả Ngắn</label>
                <div class="col-md-12 d-flex justify-content-center">
                    <input id="product_weight" name="desc_short" placeholder="--Mô tả ngắn về danh mục--"
                        class="form-control w-75" required="" type="text" value="{{$categories->desc_short}}">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button id="singlebutton" class="btn btn-success w-50">Cập Nhập Danh Mục</button>
                </div>
            </div>
        </fieldset>
    </form>
</main>
@endsection