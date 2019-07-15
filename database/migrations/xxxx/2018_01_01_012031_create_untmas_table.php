<?php

use App\Console\weMigrations;

class CreateUNTMASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UNTMAS', function ($table) {

            $table->integer('UMCOMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('UMUNMSIY')->nullable(false)->comment('Item Satuan IY');
            $table->char('UMUNMS',20)->nullable(false)->comment('Kode Satuan');
            $table->char('UMNAME',100)->nullable(false)->comment('Nama Satuan');
            
            $this->AutoCreateDefaultColumns('MM', $table);

            $table->primary('UMUNMSIY');
            $table->unique('UMUNMS');    
            $table->foreign('UMCOMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('UNTMAS'); 
    } 
} 
?> 

