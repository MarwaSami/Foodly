<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\orders;
use App\Models\orders_details;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Item::where("type", "original")->get();
        //dd($items);
        return view('items.items', compact('items'));

    }

    public function meal()
    {

        $items = Item::where('categories_id', 2)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }
    public function pizza()
    {

        $items = Item::where('categories_id', 3)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }

    public function sandwiches()
    {

        $items = Item::where('categories_id', 1)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }
    public function pasta()
    {

        $items = Item::where('categories_id', 4)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }
    public function drinks()
    {

        $items = Item::where('categories_id', 5)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }
    public function desserts()
    {

        $items = Item::where('categories_id', 6)->where("type", "original")->get();
        // dd($items);
        return view('items.items', compact('items'));

    }

    public function cart(Request $request)
    {

        $items = $request->all();
        $totalprice = 0;
        if (auth()->id() == null) {
            return view('LOGIN.Ulogin');
        } else {
        foreach ($items['product'] as $item) {
            $totalprice += (int) explode(' ', $item['price'])[1];

        }
        $orderid = orders::insertGetId([
            'cust_id' => auth()->id(),
            'price' => $totalprice,
        ]);
        $Q = 1;
        foreach ($items['product'] as $item) {
            $item = Item::where('name', $item['name'])->first();
            $id = ($item->id);

            $price = $item['price'];
            orders_details::create([
                'order_id' => $orderid,
                'items_id' => $id,
                'price' => $price,
                'quantity' => $Q,
            ]);
        }
        $items = item::take(6)->get();
        return view("Home", compact("items"));
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $item = Item::create([
            'name' => $request->input('Pizza tuna'),
            'img' => $request->input('ph.jpg'),
            'price' => $request->input('100'),
            'description' => $request->input('mix salamon'),
            'category_id' => $request->input('3'),
        ]);

        // Do something after creating the item...

        return redirect('/pizza');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
