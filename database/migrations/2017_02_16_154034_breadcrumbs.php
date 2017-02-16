<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Breadcrumbs extends Migration
{

    public function up()
    {
        Schema::table('pages', function ($table) {
            $table->string('breadcrumb_name')->after('parent')->nullable();
        });
    }


    public function down()
    {
        //
    }
}
