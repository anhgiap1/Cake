<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // OrderID
            $table->foreignId('user_id')->constrained('users'); // UserID
            $table->timestamp('order_date')->useCurrent(); // Ngày đặt hàng
            $table->decimal('total_amount', 10, 2); // Tổng giá trị đơn hàng
            $table->string('status'); // Trạng thái đơn hàng (Đang xử lý, Đã giao, Hủy, v.v.)
            $table->string('payment_method'); // Phương thức thanh toán
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
