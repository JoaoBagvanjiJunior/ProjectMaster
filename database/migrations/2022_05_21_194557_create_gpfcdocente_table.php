<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        if (!Schema::hasTable('gpfcdocente')) {
            Schema::create('gpfcdocente', function (Blueprint $table) {
                $table->id();
                $table->string('iniciais');
                $table->string('designac');
                $table->date('data');
                $table->string('gender');
                $table->string('image');
                $table->timestamps();
            });
        }
    }

    
    public function down()
    {
        Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('docente');
    }
};
