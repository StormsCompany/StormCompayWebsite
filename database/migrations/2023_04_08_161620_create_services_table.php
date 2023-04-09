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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("serviceable_id");
            $table->string("serviceable_type");
            $table->string("user_description");
            $table->string("company_size")->nullable();
            $table->string("email");
            $table->string("phone_number");
            $table->longText("requirement");
            $table->longText("description");
            $table->integer("status")->default(0);
            $table->string("admin_message")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
