<form action="{{route('user.store')}}" method="post">
    @csrf

    <div>
        <label for="">Họ và tên</label>
        <input class="form-control" type="text" name="name" placeholder="Nhập họ tên ...">
    </div>
    <div>
        <label for="">Chọn ảnh</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">Địa chỉ</label>
        <input class="form-control"  type="text" name="address" placeholder="Nhập địa chỉ ...">
    </div>
    <div>
        <label for="">Số điện thoại</label>
        <input class="form-control"  type="number" name="phonenumber" placeholder="Nhập số điện thoại">
    </div>
    <div>
        <label for="">Email</label>
        <input class="form-control"  type="email" name="email" placeholder="Nhập email">
    </div>
    <div>
        <label for="">Mật khẩu</label>
        <input class="form-control"  type="password" name="password" placeholder="Nhập mật khẩu ...">
    </div>
    
    <button class="btn btn-danger">Thêm mới</button>
    
    

</form>