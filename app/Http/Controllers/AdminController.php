<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class AdminController extends Controller {
public function dashboard() {
return view('admin.dashboard');
}

public function viewOrders() {
$orders = Order::with('items')->get();
return view('admin.orders.index', compact('orders'));
}

public function viewOrderDetails($id) {
$order = Order::with('items')->findOrFail($id);
return view('admin.orders.show', compact('order'));
}

public function deleteOrder($id) {
$order = Order::findOrFail($id);
$order->delete();
return redirect()->route('admin.orders.index')->with('success', 'Bestelling succesvol verwijderd.');
}
}
