<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->bigInteger('parent_id')->unsigned()->default(0)->nullable();
            $table->foreign('parent_id')->references('id')->on('categories');

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //<table_name>_<foreign_table_name>_<column_name>_foreign

            $table->dropForeign('categories_discrepancies_pick_parent_id_foreign');
            $table->dropColumn('parent_id');

        });
    }
}
