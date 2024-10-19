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
        Schema::create('categories_sub_categories', function (Blueprint $table) {
            $table->foreignId("categories_id")->constrained("categories")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("sub_categories_id")->constrained("sub_categories")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->string('bgimage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_sub_categories');
    }
};
