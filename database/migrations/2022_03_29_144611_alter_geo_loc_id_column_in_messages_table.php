<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterGeoLocIdColumnInMessagesTable extends Migration
{

    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('geo_loc_id')
                ->references('id')
                ->on('geo_locations');
        });
    }

    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropConstrainedForeignId('geo_loc_id');
        });
    }
}
