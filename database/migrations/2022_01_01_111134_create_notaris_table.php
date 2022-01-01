<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaris', function (Blueprint $table) {
            $table->id();
            $table->string('NIN');
            $table->text('NamaNotaris');
            $table->text('Alamat');
            $table->string('Tlp');
            $table->string('Jabatan');
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
        Schema::dropIfExists('notaris');
    }
}
