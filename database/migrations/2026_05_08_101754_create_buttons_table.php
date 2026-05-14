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
         Schema::create('buttons', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('button_category_id');

            $table->string('code')->nullable();

            $table->string('color')->nullable();

            $table->string('size')->nullable();

            $table->integer('stock')->default(0);

            $table->decimal('price', 10, 2)->default(0);

            $table->string('material')->nullable();

            $table->string('image')->nullable();

            $table->text('description')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->timestamps();

            // RELATION
            $table->foreign('button_category_id')
                  ->references('id')
                  ->on('button_categories')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buttons');
    }
};
