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
        //
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('reference')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('diagnostique')->nullable();
            $table->string('comment')->nullable();
            $table->string('observation')->nullable();
            $table->string('action')->nullable();
            $table->string('image')->nullable();
            $table->string('leave_code')->nullable();
            $table->foreignId('team_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('sites');
    }
};
