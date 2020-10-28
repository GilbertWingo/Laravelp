<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorie_id');
                           $table->unsignedBigInteger('brands_id');
                             $table->string('name');
                             $table->string('size')->nullable();
                               $table->string('color')->nullable();
                                 $table->string('title');
                                   $table->text('description');
                                     $table->float('price',8,2);
                                       $table->float('discout_price')->nullable();
                                         $table->string('image');
                                           $table->unsignedBigInteger('quantity');
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
        Schema::dropIfExists('produits');
    }
}
