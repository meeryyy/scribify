<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()     {    
             Schema::table('histoires', function (Blueprint $table) {       
                      $table->foreign('langues_id')->references('id')->on('langues');    
                      $table->foreign('categories_id')->references('id')->on('categories');       
   
                      });    
                     }     
                     public function down()     {
                                 Schema::table('histoires', function (Blueprint $table) {        
                                         $table->dropForeign(['langues_id']);  
                                         $table->dropForeign(['categories_id']);       
     
                                          });    
                                         }


};
