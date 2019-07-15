<?php

use App\Console\weMigrations;

class CreateMB1MASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MB1MAS', function ($table) {

            $table->integer('B1COMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('B1B1NOIY')->nullable(false)->comment('Kategori Biaya IY');
            $table->char('B1B1NO',20)->nullable(false)->comment('Code');
            $table->char('B1NAME',100)->nullable(false)->comment('Name');
            
            $this->AutoCreateDefaultColumns('B1', $table);

            $table->primary('B1B1NOIY');
            $table->unique('B1B1NO');    
            $table->foreign('B1COMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MB1MAS'); 
    } 
} 
?> 

