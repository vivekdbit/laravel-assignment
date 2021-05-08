<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Helpers\UtilHelper as Util;

class Order extends Model
{
    //
    public function order_total($id)
    {
    	return static::where('customer_id', $id)
            ->where('status_id', 3)
            ->count();
    }

    public function order_amount_total($id)
    {
    	$orders = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->select(DB::raw('sum(order_details.quantity*order_details.unit_price) AS total_amount'))
            ->where('orders.customer_id', $id)
            ->where('orders.status_id', 3)
            ->get();
        
        $jsonObj = json_decode($orders);
        return Util::fixFloat($jsonObj[0]->total_amount);
    }

}
