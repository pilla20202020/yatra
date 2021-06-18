<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->longText('description')->nullable();
            $table->integer('rank')->nullable();
            $table->string('trip_duration')->nullable();
            $table->string('max_altitude')->nullable();
            $table->string('departure')->nullable();
            $table->string('departure_time')->nullable();
            $table->string('price')->nullable();
            $table->string('min_group_size')->nullable();
            $table->string('max_group_size')->nullable();
            $table->string('cost_excludes')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('cost_includes')->nullable();
            $table->longText('location_map')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('packages');
    }
}
