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
        Schema::create('cart', function (Blueprint $table) {
            $table->id(); // CartID
            $table->foreignId('user_id')->constrained('users'); // UserID (Khách hàng)
            $table->foreignId('product_id')->constrained('products'); // ProductID
            $table->foreignId('variant_id')->nullable()->constrained('variants'); // VariantID
            $table->integer('quantity'); // Số lượng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
