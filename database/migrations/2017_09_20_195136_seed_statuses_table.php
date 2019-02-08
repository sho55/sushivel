<?php

use App\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Status::create([
            'name' => '注文受付済',
            'percent' => 10,
        ]);

        Status::create([
            'name' => '下準備',
            'percent' => 30,
        ]);

        Status::create([
            'name' => '握り中',
            'percent' => 50,
        ]);

        Status::create([
            'name' => '盛り付け',
            'percent' => 70,
        ]);

        Status::create([
            'name' => '出前済',
            'percent' => 100,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
