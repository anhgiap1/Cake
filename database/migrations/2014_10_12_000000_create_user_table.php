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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            $table->string('name'); // UserName
            $table->string('email')->unique(); // UserEmail
            $table->string('phone'); // UserPhone
            $table->string('password'); // UserPassword
            $table->rememberToken(); // UserRememberToken
            $table->timestamp('registration_date')->useCurrent(); // Ngày đăng ký
            $table->foreignId('role_id')->constrained('roles'); // Khóa ngoại từ bảng roles
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
