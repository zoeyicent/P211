<?php

use App\Console\weMigrations;

class CreateMI2MASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MI2MAS', function ($table) {

            $table->integer('M2COMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('M2M2NOIY')->nullable(false)->comment('Item Sub Kategori IY');
            $table->char('M2M2NO',20)->nullable(false)->comment('Code');
            $table->char('M2NAME',100)->nullable(false)->comment('Name');
            $table->integer('M2M1NOIY')->nullable(false)->comment('Item Kategori IY');
            
            $this->AutoCreateDefaultColumns('M2', $table);

            $table->primary('M2M2NOIY');
            $table->unique('M2M2NO');    
            $table->foreign('M2COMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
            $table->foreign('M2M1NOIY')->references('M1M1NOIY')->on('MI1MAS'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MI2MAS'); 
    } 
} 
?> 

