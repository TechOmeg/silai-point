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
        Schema::create('fabrics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fabric_category_id')
                  ->constrained('fabric_category')
                  ->onDelete('cascade');

            $table->string('name');
            $table->string('code')->nullable();
            $table->string('image')->nullable();

            $table->string('color')->nullable();
            $table->string('fabric_type')->nullable();

            $table->decimal('price', 10, 2)->nullable();

            $table->enum('season', ['Summer', 'Winter', 'All Season'])->nullable();

            $table->text('description')->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabrics');
    }
};
