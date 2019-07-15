<?php

use Illuminate\Database\Seeder;
use App\Models\SYSCOM;
use App\Models\SYSTBL;
use App\Models\SYSDAT;
use App\Models\SYSNOR;

class SYSTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


/*--------------------------------------------------------------*/
        $defaultFieldSYSCOM = [];
        $defaultFieldSYSCOM = array( "SCRGID" => 'Default',
                                     "SCRGDT" => Date("Y-m-d H:i:s"),
                                     "SCCHID" => 'Default',
                                     "SCCHDT" => Date("Y-m-d H:i:s"),
                                     "SCCHNO" => '0',
                                     "SCDPFG" => '1',
                                     "SCDLFG" => '0',
                                     "SCCSID" => 'Default',
                                     "SCCSDT" => Date("Y-m-d H:i:s"),
                                     "SCSRCE" => 'FirstSetup',
                                  );

        $SYSCOM = new SYSCOM();
        $SYSCOM->SCCOMPIY = '1';
        $SYSCOM->SCCOMP = 'DEMO';
        $SYSCOM->SCNAME = 'DEMO NAME';
        $SYSCOM->SCDESC = 'DEMO DESCRIPTION';
        foreach ($defaultFieldSYSCOM as $K => $D) { $SYSCOM[$K] = $D; }
        $SYSCOM->save();

        $SYSCOM = new SYSCOM();
        $SYSCOM->SCCOMPIY = '2';
        $SYSCOM->SCCOMP = 'WEXITS';
        $SYSCOM->SCNAME = 'WEXITS NAME';
        $SYSCOM->SCDESC = 'WEXITS DESCRIPTION';
        foreach ($defaultFieldSYSCOM as $K => $D) { $SYSCOM[$K] = $D; }
        $SYSCOM->save();
/*--------------------------------------------------------------*/


        $iTBL = 1;
        $iDAT = 1;

        $defaultFieldSYSTBL = [];
        $defaultFieldSYSTBL = array( "STRGID" => 'Default',
                                     "STRGDT" => Date("Y-m-d H:i:s"),
                                     "STCHID" => 'Default',
                                     "STCHDT" => Date("Y-m-d H:i:s"),
                                     "STCHNO" => '0',
                                     "STDPFG" => '1',
                                     "STDLFG" => '0',
                                     "STCSID" => 'Default',
                                     "STCSDT" => Date("Y-m-d H:i:s"),
                                     "STSRCE" => 'FirstSetup',
                                  );

        $defaultFieldSYSDAT = [];
        $defaultFieldSYSDAT = array( "SDRGID" => 'Default',
                                     "SDRGDT" => Date("Y-m-d H:i:s"),
                                     "SDCHID" => 'Default',
                                     "SDCHDT" => Date("Y-m-d H:i:s"),
                                     "SDCHNO" => '0',
                                     "SDDPFG" => '1',
                                     "SDDLFG" => '0',
                                     "SDCSID" => 'Default',
                                     "SDCSDT" => Date("Y-m-d H:i:s"),
                                     "SDSRCE" => 'FirstSetup',
                                  );


/*--------------------------------------------------------------*/
        $SYSTBL = new SYSTBL();
        $SYSTBL->STTABLIY = $iTBL++;
        $SYSTBL->STTABL = 'YN';
        $SYSTBL->STNAME = 'YESNO';
        foreach ($defaultFieldSYSTBL as $K => $D) { $SYSTBL[$K] = $D; }
        $SYSTBL->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = '1';
        $SYSDAT->SDNAME = 'YES';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = '0';
        $SYSDAT->SDNAME = 'NO';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();
/*--------------------------------------------------------------*/

        $SYSTBL = new SYSTBL();
        $SYSTBL->STTABLIY = $iTBL++;
        $SYSTBL->STTABL = 'DSPLY';
        $SYSTBL->STNAME = 'DISPLAY';
        foreach ($defaultFieldSYSTBL as $K => $D) { $SYSTBL[$K] = $D; }
        $SYSTBL->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = '0';
        $SYSDAT->SDNAME = 'Not Display';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = '1';
        $SYSDAT->SDNAME = 'Display';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();
/*--------------------------------------------------------------*/

        $SYSTBL = new SYSTBL();
        $SYSTBL->STTABLIY = $iTBL++;
        $SYSTBL->STTABL = 'CC';
        $SYSTBL->STNAME = 'CASH CREDIT';
        foreach ($defaultFieldSYSTBL as $K => $D) { $SYSTBL[$K] = $D; }
        $SYSTBL->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'T';
        $SYSDAT->SDNAME = 'TUNAI';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'K';
        $SYSDAT->SDNAME = 'KREDIT';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();
/*--------------------------------------------------------------*/

        $SYSTBL = new SYSTBL();
        $SYSTBL->STTABLIY = $iTBL++;
        $SYSTBL->STTABL = 'MODE';
        $SYSTBL->STNAME = 'Mode Access';
        foreach ($defaultFieldSYSTBL as $K => $D) { $SYSTBL[$K] = $D; }
        $SYSTBL->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'V';
        $SYSDAT->SDNAME = 'View';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'A';
        $SYSDAT->SDNAME = 'Add';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'E';
        $SYSDAT->SDNAME = 'Edit';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'D';
        $SYSDAT->SDNAME = 'Delete';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'L';
        $SYSDAT->SDNAME = 'View List';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'X';
        $SYSDAT->SDNAME = 'Export To Excel';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();

        $SYSDAT = new SYSDAT();
        $SYSDAT->SDTABLIY = ($iTBL-1);
        $SYSDAT->SDDATAIY = $iDAT++;
        $SYSDAT->SDDATA = 'R';
        $SYSDAT->SDNAME = 'Confirm / Approved';
        foreach ($defaultFieldSYSDAT as $K => $D) { $SYSDAT[$K] = $D; }
        $SYSDAT->save();
/*--------------------------------------------------------------*/

        $RunNoDSC = new SYSNOR();
        $RunNoDSC->SNTABL = 'SYSTBL';
        $RunNoDSC->SNNOUR = $iTBL;
        $RunNoDSC->SNRGID = 'Default';
        $RunNoDSC->SNRGDT = Date("Y-m-d H:i:s");
        $RunNoDSC->SNCHID = 'Default';
        $RunNoDSC->SNCHDT = Date("Y-m-d H:i:s");
        $RunNoDSC->SNCHNO = '0';
        $RunNoDSC->SNDPFG = '1';
        $RunNoDSC->SNDLFG = '0';
        $RunNoDSC->SNCSID = 'Default';
        $RunNoDSC->SNCSDT = Date("Y-m-d H:i:s");
        $RunNoDSC->SNSRCE = 'FirstSetup';        
        $RunNoDSC->save();

        $RunNoSYS = new SYSNOR();
        $RunNoSYS->SNTABL = 'SYSDAT';
        $RunNoSYS->SNNOUR = $iDAT;
        $RunNoSYS->SNRGID = 'Default';
        $RunNoSYS->SNRGDT = Date("Y-m-d H:i:s");
        $RunNoSYS->SNCHID = 'Default';
        $RunNoSYS->SNCHDT = Date("Y-m-d H:i:s");
        $RunNoSYS->SNCHNO = '0';
        $RunNoSYS->SNDPFG = '1';
        $RunNoSYS->SNDLFG = '0';
        $RunNoSYS->SNCSID = 'Default';
        $RunNoSYS->SNCSDT = Date("Y-m-d H:i:s");
        $RunNoSYS->SNSRCE = 'FirstSetup';        
        $RunNoSYS->save();
/*--------------------------------------------------------------*/

    }
}
