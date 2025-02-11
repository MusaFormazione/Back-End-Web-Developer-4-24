<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class RelationshipController extends Controller
{
    /**
     *  endpoint per la relazione one-to-one (User -> Profile)
     */

    public function userProfile(int $id){
        $user = User::with('profile')->find($id);
        return response()->json([
            'user' => $user,
            'profile' => $user->profile
        ]);
    }

    /**
     * Endpoint per relazione One to many (User -> Order)
     */

     public function userOrders($id){
        $user = User::with('orders')->find($id);
        return response()->json([
            "user" => $user,
            "orders" => $user->orders
        ]);
     }

     /**
      * Endpoint per la relazione many to many.
      */
      public function orderProducts($id){
        $order = Order::with('products')->find($id);
        return response()->json([
            "order" => $order,
            "products" => $order->products,
        ]);
      }



}
