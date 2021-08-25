<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->integer('cat_id');
            $table->string('pro_nombre', 50);
            $table->float('pro_precio', 6, 2);
            $table->text('pro_foto')->default('/storage/foto_productos/default_foto_producto.jpg');
            $table->foreign('cat_id')->references('cat_id')->on('categoria');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('producto');
    }
}
