<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Models\orders;
use App\Models\categories;
use App\Models\ingredients;
use App\Models\orders_table;
use Illuminate\Http\Request;
use App\Models\orders_details;
use App\Models\sub_categories;
use Illuminate\Support\Facades\Auth;
use App\Models\categories_sub_categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
        $ingredients = [];
        $subs = [];
        foreach (ingredients::all() as $ingredient) {
            $category = categories::find($ingredient->categories_id)->name;
            $temp = ["name" => $ingredient->name, "price" => $ingredient->price, "calories" => $ingredient->calories, "category" => $category, "subcategory" => $ingredient->subcategories->name];
            array_push($ingredients, $temp);
        }
        foreach (categories_sub_categories::all() as $cate_sub) {
            $category = categories::find($cate_sub['categories_id'])['name'];
            $subcates = sub_categories::find($cate_sub['sub_categories_id'])['name'];
            $bgimg = $cate_sub['bgimg'];
            array_push($subs, ["category" => $category, "subs" => $subcates, "bgimage" => $bgimg]);
        }
        return view('UownDish.UownDish', ["categories" => $categories, "subs" => $subs, "ingredients" => $ingredients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showsub(Request $req)
    {
        $Order = $req->all();
        dd(Auth::id());
        $orderid = orders :: insertGetId([
            'cust_id' => 6,
            'price' => $Order['Total_Price_']
        ]);
        foreach ($Order['Dish'] as $Dish) {
            //   // Name of item and Get id of category
            $cate = categories::where('name', $Dish['name'])->first();
            // echo $cate->id . "<br>";
            //   // desicription of item
            $descrip = "Ingredients  ";
            foreach ($Dish['Ingred'] as $ingredient) {
                $descrip .= ": " . $ingredient['name'] . " ";
                $descrip .= "size: " . $ingredient['size'] . "<br>";
            }
            //   // Price
            $price = $Dish['price'];
            //   // Quatity
            $Q = $Dish['Q'];
            $itemid=items::insertGetId(
                [ 'name'=>$Dish['name'],
                   'price'=>$price,
                   'categories_id'=>$cate->id,
                   'description'=>$descrip,
                   'type'=>'customiz']
            );
            orders_details::create([
                'order_id' => $orderid,
                'items_id' => $itemid,
                'price' => $price,
                'quantity' => $Q,
            ]);
        }
        dd('Done');

    }
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
