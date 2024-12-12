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
        Schema::create('Cauthu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_cau_thu');
            $table->integer('tuoi');
            $table->string('email');
            $table->string('vi_tri');
            $table->string('quoc_tich');
            $table->float('luong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cauthu');
    }
};
