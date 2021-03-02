<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQr2ToTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tablets', function (Blueprint $table) {
            $table->string('qr1video2', 255)->nullable();
            $table->string('qr2video2', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tablets', function (Blueprint $table) {
            $table->string('qr1video2', 255);
            $table->string('qr2video2', 255)->nullable();
        });
    }
}
