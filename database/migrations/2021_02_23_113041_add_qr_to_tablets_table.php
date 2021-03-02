<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQrToTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tablets', function (Blueprint $table) {
            $table->string('qr1', 255);
            $table->string('qr2', 255)->nullable();
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
            $table->dropColumn('qr1');
            $table->dropColumn('qr2');
        });
    }
}
