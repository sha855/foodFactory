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
        Schema::create('consumer_allergen_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consumer_info_id')->constrained('consumer_infos')->onDelete('cascade');
            $table->string('key');
            $table->tinyInteger('value')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumer_allergen_info');
    }
};