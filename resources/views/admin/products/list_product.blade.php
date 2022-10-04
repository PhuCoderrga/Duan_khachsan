@extends('admin.layout.master')
@section('content')
@if (\Session::has('success'))
<div class="alert alert-danger">
    Xóa sản phẩm khỏi gian hàng
</div>
@endif
<main>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh Sách</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Tên</th>
                                <th>Danh Mục</th>
                                <th>Slug</th>
                                <th>Giá</th>
                                <th>Mô Tả Ngắn</th>
                                <th class="w-25">Hình Ảnh</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="text-center">
                                    <a href="{{ route('createproduct.admin')}}" class="btn btn-success"
                                        role="button">Thêm</a>
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($products->get() as $key => $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->desc_short }}</td>
                                <td>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-10">
                                            <img class="img-fluid" src="{{asset($product->feature_img)}}"
                                                id="uploadedImage" alt="Uploaded Image" style="display:block;">
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <a href="{{ route('editproduct.admin', ['id' => $product->id]) }}"
                                                class="btn btn-warning mr-2" role="button">Sửa</a>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('deleteproduct.admin') }}" method="post"
                                                onSubmit="return confirm('mày có muốn xóa?') ">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <button class="btn btn-danger" type="submit" role="button">Xóa</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection