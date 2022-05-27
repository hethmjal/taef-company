<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTifDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tif_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->double('number');
            $table->string('artitle');
            $table->string('entitle');
            $table->text('arbody');
            $table->text('enbody');
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
        Schema::dropIfExists('tif_descriptions');
    }
}