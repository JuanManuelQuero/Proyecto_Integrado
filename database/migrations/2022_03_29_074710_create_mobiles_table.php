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
        Schema::create('mobiles', function (Blueprint $table) {
            $table->id();
            $table->enum('marca', ['Apple', 'Samsung', 'Xiaomi', 'Huawei']);
            $table->string('modelo')->unique();
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->enum('color', ['Azul', 'Negro', 'Blanco', 'Plata', 'Oro', 'Rojo', 'Púrpura']);
            $table->enum('almacenamiento', ['64GB', '128GB', '256GB', '512GB', '1TB']);
            $table->text('pantalla');
            $table->text('chip');
            $table->string('image');
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
        Schema::dropIfExists('mobiles');
    }
};
