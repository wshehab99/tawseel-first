<?php

use App\Models\Store;
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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('reservation_status', ['Open', 'Closed']);
            $table->enum('reservation_method', ['Online', 'Phone']);
            $table->enum('requires_products', ['Yes', 'No']);
            $table->enum('activity_status', ['Active', 'Inactive']);
            $table->enum('store_payment_method', ['Credit', 'Cash']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
