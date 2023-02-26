<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');

            $table->string('category_name');
            $table->string('discription_c');
            $table->string('status');
            $table->string('image_c');
            // la suprission d'une categories suprime tous
            // les categories ansi que les produits de cette marque
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
        Schema::dropIfExists('categories');
    }
}
