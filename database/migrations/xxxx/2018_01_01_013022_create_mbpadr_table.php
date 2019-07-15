<?php

use App\Console\weMigrations;

class CreateMBPADRTable extends weMigrations
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MBPADR', function ($table) {

            $table->integer('BACOMPIY')->nullable(false)->comment('System Company IY');
            $table->integer('BANOMRIY')->nullable(false)->comment('Nomor IY');
            $table->integer('BABPNOIY')->nullable(false)->comment('Bisnis Partner IY');
            $table->char('BACODE',20)->nullable(false)->comment('Code');
            $table->longText('BAADDR')->nullable(false)->comment('Address');
            $table->char('BACITY',50)->nullable(false)->comment('City');
            $table->char('BATELP',50)->nullable(false)->comment('Telephone');
            $table->char('BACPER',50)->nullable(false)->comment('Contact Person');
            
            $this->AutoCreateDefaultColumns('BA', $table);

            $table->primary('BANOMRIY');
            $table->unique(['BABPNOIY','BACODE']);    
            $table->foreign('BACOMPIY')->references('SCCOMPIY')->on('SYSCOM'); 
            $table->foreign('BABPNOIY')->references('BPBPNOIY')->on('MBPMAS');
           
        }); 

    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('MBPADR'); 
    } 
} 
?> 

