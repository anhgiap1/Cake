<body>
    <div class="d-flex justify-content-between align-items-center">
        <h3>Recent Orders</h3>
        {{-- <form class="form-inline" method="GET" action="{{ route('order.searchOrders') }}">
            <input class="form-control mr-2" type="text" name="search_id" placeholder="Search by Order ID" required>
            <button class="btn btn-primary" type="submit">Search</button>
        </form> --}}
    </div>

    {{-- <form id="filter-form" method="GET" action="{{ route('order.index') }}">
        <div class="row my-3 px-2 d-flex">
            <div class="col-md-4 mb-3">
                <label for="status" class="form-label">Trạng thái</label>
                <select id="status" name="status" class="form-select">
                    @foreach($statuses as $key => $status)
                        <option value="{{ $key }}" @selected(request('status') == $key)>{{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3 d-flex align-items-end">
                <button type="submit" class="btn mx-1 my-0 px-5" style="background-color: #17c1e8;">Lọc</button>
                <a href="{{ route('order.index') }}" class="btn mx-1 my-0 btn-secondary px-4">Mặc định</a>
            </div>
        </div>
    </form> --}}

    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>Product</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>  
                        {{$order->users->name}}  
                </td>
                <td>
                    @foreach($order->products as $product)
                        {{ $product->name }}<br>
                    @endforeach
                </td>
                <td>{{ $order->order_date }}</td>
                <td>
                    <form action="{{ route('order.update',$order->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('put')
                        <select name="status">
                            @foreach($statuses as $key => $status)
                                <option value="{{ $key }}" @selected($order->status == $key)>{{ $status }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-dark">Lưu</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('order.show', $order->id) }}" class="btn btn-warning">Show</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{-- <pre>
            {{-- {{ var_dump($order->users) }} --}}
            {{-- kiểm tra xem order->users có nhận không --}}
       
        
    </table>
</body>