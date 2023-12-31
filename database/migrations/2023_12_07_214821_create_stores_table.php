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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('owner',100);
            $table->string('location',100);
            $table->boolean("is_active")->default(true);
            $table->text('image',500);
            $table->text('description',500);
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->enum("roles",["admin"])->default("admin");
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
