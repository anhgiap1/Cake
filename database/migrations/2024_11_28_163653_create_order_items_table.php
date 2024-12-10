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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id(); // OrderItemID
            $table->foreignId('order_id')->constrained('orders'); // OrderID
            $table->foreignId('product_id')->constrained('products'); // ProductID
            $table->foreignId('variant_id')->nullable()->constrained('variants'); // VariantID (Nếu có biến thể)
            $table->string('product_name'); // Tên sản phẩm
            $table->decimal('price', 10, 2); // Giá của sản phẩm
            $table->integer('quantity'); // Số lượng
            $table->decimal('total_price', 10, 2); // Tổng giá trị (Giá * Số lượng)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
