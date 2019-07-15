<?php

use App\Console\weMigrations;

class CreateMITMASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MITMAS', function ($table) {

            $table->integer('MMCOMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('MMITNOIY')->nullable(false)->comment('Item IY');
            $table->char('MMITNO',20)->nullable(false)->comment('Item Code');
            $table->char('MMNAME',100)->nullable(false)->comment('Item Name');
            $table->char('MMDESC',200)->nullable(false)->comment('Item Description');
            $table->integer('MMM2NOIY')->nullable(false)->comment('Item Sub Kategori IY');
            $table->integer('MMUNMSIY')->nullable(false)->comment('Item Satuan IY');
            $table->decimal('MMHARG')->nullable(false)->comment('Default Price');
            $table->decimal('MMQTYS')->nullable(false)->comment('Stock Qty');
            
            $this->AutoCreateDefaultColumns('MM', $table);

            $table->primary('MMITNOIY');
            $table->unique('MMITNO');    
            $table->foreign('MMCOMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
            $table->foreign('MMM2NOIY')->references('M2M2NOIY')->on('MI2MAS'); 
            $table->foreign('MMUNMSIY')->references('UMUNMSIY')->on('UNTMAS'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MITMAS'); 
    } 
} 
?> 

