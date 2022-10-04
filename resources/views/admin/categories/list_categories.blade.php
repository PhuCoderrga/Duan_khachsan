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
                                <th>Dường Dẫn</th>
                                <th>Mô Tả Ngắn</th>
                                <th>Thời Gian Tạo</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="7" class="text-center">
                                    <a href="{{ route('createcategory.admin')}}" class="btn btn-success"
                                        role="button">Thêm</a>
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($categories->get() as $key => $categories)
                            <tr>
                                <td>{{ $categories->name }}</td>
                                <td>{{ $categories->slug }}</td>
                                <td>{{ $categories->desc_short }}</td>
                                <td>{{ $categories->created_at }}</td>
                                <td class="d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <a href="{{ route('editcategory.admin', ['id' => $categories->id]) }}"
                                                class="btn btn-warning mr-2" role="button">Sửa</a>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <form action="{{ route('deletecategory.admin') }}" method="post"
                                                onSubmit="return confirm('mày có muốn xóa?') ">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$categories->id}}">
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