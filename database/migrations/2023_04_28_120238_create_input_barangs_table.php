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
        Schema::create('input_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('seri');
            $table->unique('seri');
            $table->string('nama');
            $table->date('tgl_beli');
            $table->string('satuan');
            $table->string('kategori');
            $table->integer('jml_baik');
            $table->integer('jml_rusak');
            $table->string('ruangan');
            $table->string('imgs')->nullable();
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
        
    }
};
