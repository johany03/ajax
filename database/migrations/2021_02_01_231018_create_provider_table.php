<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('names', 100)->comment('Nombres del provedor')->nullable();
            $table->string('surnames', 150)->comment('Apellidos del provedor');
            $table->string('phone',20)->unique()->comment('Telefono de provedor');
            $table->date('date_birth')->comment('Fecha de Nacimiento');
            $table->binary('photo')->comment('Imagen del provedor');
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
        Schema::dropIfExists('provider');
    }
}
