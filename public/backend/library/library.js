(function($){
    // Đảm bảo rằng mã JavaScript không xung đột với các thư viện khác và chỉ sử dụng jQuery.
    "use strict";
    
    // Tạo một đối tượng HT để chứa các phương thức, giúp tổ chức mã dễ quản lý hơn.
    var HT = {};
    
    // Lấy đối tượng jQuery của document để thao tác với DOM.
    var document = $(document);

    // Định nghĩa một phương thức trong đối tượng HT có tên là switchery.
    HT.switchery = () => {
        // Tìm tất cả các phần tử có class 'js-switcher'.
        $('.js-switch').each(function() {
            // Dành cho mỗi phần tử tìm thấy, tạo một công tắc Switchery mới.
            // Switchery sẽ chuyển các checkbox thành các công tắc với màu sắc được chỉ định.
            var switchery = new Switchery(this, { color: '#1AB394' });
        });
    };

    // Khi tài liệu (DOM) đã sẵn sàng, thực hiện gọi phương thức HT.switchery để kích hoạt công tắc cho các phần tử.
    document.ready(function(){
        HT.switchery();
    });
})(jQuery);