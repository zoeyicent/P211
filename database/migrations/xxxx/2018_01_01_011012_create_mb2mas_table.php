<?php

use App\Console\weMigrations;

class CreateMB2MASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MB2MAS', function ($table) {

            $table->integer('B2COMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('B2B2NOIY')->nullable(false)->comment('Sub Kategori Biaya IY');
            $table->char('B2B2NO',20)->nullable(false)->comment('Code');
            $table->char('B2NAME',100)->nullable(false)->comment('Name');
            $table->integer('B2B1NOIY')->nullable(false)->comment('Kategori Biaya IY');
            
            $this->AutoCreateDefaultColumns('B2', $table);

            $table->primary('B2B2NOIY');
            $table->unique('B2B2NO');    
            $table->foreign('B2COMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
            $table->foreign('B2B1NOIY')->references('B1B1NOIY')->on('MB1MAS'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MB2MAS'); 
    } 
} 
?> 

