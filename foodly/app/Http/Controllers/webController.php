<?php

namespace App\Http\Controllers;

use auth;
use App\Models\item;
use App\Models\User;
use App\Models\items;
use App\Models\orders;
use App\Models\categories;
use App\Models\ingredients;
use Illuminate\Http\Request;
use App\Models\orders_details;
// use Illuminate\Foundation\Auth\User;
use App\Models\sub_categories;
use Illuminate\Support\Facades\Hash;
use App\Models\categories_sub_categories;
use App\Models\customers;

class webController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $items=item::all();
        $items = item::take(6)->get();
        return view("Home", compact("items"));
    }
    public function index_UOwnDish()
    {
        $categories = categories::take(5)->get();
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

    public function UReg(Request $req)
    {
        return view("LOGIN.UReg");
    }
    public function URegadd(Request $req)
    {
        $req->validate(['name'=>'required|alpha:ascii','password'=>'required|min:3','email'=>'required|email:rfc,dns','ConPassword'=>'required|min:3','subscription'=>'required','phone'=>'required|']);
        if((auth()->attempt($req->except(['ConPassword','subscription','phone','_token'])))){
            return redirect('/Ulogin')->with("exist","You are already exist Try login");
            //|unique:users
        }
        else
        {
            $req->validate(['email'=>'unique:users']);
        }
        if(!($req['password']==$req['ConPassword']))
        {
            return redirect('/UReg')->with("Confirmpass","Password ans confirm password are no matched");
        }
        else
        {
        // dd($req->except('ConPassword'));
        $pass=md5($req["password"]);
        $req['password'] = Hash::make($req->password);
        $user = User::create($req->except(['ConPassword']));
        auth()->login($user);
        return redirect("/Ulogin");
    }
    }
    public function Ulogin(){
        return view('LOGIN.Ulogin');
    }
    public function Uloginvalid(Request $req){
        if(auth()->attempt($req->except('_token'))){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('Ulogin');
        }
    }
    public function Ulogout(){
        auth()->logout();
        $items = item::take(6)->get();
        return view("Home", compact("items"));
    }
    public function showsub(Request $req)
    {
        $Order = $req->all();
        if (auth()->id() == null) {
            return view('LOGIN.Ulogin');
        } else {
        $orderid = orders::insertGetId([
            'cust_id' => auth()->id(),
            'price' => $Order['Total_Price_'],
        ]);
        foreach ($Order['Dish'] as $Dish) {
            //   // Name of item and Get id of category
            $cate = categories::where('name', $Dish['name'])->first();
            //  desicription of item
            $descrip = "Ingredients  ";
            foreach ($Dish['Ingred'] as $ingredient) {
                $descrip .= ": " . $ingredient['name'] . " ";
                $descrip .= "size: " . $ingredient['size'] . "<br>";
            }
            //   // Price
            $price = $Dish['price'];
            //   // Quatity
            $Q = $Dish['Q'];
            $itemid = items::insertGetId(
                ['name' => $Dish['name'],
                    'price' => $price,
                    'categories_id' => $cate->id,
                    'description' => $descrip,
                    'type' => 'customiz']
            );
            orders_details::create([
                'order_id' => $orderid,
                'items_id' => $itemid,
                'price' => $price,
                'quantity' => $Q,
            ]);
        }
        $items = item::take(6)->get();
        return view("Home", compact("items"));
    }
    }
    public function product()
    {
        $categories = categories::all();
        return view("Product", compact("categories"));
    }}
