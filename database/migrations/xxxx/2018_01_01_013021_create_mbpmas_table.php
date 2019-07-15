<?php

use App\Console\weMigrations;

class CreateMBPMASTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MBPMAS', function ($table) {

            $table->integer('BPCOMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('BPBPNOIY')->nullable(false)->comment('Bisnis Partner IY');
            $table->char('BPBPNO',20)->nullable(false)->comment('Code');
            $table->char('BPNAME',100)->nullable(false)->comment('Name');
            $table->char('BPSUPF',1)->nullable(false)->comment('Supplier Flag');
            $table->char('BPCUSF',1)->nullable(false)->comment('Customer Flag');
            $table->char('BPMAIL',100)->nullable(false)->comment('EMail');
            $table->char('BPCPER',100)->nullable(false)->comment('Contac Person');
            
            $this->AutoCreateDefaultColumns('BP', $table);

            $table->primary('BPBPNOIY');
            $table->unique('BPBPNO');    
            $table->foreign('BPCOMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MBPMAS'); 
    } 
} 
?> 

