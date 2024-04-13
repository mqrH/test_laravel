<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->index('customer_id');
            $table->string('data');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_data');
    }
};
