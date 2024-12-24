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
        // Truy vấn dữ liệu từ bảng order_items với các mối quan hệ liên quan
        $order = order_items::with('users','orders', 'products', 'variants')->findOrFail($id);
        // Truyền dữ liệu vào view
        $template = 'dashboard.order.component.show';
            dd($order->users);
        return view('dashboard.orders.component.show', compact('order','template'));
    }
}
