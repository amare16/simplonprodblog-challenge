<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Running the Migration use up() function

        Schema::table('posts', function ($table) {
            $table->string('slug')->uninque()->after('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Undo the Migration use down() function

        Schema::table('posts', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
