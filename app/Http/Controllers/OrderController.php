<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($option = null)
    {
        if($option){
            $products = Product::all();
            $product = Product::find($option);
            // session(['productid' => $product->id]);
            return view('orders.create',["product"=>$product, "products"=>$products]);
        }else{
            $products = Product::all();
            return view('orders.create',["products"=>$products]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "product" => "required",
                "name" => "required",
                "phone_number" => "required",
            ]
        );

        $order = Order::create([
            "orderer_name" => $request->input("name"), 
            "orderer_phone_number" => $request->input("phone_number"),
            "message" => $request->input("message"),
            "user_id" => Auth::user()->id,
            "status" => "created",
        ]);

        $productid = request("product");
        // Retrieve the product ID based on the project_type title
        $product = Product::findOrFail($productid);

        // Attach the product ID to the order
        if ($product) {
            $order->products()->attach($productid);
        }
        return redirect("/dashboard/order-management")->with('success', 'Order created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($order)
    {
        $ord = Order::find($order);
        // dd($ord);
        return view('orders.edit', ["order"=>$ord]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
    $request->validate([
        "name" => "required",
        "phone_number" => "required",
    ]);
    $order->update([
        "orderer_name" => $request->input("name"),
        "orderer_phone_number" => $request->input("phone_number"),
        "message" => $request->input("message"),
    ]);

    return redirect("/dashboard/order-management")->with("success", "Order updated successfully!");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect("/dashboard/order-management");
    }

    public function manage($order)
    {
        $ord = Order::find($order);
        // dd($ord);
        return view('orders.admin.manage', ["order"=>$ord]);
    }
    public function savemanaged(Request $request, Order $order)
    {
    $request->validate([
        "customer_name" => "required",
        "customer_phone_number" => "required"
    ]);
    $order->update([
        "orderer_name" => $request->input("customer_name"),
        "orderer_phone_number" => $request->input("customer_phone_number"),
        "total_amount" => $request->input("price"),
        "order_date" => $request->input("order_date")
        // "message" => $request->input("message")
    ]);
    return redirect("/admin/dashboard/orders-management")->with("success", "Order updated successfully!");
    }
}
