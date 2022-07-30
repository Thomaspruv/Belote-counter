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
        Schema::table('feedback', function (Blueprint $table) {
            $table->string('champion')->nullable();
            $table->string('sum1')->nullable();
            $table->string('sum2')->nullable();
            $table->string('role')->nullable();
            $table->string('kills')->nullable();
            $table->string('deaths')->nullable();
            $table->string('assists')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback', function (Blueprint $table) {
            $table->dropColumn('champion');
            $table->dropColumn('sum1');
            $table->dropColumn('sum2');
            $table->dropColumn('role');
            $table->dropColumn('kills');
            $table->dropColumn('deaths');
            $table->dropColumn('assists');
        });
    }
};
