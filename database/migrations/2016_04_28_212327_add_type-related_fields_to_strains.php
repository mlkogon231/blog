<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeRelatedFieldsToStrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('strains', function (Blueprint $table) {
            $table->string('type')->nullable();
	    $table->integer('THC')->nullable();
	    $table->integer('CBD')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('strains', function (Blueprint $table) {
            $table->dropColumn('type');
	    $table->dropColumn('THC');
	    $table->dropColumn('CBD');
        });
    }
}
