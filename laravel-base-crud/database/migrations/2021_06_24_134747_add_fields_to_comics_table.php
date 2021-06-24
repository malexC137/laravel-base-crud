<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->char('title', 100);
            $table->mediumText('description')->nullable();
            $table->string('thumb', 1000)->nullable();
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->char('series', 100)->nullable();
            $table->date('sale_date');
            $table->char('type', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('thumb');
            $table->dropColumn('price');
            $table->dropColumn('series');
            $table->dropColumn('sale_date');
            $table->dropColumn('type');
        });
    }
}
