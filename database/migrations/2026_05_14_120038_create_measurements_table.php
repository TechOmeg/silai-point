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
       Schema::create('measurements', function (Blueprint $table) {

    $table->id();

    $table->unsignedBigInteger('order_id');

    $table->string('seena');
    $table->string('teera');
    $table->string('bazu_length');
    $table->string('kameez_length');
    $table->string('collar');
    $table->string('armhole');
    $table->string('shalwar_length');
    $table->string('pancha');

    $table->string('silai_type');
    $table->integer('silai_price');

    $table->string('reference_image')->nullable();

    $table->text('instructions')->nullable();

    $table->timestamps();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
