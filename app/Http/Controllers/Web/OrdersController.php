<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::with(['customer', 'restaurant', 'driver']);
        // Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        // Search by customer name
        if ($request->has('customer_name')) {
            $query->whereHas('customer', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->customer_name . '%');
            });
        }
        return view('orders.index', ['orders' => $query->get()]);
    }
    public function assign(string $orderId)
    {
        $order = Order::find($orderId);
        if (!$order) {
            abort(404, 'order not found');
        }
        $nearestDriver = Driver::available()
            ->nearest($order->restaurant->latitude, $order->restaurant->longitude)
            ->first();
        if (!$nearestDriver) {
            return back()->with('error', 'No available driver.');
        }
        //update to bussy
        $nearestDriver->update(['staus' => 0]);
        $order->update(['driver_id' => $nearestDriver->id]);
        $order->customer->increment('order_no');
        return back()->with('success', 'Driver assigned successfully.');
    }
}
