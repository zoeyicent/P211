/*




Insert Into MI1MAS (
M1COMPIY, M1M1NOIY, M1M1NO, M1NAME, M1REMK,
M1DPFG, M1DLFG, M1RGDT, M1RGID, M1CHDT, M1CHID, M1CHNO, M1SRCE, M1CSDT, M1CSID
) Values (
'1', '1', 'NA', 'NA',''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'MI1MAS','1', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');

Insert Into MI2MAS (
M2COMPIY, M2M2NOIY, M2M2NO, M2NAME, M2M1NOIY, M2REMK,
M2DPFG, M2DLFG, M2RGDT, M2RGID, M2CHDT, M2CHID, M2CHNO, M2SRCE, M2CSDT, M2CSID
) Values (
'1', '1', 'NA', 'NA','1',''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'MI2MAS','1', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');

Insert Into UNTMAS (
UMCOMPIY, UMUNMSIY, UMUNMS, UMNAME, UMREMK,
UMDPFG, UMDLFG, UMRGDT, UMRGID, UMCHDT, UMCHID, UMCHNO, UMSRCE, UMCSDT, UMCSID
) Values (
'1', '1', 'PCS', 'PIECES',''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'UNTMAS','1', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');



*/

/*

ADRINDO3_PHI_DEMO
Select * From MITWHL Where MWWHTY = 'FG'
OOLINE
ODLINE
ODHEAD

Drop Table #ABC

Select 
      UBDLNRIY  [LNNOIY]
	, UBDLNR    [LNNO]
	, UBDLNOIY  [TRNOIY]
	, MBITBAIY  [ITNOIY]
	, UBDLQT    [QTYS]
	, OBSAPR    [HARG]
	, UBDLQT*OBSAPR [TOTL]
	, UBREMK    [REMK]	
	, UADLNO [TRNO]
	, UADLDT [TRDT]
	, 'T' [TRTY]
	, UABPNOIY [BPNOIY]
	Into #ABC
From vwODLINE
Where Left(UADLDT,4) = '2018' And MWWHLOIY = 9

*/


Select 
	Top 100 ITNOIY, SUM(QTYS) QTYS 
	Into #MITMAS
From #ABC
Group By ITNOIY
Order By Sum(QTYS) Desc

Select 
--'DB::insert("' + 
'Insert Into MITMAS ( ' +
'MMCOMPIY, MMITNOIY, MMITNO, MMNAME, MMDESC, MMM2NOIY, MMUNMSIY, MMHARG, MMQTYS, MMREMK, ' +
'MMDPFG, MMDLFG, MMRGDT, MMRGID, MMCHDT, MMCHID, MMCHNO, MMSRCE, MMCSDT, MMCSID ' +
') Values ( ' +
'''1'',  ' +
'''' + Cast(MMITBAIY As VarChar) + ''',  ' +
'''' + Cast(RTRIM(MMITNO)+RTRIM(MWWHLO) As VarChar) + ''',  ' +
'''' + Cast(RTRIM(MMITDS) As VarChar) + ''',  ' +
'''' + Cast(RTRIM(MMFUDS) As VarChar) + ''',  ' +
'''1'',''1'',''0'',''0'','''' ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
MMITBAIY, MMITNO, MMITDS, MMFUDS, MMITGR, MMITCL,MMITTY, MMUNMS 
From vwMITBAL 
Where MBITBAIY In (
	Select ITNOIY From #MITMAS
)


Select Max(ITNOIY) From #MITMAS

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'MITMAS','30305', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');



Select 
TRNOIY, TRNO, TRDT, BPNOIY , COUNT(*) JMLH
Into #SHHEAD
From #ABC
Where ITNOIY In (
	Select ITNOIY From #MITMAS
)
Group By TRNOIY, TRNO, TRDT, BPNOIY
Having Count(*) > 1



Select 
--'DB::insert("' + 
'Insert Into MBPMAS ( ' +
'BPCOMPIY, BPBPNOIY, BPBPNO, BPNAME, BPSUPF, BPCUSF, BPMAIL, BPCPER, BPREMK, ' +
'BPDPFG, BPDLFG, BPRGDT, BPRGID, BPCHDT, BPCHID, BPCHNO, BPSRCE, BPCSDT, BPCSID ' +
') Values ( ' +
'''1'',  ' +
'''' + Cast(BPBPNOIY As VarChar) + ''',  ' +
'''' + Cast(RTRIM(BPBPNO) As VarChar) + ''',  ' +
'''' + Cast(RTRIM(BPBPNM) As VarChar) + ''',  ' +
' ''1'',''1'','''','''', ' +
''''' ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From CBPMAS
Where BPBPNOIY In (
Select BPNOIY From #SHHEAD
)


Select Max(BPNOIY) From #SHHEAD

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'MBPMAS','185', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');




Select 
--'DB::insert("' + 
'Insert Into SHHEAD ( ' +
'SHCOMPIY, SHSHNOIY, SHSHNO, SHDATE, SHTYPE, SHBPNOIY, SHADDR, SHCITY, SHTELP, SHCPER, SHREMK, SHSUBT, SHEXCT, SHTOTL, ' +
'SHDPFG, SHDLFG, SHRGDT, SHRGID, SHCHDT, SHCHID, SHCHNO, SHSRCE, SHCSDT, SHCSID ' +
') Values ( ' +
'''1'',  ' +
'''' + Cast(TRNOIY As VarChar) + ''',  ' +
'''' + Cast(RIGHT(RTRIM(TRNO),8) As VarChar) + ''',  ' +
'''' + Cast(TRDT As VarChar) + ''',  ' +
'''T'',' +
'''' + Cast(BPNOIY As VarChar) + ''',  ' +
'''' + Cast(RTRIM(BPADD1)+Char(13)+RTRIM(BPADD2)+Char(13)+RTRIM(BPADD3)+Char(13)+RTRIM(BPADD4) As VarChar) + ''',  ' +
''''',' +
'''' + Cast(RTRIM(BPTEL1) As VarChar) + ''',  ' +
''''','''',''0'',''0'',''0''  ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From #SHHEAD
Left Join CBPMAS On BPBPNOIY = BPNOIY



Select Max(TRNOIY) From #SHHEAD

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'SHHEAD','39833', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');


Select 
--'DB::insert("' + 
'Insert Into SHLINE ( ' +
'SLSLNOIY, SLSLNO, SLSHNOIY, SLITNOIY, SLDESC, SLQTYS, SLHARG, SLTOTL, SLREMK, ' +
'SLDPFG, SLDLFG, SLRGDT, SLRGID, SLCHDT, SLCHID, SLCHNO, SLSRCE, SLCSDT, SLCSID ' +
') Values ( ' +
'''' + Cast(LNNOIY As VarChar) + ''',  ' +
'''' + Cast(LNNO As VarChar) + ''',  ' +
'''' + Cast(TRNOIY As VarChar) + ''',  ' +
'''' + Cast(ITNOIY As VarChar) + ''',  ' +
''''',  ' +
'''' + Cast(QTYS As VarChar) + ''',  ' +
'''' + Cast(HARG As VarChar) + ''',  ' +
'''' + Cast(TOTL As VarChar) + ''',  ' +
'''''  ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From #ABC
Where TRNOIY In (
	Select TRNOIY From #SHHEAD
) And ITNOIY In (
	Select ITNOIY From #MITMAS 
)



Drop Table #PHLINE

Select 
	OAORNOIY [TRNOIY],
	OAORNO [TRNO],
	OAORDT [TRDT],
	OABPNOIY+1 [BPNOIY],
	OBORLNIY [LNNOIY],
	OBPONR [LNNO],
	MBITBAIY [ITNOIY],
	OBORQT [QTYS],
	OBSAPR [HARG],
	OBORQT*OBSAPR[TOTL],
	OBREMK
	Into #PHLINE
From vwOOLINE
Where Left(OAORDT,4) = '2018' And MBWHLOIY = 9
ANd OBITBAIY In (
Select ITNOIY From #MITMAS
)

Select * From CBPMAS
WHere BPBPNOIY In (
	Select BPNOIY From #PHLINE
	Group By BPNOIY
)



Select 
--'DB::insert("' + 
'Insert Into MBPMAS ( ' +
'BPCOMPIY, BPBPNOIY, BPBPNO, BPNAME, BPSUPF, BPCUSF, BPMAIL, BPCPER, BPREMK, ' +
'BPDPFG, BPDLFG, BPRGDT, BPRGID, BPCHDT, BPCHID, BPCHNO, BPSRCE, BPCSDT, BPCSID ' +
') Values ( ' +
'''1'',  ' +
'''' + Cast(BPBPNOIY As VarChar) + ''',  ' +
'''' + Cast(RTRIM(BPBPNO) As VarChar) + ''',  ' +
'''' + Cast(RTRIM(BPBPNM) As VarChar) + ''',  ' +
' ''1'',''0'','''','''', ' +
''''' ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From CBPMAS
Where BPBPNOIY In (
	Select BPNOIY From #PHLINE
	Group By BPNOIY
) And BPBPNOIY Not In (
	Select BPNOIY From #SHHEAD
	Group By BPNOIY
)


Select Max(BPBPNOIY) From CBPMAS
Where BPBPNOIY In (
	Select BPNOIY From #PHLINE
	Group By BPNOIY
) And BPBPNOIY Not In (
	Select BPNOIY From #ABC
	Group By BPNOIY
)

Insert Into SYSNOR (
SNTABL, SNNOUR, SNREMK, 
SNDPFG, SNDLFG, SNRGDT, SNRGID, SNCHDT, SNCHID, SNCHNO, SNSRCE, SNCSDT, SNCSID
) Values (
'MBPMAS','202', ''
,'1','0',Now(),'SysAdmin',Now(),'SysAdmin','0','Dummy',Now(),'SysAdmin');



Select 
	TRNOIY, TRNO, TRDT, BPNOIY , COUNT(*) JMLH 
	Into #PHHEAD
From #PHLINE
Group By TRNOIY, TRNO, TRDT, BPNOIY 


SElect * From #PHLINE

SElect RIGHT(RTRIM(TRNO),8), MIN(TRNOIY),MAX(TRNOIY), COUNT(*) From #PHHEAD
Group By RIGHT(RTRIM(TRNO),8)
Having COunt(*) > 1


Select 
--'DB::insert("' + 
'Insert Into PHHEAD ( ' +
'PHCOMPIY, PHPHNOIY, PHPHNO, PHDATE, PHTYPE, PHBPNOIY, PHADDR, PHCITY, PHTELP, PHCPER, PHREMK, PHSUBT, PHEXCT, PHTOTL, ' +
'PHDPFG, PHDLFG, PHRGDT, PHRGID, PHCHDT, PHCHID, PHCHNO, PHSRCE, PHCSDT, PHCSID ' +
') Values ( ' +
'''1'',  ' +
'''' + Cast(TRNOIY As VarChar) + ''',  ' +
'''' + Cast(RIGHT(RTRIM(TRNO),8) As VarChar) + ''',  ' +
'''' + Cast(TRDT As VarChar) + ''',  ' +
'''T'',' +
'''' + Cast(BPNOIY As VarChar) + ''',  ' +
'''' + Cast(RTRIM(IsNull(BPADD1,''))+Char(13)+RTRIM(IsNull(BPADD2,''))+Char(13)+RTRIM(IsNull(BPADD3,''))+Char(13)+RTRIM(IsNull(BPADD4,'')) As VarChar) + ''',  ' +
''''',' +
'''' + Cast(RTRIM(IsNull(BPTEL1,'')) As VarChar) + ''',  ' +
''''','''',''0'',''0'',''0''  ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From #PHHEAD
Left Join CBPMAS On BPBPNOIY = BPNOIY



Select 
--'DB::insert("' + 
'Insert Into PHLINE ( ' +
'PLPLNOIY, PLPLNO, PLPHNOIY, PLITNOIY, PLDESC, PLQTYS, PLHARG, PLTOTL, PLREMK, ' +
'PLDPFG, PLDLFG, PLRGDT, PLRGID, PLCHDT, PLCHID, PLCHNO, PLSRCE, PLCSDT, PLCSID ' +
') Values ( ' +
'''' + Cast(LNNOIY As VarChar) + ''',  ' +
'''' + Cast(LNNO As VarChar) + ''',  ' +
'''' + Cast(TRNOIY As VarChar) + ''',  ' +
'''' + Cast(ITNOIY As VarChar) + ''',  ' +
''''',  ' +
'''' + Cast(QTYS As VarChar) + ''',  ' +
'''' + Cast(HARG As VarChar) + ''',  ' +
'''' + Cast(TOTL As VarChar) + ''',  ' +
'''''  ' +
',''1'',''0'',Now(),''SysAdmin'',Now(),''SysAdmin'',''0'',''Dummy'',Now(),''SysAdmin''); ' + 
--'");' +
'' ,
* 
From #PHLINE
Where TRNOIY In (
	Select TRNOIY From #PHHEAD
)

