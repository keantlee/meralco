<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorDatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensor_datalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ip_address_sites_id');
            $table->unsignedBigInteger('temperature');
            $table->unsignedBigInteger('light');
            $table->unsignedBigInteger('battery');
            $table->unsignedBigInteger('EC');
            $table->unsignedBigInteger('PH');
            $table->unsignedBigInteger('water_level');
            $table->unsignedBigInteger("status_id");
            $table->timestamps();

            $table->foreign("ip_address_sites_id")
            ->references("id")
            ->on("ip_address_sites")
            ->onDelete("restrict")
            ->onUpdate("cascade");
  
            $table->foreign("status_id")
            ->references("id")
            ->on("sensor_statuses")
            ->onDelete("restrict")
            ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensor_datalogs');
    }
}
