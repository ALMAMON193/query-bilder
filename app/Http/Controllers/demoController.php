<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demoController extends Controller
{
    // function demo()
    // {
    //     // return DB::table('brands')->find(3);
    //     // return DB::table('brands')->first();
    //     //return DB::table('brands')->get();
    //     //return DB::table('brands')->where('id', 3)->get();
    //     // $count = DB::table('products')->count();
    //     // $max = DB::table('products')->max('price');
    //     // $min = DB::table('products')->min('price');
    //     // $avg = DB::table('products')->avg('price');
    //     // return ['count' => $count, 'max' => $max, 'min' => $min, 'avg' => $avg];
    //     // $select = DB::table('products')->select('price')->get();
    //     // //$select = DB::table('products')->select('price')->distinct()->get(); //unique value golo get kore
    //     // return $select;
    // }
    // function demo()
    // {
    //     $join = DB::table('products')->rightJoin('brands', 'products.brand_id', '=', 'brands.id')->rightJoin('categories', 'products.category_id', '=', 'categories.id')->get();
    //     return $join;
    // }


    // function demo()
    // {
    //     // jotogola combinnation possible sob golo show korbe
    //     $cross_join = DB::table('products')->crossJoin('brands')->get();
    //     return $cross_join;
    // }

    //pagination 

    // function demo()
    // {

    //     $pagination = DB::table('products')->paginate($perpage = 3, $columns = ['*'], $pageName = 'product',);
    //     return $pagination;
    // }

    // function demo()
    // {

    //     // $orderBY = DB::table('products')->inRandomOrder()->get();
    //     // $orderBY = DB::table('products')->latest()->get();
    //     // $orderBY = DB::table('products')->oldest()->get();
    //     $orderBY = DB::table('products')->groupBy('title')->get();
    //     return $orderBY;
    // }

    // //data insert
    // function demo()
    // {
    //     $insert = DB::table('brands')->insert([
    //         'brandName' => 'Toyota',
    //         "brandImg" => "toyota.png",
    //     ]);
    //     return $insert;
    // }


    // function demo(Request $request)
    // {
    //     $insert = DB::table('brands')->insert($request->input());
    //     return $insert;
    // }


    // function demo(Request $request)
    // {
    //     $insert = DB::table('brands')->where('id', '=', $request->id)->update($request->input());
    //     return $insert;
    // }

    function demo(Request $request)
    {
        $delete = DB::table('brands')->where('id', '=', $request->id)->delete();
        return $delete;
    }
}
