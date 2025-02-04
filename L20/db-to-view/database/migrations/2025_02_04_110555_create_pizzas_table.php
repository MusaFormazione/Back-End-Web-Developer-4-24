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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();//Crea una colonna chiamata ID La imposta come chiave primaria  AUTO_INCREMENT
            $table->string('gusto');//Crea una colonna chiamata gusto di tipo VARCHAR(255)
            $table->decimal('prezzo');//Crea una colonna chiamata prezzo di tipo decimal.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
