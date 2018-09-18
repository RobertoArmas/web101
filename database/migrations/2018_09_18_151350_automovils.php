<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Automovils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Automovils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->integer('precio');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Automovils', function (Blueprint $table) {
            $table->dropColumn('marca');
        });
    }
}
