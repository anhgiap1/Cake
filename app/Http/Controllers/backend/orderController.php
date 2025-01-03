<?php

namespace App\Http\Controllers\backend;

use App\Models\orders;
use App\Models\products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\order_items;

class orderController extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        $template = 'dashboard.orders.index';
        $statuses = [
            'Chờ xử lý' => 'Chờ xử lý',
            'Đang giao hàng' => 'Đang giao hàng',
            'Đã nhận' => 'Đã nhận',
            'Đã hủy' => 'Đã hủy',
        ];

        $query = orders::query();

        // Tìm kiếm theo ID đơn hàng
        // if ($request->has('search_id')) {
        //     $query->where('id', $request->search_id);
        // }

        // // Lọc theo trạng thái
        // if ($request->has('status') && $request->status !== '') {
        //     $query->where('status', $request->status);
        // }

        $orders = $query->get();
        return view('dashboard.layout',compact('template','statuses','orders'));
    }
    public function update(Request $request, $id)
    {
        orders::query()->where('id', $id)->update([ 'status' => $request -> status]);

        // Cập nhật chỉ các trường cần thiết

        // Chuyển hướng về danh sách đơn hàng với thông báo thành công
        return back();
        
    }
    public function show($id)
    {
        $order = order_items::with(['orders.users', 'products', 'variants'])->findOrFail($id);
    
        // Debug dữ liệu
        // dd($order->orders->users);
        $template = 'dashboard.orders.component.show';
        return view('dashboard.orders.component.show', compact('order','template'));
    }
}
