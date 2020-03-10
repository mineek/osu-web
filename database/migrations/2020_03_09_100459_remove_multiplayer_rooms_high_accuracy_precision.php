<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMultiplayerRoomsHighAccuracyPrecision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('multiplayer_rooms_high', function (Blueprint $table) {
            $table->float('accuracy')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // raw because change() won't add precision.
        DB::statement('ALTER TABLE multiplayer_rooms_high MODIFY COLUMN accuracy double(5, 4) NOT NULL DEFAULT 0');
    }
}