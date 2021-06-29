<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100);
            $table->mediumText('description')->nullable();
            $table->string('thumb', 1000)->nullable();
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->char('series', 100)->nullable();
            $table->date('sale_date');
            $table->char('type', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
