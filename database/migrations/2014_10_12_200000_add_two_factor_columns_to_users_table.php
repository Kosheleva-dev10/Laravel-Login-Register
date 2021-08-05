<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwoFactorColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address')
                    ->after('password')
                    ->nullable();

            $table->text('address2')
                    ->after('address')
                    ->nullable();

            $table->text('city')
                    ->after('address2')
                    ->nullable();

            $table->text('state')
                    ->after('city')
                    ->nullable();

            $table->text('zip')
                    ->after('state')
                    ->nullable();
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address', 'address2', 'city', 'state', 'zip');
        });
    }
}
