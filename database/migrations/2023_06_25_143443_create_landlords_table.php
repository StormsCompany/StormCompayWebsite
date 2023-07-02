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
        Schema::create('landlords', function (Blueprint $table) {
                $table->id();
                $table->string('driver')->default('mysql');
                $table->string('host')->default('localhost');
                $table->string('port')->default('3306');
                $table->string('database')->default('storms');
                $table->string('username')->default('root');
                $table->string('password')->default('');
                $table->string('charset')->default('utf8mb4');
                $table->string('collation')->default('utf8mb4_unicode_ci');
                $table->string('prefix')->default('');
                $table->string('strict')->default(false);
                $table->string('engine')->default(null);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlords');
    }
};
