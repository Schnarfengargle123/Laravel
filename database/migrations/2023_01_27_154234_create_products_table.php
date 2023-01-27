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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->enum('concentration', 
              [
                'Eau de Fraiche', 'Eau de Cologne', 
                'Eau de Toilette', 'Eau de Parfum', 'Parfum'
              ]);
            $table->enum('gender', ['Men', 'Women', 'Unisex']);
            $table->enum('size', 
              [
                '30ml', '40ml', '50ml', '59ml', '60ml', 
                '75ml', '80ml', '90ml', '100ml', '118ml', 
                '125ml', '150ml', '200ml', '237ml'
              ]);
            $table->integer('availability');
            $table->float('price');          
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
        Schema::dropIfExists('products');
    }
};
