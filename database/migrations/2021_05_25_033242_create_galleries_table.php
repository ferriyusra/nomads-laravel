<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('travel_packages_id');
            $table->text('image');
            $table->softDeletes();

            $table->timestamps();
        });

        // Schema::rename('galleries_table', 'galleries');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries_table');

        // Schema::rename('galleries', 'galleries_table');
    }
}
