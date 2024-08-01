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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("gender")->enum("male","female","others");
            $table->date("dob");
            $table->string("address");
            $table->BigInteger("mobile");
            $table->unsignedBigInteger("department");
            $table->unsignedBigInteger("designation");
            $table->string("gmail")->unique();
            $table->foreign('department')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('designation')->references('id')->on('designations')->onDelete('cascade');
            $table->date("doj");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
