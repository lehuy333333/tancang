<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image')->nullable();
            $table->string('client')->nullable();
            $table->string('client_website')->nullable();
            $table->date('finish_date')->nullable();
            $table->text('short_description');
            $table->text('description');
            $table->boolean('homepage_actived');
            $table->boolean('isEnglish')->nullable();

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
