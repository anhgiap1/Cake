<style>
    table .image {
    height: 50px;
    display: block;
}
.image-cover img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.table >thead >tr > th,
.table >thead >tr > th,
.table >thead >tr > th,
.table >thead >tr > td,
.table >thead >tr > td,
.table >thead >tr > td {
    vertical-align:middle;
}
.uk-flex-space-between{
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
}
.uk-flex-middle {
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}
.uk-flex{
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}
.filter-wrapper{
    margin-bottom: 20px;
    
}
.filter-wrapper .perpage{
    display: inline-block;
    
}
.action .input-group input {
    margin-top: 5px;
}
.btn{
    margin-top: 5px;
    font-size: 13px;
}
.filter-wrapper .form-control {
    height: 32px;
    max-width:200px;

}
.mr10{
    margin-right: 10px;
}

</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Quản Lý Sản Phẩm</h2>
        <ol class="breadcrumb" style="magrin-bottom:10px">
            <li>
                <a href="http://linote.codechuanseo.com.vn/backend/dashboard/dashboard/index">DashBoard</a>
            </li>
            <li class="active"><strong>Quản Lý Sản Phẩm</strong></li>
        </ol>
    </div>
</div>
<div class="row">
       
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Danh Sách Sản Phẩm</h5>
                @include('dashboard.user.component.tools')
                
            </div>
            <div class="ibox-content">
                @include('admin.sanpham.component.filter')
                {{-- {{-- @include('dashboard.user.component.table') --}}
                @include('admin.sanpham.component.index')
                
            </div>
    </div>
</div>
</div>

