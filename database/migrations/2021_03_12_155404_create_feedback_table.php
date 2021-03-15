<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_platform_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->text('comment');
            $table->foreign('social_platform_id')->references('id')->on('social_platforms');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->unique(['social_platform_id', 'brand_id']);
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
        Schema::dropIfExists('feedback');
    }
}
