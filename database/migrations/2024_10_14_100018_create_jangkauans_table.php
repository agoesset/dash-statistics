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
        Schema::create('jangkauans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_jangkauan');
            $table->integer('jakpus');
            $table->integer('jakbar');
            $table->integer('jaktim');
            $table->integer('jaksel');
            $table->integer('jakut');
            $table->integer('kepser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jangkauans');
    }
};
