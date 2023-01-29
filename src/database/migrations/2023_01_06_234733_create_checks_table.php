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
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('tutorial1')->default(false);
            $table->boolean('sqli_stage1')->default(false);
            $table->boolean('sqli_stage2')->default(false);
            $table->boolean('sqli_stage3')->default(false);
            $table->boolean('stage4')->default(false);
            $table->boolean('stage5')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checks');
    }
};
