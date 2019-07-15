<?php

use App\Console\weMigrations;

class CreateMI1MASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MI1MAS', function ($table) {

            $table->integer('M1COMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('M1M1NOIY')->nullable(false)->comment('Item Kategori IY');
            $table->char('M1M1NO',20)->nullable(false)->comment('Code');
            $table->char('M1NAME',100)->nullable(false)->comment('Name');
            
            $this->AutoCreateDefaultColumns('M1', $table);

            $table->primary('M1M1NOIY');
            $table->unique('M1M1NO');    
            $table->foreign('M1COMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MI1MAS'); 
    } 
} 
?> 

