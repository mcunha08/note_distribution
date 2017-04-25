<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
        });
        App\Role::create([
                'role' => 'InactiveStudent'
            ]);
        App\Role::create([
            'role' => 'Student'
        ]);
        App\Role::create([
            'role' => 'Noter'
        ]);
        App\Role::create([
            'role' => 'Administrator'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
