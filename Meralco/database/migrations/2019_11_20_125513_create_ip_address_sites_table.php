<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpAddressSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_address_sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->ipAddress('ip_address');
            $table->string('name');
            $table->string('address');
            $table->decimal('latitude', 8, 6);
            $table->decimal('longitude', 20, 6);
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
        Schema::dropIfExists('ip_address_sites');
    }
}
