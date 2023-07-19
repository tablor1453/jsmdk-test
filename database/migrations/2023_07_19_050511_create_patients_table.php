<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id_patient')->primary();
            $table->string('name', 50);
            $table->string('phone', 16);
            $table->string('address', 80);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->foreignUuid('id_kelurahan')->nullable()->references('id_kelurahan')->on('administrations')->nullOnDelete();
            $table->date('birth_date');
            $table->enum('gender', [1, 0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
