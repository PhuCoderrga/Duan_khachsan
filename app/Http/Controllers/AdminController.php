<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Categories;

class AdminController extends Controller
{
    public function ShowIndex()
    {
        return view('admin.index');
    }
/*Product */
    /*List*/
    public function ShowListProduct(){
        
        $products = DB::table('products');
        return view('admin.products.list_product', ['products' => $products]);
    }
    /*Insert*/
    public function ShowCreateProduct(){

        $categories = DB::table('categories');
        return view('admin.products.create_product',['categories' => $categories]);
    }
    public function CreateProduct(ProductRequest $request)
    {
        if ($request->hasFile('feature_img')) {
            $file = $request->file('feature_img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(( public_path('admin/assets/img/products/')), $filename );
            $file_path = 'admin/assets/img/products/' . $filename;
            $data = $request->all();
            $data['feature_img'] = $file_path;
            Product::create($data);
            return back()->with('success', 'Đăng sản phẩm thành công');
        } else {
            return 'File Không Tồn Tại';
        }
    }
    /*edit*/
    public function ShowEditProduct(Request $request){

        $id = $request->id;
        $product = DB::table('products')->where('id', $id)->first();
        $categories = DB::table('categories');
        return view('admin.products.update_product', compact(['categories', 'product']));
    }
    public function EditProduct(request $request, $id)
    {
        if ($request->hasFile('feature_img')) {
            $file = $request->file('feature_img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(( public_path('admin/assets/img/products/')), $filename );
            $file_path = 'admin/assets/img/products/' . $filename;
            $data = $request->all();
            $data['feature_img'] = $file_path;
            $Product = Product::find($id);
            $Product->update($data);
            return back()->with('success', 'cập nhập sản phẩm thành công');
        } else {
            $data = $request->all();
            $Product = Product::find($id);
            $Product->update($data);
            return back()->with('success', 'cập nhập sản phẩm thành công');
        }
        
    }
    /*delete*/
    public function DeleteProduct(Request $request)
    {
        $Product = Product::find($request->id);
        $Product->delete();
        return back()->with('success', 'Xóa sản phẩm khỏi gian hàng');
    }
/*categories*/
    /*list*/
    public function ShowListCategories(){
        
        $categories = DB::table('categories');
        return view('admin.categories.list_categories', ['categories' => $categories]);
    }
    /*Insert*/
    public function ShowCreateCatgories(){

        return view('admin.categories.create_category');
    }
    
    public function CreatePCategories(CategoryRequest $request)
    {
            $data = $request->all();
            Categories::create($data);
            return back()->with('success', 'Đăng danh mục thành công');
    }
    /*edit*/
    public function ShowEditCategory(Request $request){

        $id = $request->id;
        $categories = DB::table('categories')->where('id', $id)->first();
        return view('admin.categories.update_category', compact(['categories']));
    }
    public function EditCategory(request $request, $id)
    {
        $data = $request->all();
        $Category = Categories::find($id);
        $Category->update($data);
        return back()->with('success', 'cập nhập sản phẩm thành công');  
    }
    
}