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
      
        <tr>
          <td>{{$order->products->name}}</td>
          <td>{{$order->products->image}}</td>
          <td>{{$order->variants->size}}</td>
          {{-- {{dd($order->variants)}} --}}
          <td>{{$order->quantity }}</td>
          <td>{{$order->variants->price}}</td> 
           <td>{{number_format($order->quantity * $order->variants->price )}}</td>
          </tr>
     

    </tbody>
</table>
<style>
    .container{
        border: 1px solid red;
        padding-bottom: 15px;
    }
</style>
 <div class="container">
    <h4 class="text-uppercase text-center modal-title p-3" id="exampleModalLabel">Thông tin khách hàng</h4>
    <table class="table align-items-center justify-content-between mb-0">

      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Họ và tên</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{$order->orders->users->name}}</p>
        </td>
      </tr>
       <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{$order->orders->users->email}}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Số điện thoại</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{$order->orders->users->phonenumber}}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Địa chỉ</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{$order->orders->users->address}}</p>
        </td>
      </tr> 
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->orders->status }}</p>
        </td>
      </tr>
      <tr>
        <th class="text-secondary text-xxs font-weight-bolder opacity-7">Thời gian</th>
        <td class="p-2">
          <p class="text-sm font-weight-bold mb-0 text-end">{{ $order->orders->order_date }}</p>
        </td>
      </tr>
    </table>
  </div>