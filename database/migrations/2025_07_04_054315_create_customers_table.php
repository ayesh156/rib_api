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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('contact_number', 45);
            $table->string('contact_number_2', 45)->nullable();
            $table->string('gender', 30)->nullable();
            $table->date('dob')->nullable();
            $table->string('nic', 50)->nullable();
            $table->unsignedBigInteger('cities_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->decimal('due_amount', 10, 2)->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('city_name')->nullable();
            $table->string('customer_id', 100)->nullable();
            $table->integer('branch_id')->nullable();
            $table->string('reason', 50)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
