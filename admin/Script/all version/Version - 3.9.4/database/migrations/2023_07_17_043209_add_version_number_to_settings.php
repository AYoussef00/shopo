<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVersionNumberToSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'settings';
        $columnName = 'current_version';

        if (!Schema::hasColumn($tableName, $columnName)) {
            
            Schema::table('settings', function (Blueprint $table) {
                $table->string('current_version')->default('3.9');
            });
        }

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        $tableName = 'settings';
        $columnName = 'current_version';

        if (Schema::hasColumn($tableName, $columnName)) {
            Schema::table('settings', function (Blueprint $table) {
                $table->dropColumn('current_version');
            });
        }
    }
}
