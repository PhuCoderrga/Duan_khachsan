<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublishController extends Controller
{
    public function ShowIndex(){
        
        $products = DB::table('products');
        return view('user.index',['products' => $products]);
    }

    public function DLTrongNuoc(){
        
        return view('user.dulichtrongnuoc');
    }

    public function DLNgoaiNuoc(){

        return view('user.dulichngoainuoc');
    }

    public function ChiTietTour(Request $request, $id){
        
        $product_details = DB::table('products')->find($id);
        return view('user.detail_product',['product_details' => $product_details]);
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = DB::table('products')->where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '
                    <div class="box_result mt-2">
                                <div class="name_Search">
                                    <h6>'.$product->name.'</h6>
                                </div>
                                <span><a href="">Tìm Hiểu Chi Tiết >></a></span>
                            </div>
                    ';
                }
            }
            return Response($output);
        }
    }
}