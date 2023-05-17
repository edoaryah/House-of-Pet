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
            $table->id()->startingValue(12100);
            //TAMBAHAN SERVICE_ID & NAMAHEWAN
            $table->foreignId('user_id');
            $table->foreignId('service_id');
            $table->string('namahewan');
            // $table->integer('qty');
            $table->bigInteger('total_price');
            $table->date('tanggal_Pesan')->nullable();
            $table->enum('status', ['Paid', 'Unpaid']);
            $table->timestamps();
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
