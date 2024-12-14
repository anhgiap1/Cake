
@extends('layout.app')


@section('content')
<h5 class="text-uppercase text-center modal-title p-3">Đơn Hàng</h5>
<table border="1" class="table">
    <thead>
        <tr>
            <th>Sản Phẩm</th>
            <th>Hình ảnh</th>
            <th>Size</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            <th>Tổng Tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->products as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>
                <img width="100px" src="{{asset('storage/'.$item->image)}}" alt="">
                
            </td>
            <td>{{$item->size}}</td>
            <td>{{$item->quantily}}</td>
            <td>{{$item->amount}}</td>
            <td>{{number_format($item->amount*$item->quantily, 2)}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>
    .container{
        border: 1px solid red;
        padding-bottom: 15px;
    }
</style>
<div class="container">
    <h6 class="text-uppercase text-center modal-title p-3" id="exampleModalLabel">Thông tin khách hàng</h6>
    <table class="table align-items-center justify-content-between mb-0">

      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Họ và tên</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{$order->fullname}}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->email }}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Số điện thoại</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->telephone }}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Địa chỉ</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->address }}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->status }}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Thời gian</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->order_time }}</p>
        </td>
      </tr>
    </table>
  </div>
@endsection