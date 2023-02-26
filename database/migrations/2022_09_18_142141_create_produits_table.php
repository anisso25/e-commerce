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
            $table->uuid('uuid');

            $table->string('product_name');
            $table->string('product_title');
            $table->string('prix');
            $table->string('image_p');
            $table->string('discription_p');
            $table->string('status');
            $table->string('fiche_t');
            $table->integer('product_sp');
            // la suprission d'une marque suprime tous
            // les categories ansi que les produits de cette marque
            $table->unsignedBigInteger('category_id')
                ->onDelete('cascade') // cascade
                ->onUpdate('no action');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->unsignedBigInteger('marque_id')
                ->onDelete('cascade')
                ->onUpdate('no action');
            $table->foreign('marque_id')
                ->references('id')
                ->on('marques')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->timestamps();
            $table->softDeletes();
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
