<?php

use Illuminate\Database\Seeder;
use App\Models\MI1MAS;
use App\Models\MI2MAS;
use App\Models\MITMAS;
use App\Models\UNTMAS;
use App\Models\SYSNOR;

class OTHERTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        return;
        
        // $this->call(UsersTableSeeder::class);
        $iM1 = 1;
        $iM2 = 1;
        $iMM = 1;
        $iUM = 1;

        $defaultFieldMI1MAS = [];
        $defaultFieldMI1MAS = array( "M1RGID" => 'Default',
                                     "M1RGDT" => Date("Y-m-d H:i:s"),
                                     "M1CHID" => 'Default',
                                     "M1CHDT" => Date("Y-m-d H:i:s"),
                                     "M1CHNO" => '0',
                                     "M1DPFG" => '1',
                                     "M1DLFG" => '0',
                                     "M1CSID" => 'Default',
                                     "M1CSDT" => Date("Y-m-d H:i:s"),
                                     "M1SRCE" => 'FirstSetup',
                                  );

        $defaultFieldMI2MAS = [];
        $defaultFieldMI2MAS = array( "M2RGID" => 'Default',
                                     "M2RGDT" => Date("Y-m-d H:i:s"),
                                     "M2CHID" => 'Default',
                                     "M2CHDT" => Date("Y-m-d H:i:s"),
                                     "M2CHNO" => '0',
                                     "M2DPFG" => '1',
                                     "M2DLFG" => '0',
                                     "M2CSID" => 'Default',
                                     "M2CSDT" => Date("Y-m-d H:i:s"),
                                     "M2SRCE" => 'FirstSetup',
                                  );


        $defaultFieldMITMAS = [];
        $defaultFieldMITMAS = array( "MMRGID" => 'Default',
                                     "MMRGDT" => Date("Y-m-d H:i:s"),
                                     "MMCHID" => 'Default',
                                     "MMCHDT" => Date("Y-m-d H:i:s"),
                                     "MMCHNO" => '0',
                                     "MMDPFG" => '1',
                                     "MMDLFG" => '0',
                                     "MMCSID" => 'Default',
                                     "MMCSDT" => Date("Y-m-d H:i:s"),
                                     "MMSRCE" => 'FirstSetup',
                                  );

        $defaultFieldUNTMAS = [];
        $defaultFieldUNTMAS = array( "UMRGID" => 'Default',
                                     "UMRGDT" => Date("Y-m-d H:i:s"),
                                     "UMCHID" => 'Default',
                                     "UMCHDT" => Date("Y-m-d H:i:s"),
                                     "UMCHNO" => '0',
                                     "UMDPFG" => '1',
                                     "UMDLFG" => '0',
                                     "UMCSID" => 'Default',
                                     "UMCSDT" => Date("Y-m-d H:i:s"),
                                     "UMSRCE" => 'FirstSetup',
                                  );


        $UNTMAS = new UNTMAS();
        $UNTMAS->UMCOMPIY = 1;
        $UNTMAS->UMUNMSIY = $iUM++;
        $UNTMAS->UMUNMS = 'GR';
        $UNTMAS->UMNAME = 'GRAM';
        foreach ($defaultFieldUNTMAS as $K => $D) { $UNTMAS[$K] = $D; }
        $UNTMAS->save();

        $UNTMAS = new UNTMAS();
        $UNTMAS->UMCOMPIY = 1;
        $UNTMAS->UMUNMSIY = $iUM++;
        $UNTMAS->UMUNMS = 'KG';
        $UNTMAS->UMNAME = 'KILOGRAM';
        foreach ($defaultFieldUNTMAS as $K => $D) { $UNTMAS[$K] = $D; }
        $UNTMAS->save();

        $UNTMAS = new UNTMAS();
        $UNTMAS->UMCOMPIY = 1;
        $UNTMAS->UMUNMSIY = $iUM++;
        $UNTMAS->UMUNMS = 'ML';
        $UNTMAS->UMNAME = 'MILLILITTRE';
        foreach ($defaultFieldUNTMAS as $K => $D) { $UNTMAS[$K] = $D; }
        $UNTMAS->save();

        $UNTMAS = new UNTMAS();
        $UNTMAS->UMCOMPIY = 1;
        $UNTMAS->UMUNMSIY = $iUM++;
        $UNTMAS->UMUNMS = 'LTR';
        $UNTMAS->UMNAME = 'LITTER';
        foreach ($defaultFieldUNTMAS as $K => $D) { $UNTMAS[$K] = $D; }
        $UNTMAS->save();

/*--------------------------------------------------------------*/

        $MI1MAS = new MI1MAS();
        $MI1MAS->M1COMPIY = 1;
        $MI1MAS->M1M1NOIY = $iM1++;
        $MI1MAS->M1M1NO = 'MAK001';
        $MI1MAS->M1NAME = 'MAKANAN';
        foreach ($defaultFieldMI1MAS as $K => $D) { $MI1MAS[$K] = $D; }
        $MI1MAS->save();

            $MI2MAS = new MI2MAS();
            $MI2MAS->M2COMPIY = 1;
            $MI2MAS->M2M1NOIY = ($iM1-1);
            $MI2MAS->M2M2NOIY = $iM2++;
            $MI2MAS->M2M2NO = 'TAR001';
            $MI2MAS->M2NAME = 'TARO';
            foreach ($defaultFieldMI2MAS as $K => $D) { $MI2MAS[$K] = $D; }
            $MI2MAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 1;
                $MITMAS->MMITNO = 'TAR001';
                $MITMAS->MMNAME = 'TARO 250 GRM';
                $MITMAS->MMDESC = 'TARO 250 Gram';
                $MITMAS->MMHARG = '2000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 1;
                $MITMAS->MMITNO = 'TAR002';
                $MITMAS->MMNAME = 'TARO 500 GRM';
                $MITMAS->MMDESC = 'TARO 500 Gram';
                $MITMAS->MMHARG = '5000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 2;
                $MITMAS->MMITNO = 'TAR003';
                $MITMAS->MMNAME = 'TARO 1 Kg';
                $MITMAS->MMDESC = 'TARO 1 KiloGram';
                $MITMAS->MMHARG = '8000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();


            $MI2MAS = new MI2MAS();
            $MI2MAS->M2COMPIY = 1;
            $MI2MAS->M2M1NOIY = ($iM1-1);
            $MI2MAS->M2M2NOIY = $iM2++;
            $MI2MAS->M2M2NO = 'LAY001';
            $MI2MAS->M2NAME = 'LAYS';
            foreach ($defaultFieldMI2MAS as $K => $D) { $MI2MAS[$K] = $D; }
            $MI2MAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 1;
                $MITMAS->MMITNO = 'LAY001';
                $MITMAS->MMNAME = 'LAYS 250 GRM';
                $MITMAS->MMDESC = 'LAYS 250 Gram';
                $MITMAS->MMHARG = '3000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 1;                
                $MITMAS->MMITNO = 'LAY002';
                $MITMAS->MMNAME = 'LAYS 500 GRM';
                $MITMAS->MMDESC = 'LAYS 500 Gram';
                $MITMAS->MMHARG = '7000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 2;                
                $MITMAS->MMITNO = 'LAY003';
                $MITMAS->MMNAME = 'LAYS 1 Kg';
                $MITMAS->MMDESC = 'LAYS 1 KiloGram';
                $MITMAS->MMHARG = '12000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();


        $MI1MAS = new MI1MAS();
        $MI1MAS->M1M1NOIY = $iM1++;
        $MI1MAS->M1COMPIY = 1;
        $MI1MAS->M1M1NO = 'MIN001';
        $MI1MAS->M1NAME = 'MINUMAN';
        foreach ($defaultFieldMI1MAS as $K => $D) { $MI1MAS[$K] = $D; }
        $MI1MAS->save();



            $MI2MAS = new MI2MAS();
            $MI2MAS->M2COMPIY = 1;
            $MI2MAS->M2M1NOIY = ($iM1-1);
            $MI2MAS->M2M2NOIY = $iM2++;
            $MI2MAS->M2M2NO = 'AQU001';
            $MI2MAS->M2NAME = 'AQUA';
            foreach ($defaultFieldMI2MAS as $K => $D) { $MI2MAS[$K] = $D; }
            $MI2MAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 3;
                $MITMAS->MMITNO = 'AQU001';
                $MITMAS->MMNAME = 'AQUA 200 ML';
                $MITMAS->MMDESC = 'AQUA 200 Millilitre';
                $MITMAS->MMHARG = '1500';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 3;
                $MITMAS->MMITNO = 'AQU002';
                $MITMAS->MMNAME = 'AQUA 600 ML';
                $MITMAS->MMDESC = 'AQUA 600 Millilitre';
                $MITMAS->MMHARG = '4000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 4;
                $MITMAS->MMITNO = 'AQU003';
                $MITMAS->MMNAME = 'AQUA 1.5 Ltr';
                $MITMAS->MMDESC = 'AQUA 1.5 Litter';
                $MITMAS->MMHARG = '6000';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();


            $MI2MAS = new MI2MAS();
            $MI2MAS->M2COMPIY = 1;
            $MI2MAS->M2M1NOIY = ($iM1-1);
            $MI2MAS->M2M2NOIY = $iM2++;
            $MI2MAS->M2M2NO = 'ULT001';
            $MI2MAS->M2NAME = 'ULTRA MILK';
            foreach ($defaultFieldMI2MAS as $K => $D) { $MI2MAS[$K] = $D; }
            $MI2MAS->save();

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 3;
                $MITMAS->MMITNO = 'ULT101';
                $MITMAS->MMNAME = 'ULTRA MILK COKLAT 250 ML';
                $MITMAS->MMDESC = 'ULTRA MILK COKLAT 250 Millilitre';
                $MITMAS->MMHARG = '3500';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();               

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 3;
                $MITMAS->MMITNO = 'ULT102';
                $MITMAS->MMNAME = 'ULTRA MILK STRAWBERRY 250 ML';
                $MITMAS->MMDESC = 'ULTRA MILK STRAWBERRY 250 Millilitre';
                $MITMAS->MMHARG = '3600';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();        

                $MITMAS = new MITMAS();
                $MITMAS->MMCOMPIY = 1;
                $MITMAS->MMM2NOIY = ($iM2-1);
                $MITMAS->MMITNOIY = $iMM++;
                $MITMAS->MMUNMSIY = 3;
                $MITMAS->MMITNO = 'ULT103';
                $MITMAS->MMNAME = 'ULTRA MILK VANILLA 250 ML';
                $MITMAS->MMDESC = 'ULTRA MILK VANILLA 250 Millilitre';
                $MITMAS->MMHARG = '3400';
                $MITMAS->MMQTYS = '0';
                foreach ($defaultFieldMITMAS as $K => $D) { $MITMAS[$K] = $D; }
                $MITMAS->save();                                         
/*--------------------------------------------------------------*/


/*--------------------------------------------------------------*/

        $RunNoDSC = new SYSNOR();
        $RunNoDSC->SNTABL = 'MI1MAS';
        $RunNoDSC->SNNOUR = $iM1;
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
        $RunNoSYS->SNTABL = 'MI2MAS';
        $RunNoSYS->SNNOUR = $iM2;
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


        $RunNoSYS = new SYSNOR();
        $RunNoSYS->SNTABL = 'MITMAS';
        $RunNoSYS->SNNOUR = $iMM;
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


        $RunNoSYS = new SYSNOR();
        $RunNoSYS->SNTABL = 'UNTMAS';
        $RunNoSYS->SNNOUR = $iUM;
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
