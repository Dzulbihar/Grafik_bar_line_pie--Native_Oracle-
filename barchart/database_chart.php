<?php 

// shipcall
  $shipcall_2020  = oci_parse($koneksi, "SELECT shipcall FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $shipcall_2021  = oci_parse($koneksi, "SELECT shipcall FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_shipcall      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' order by ID asc");

// gt
  $gt_2020  = oci_parse($koneksi, "SELECT gt FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $gt_2021  = oci_parse($koneksi, "SELECT gt FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_gt      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");


////////////////////////
////////////////////////
////////////////////////////////////////////////////////////
// perbulan_import
  $perbulan_import_2020  = oci_parse($koneksi, "SELECT (if20+if40+if45+ie20+ie40+ie45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_import_2021  = oci_parse($koneksi, "SELECT (if20+if40+if45+ie20+ie40+ie45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_import      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_export
  $perbulan_export_2020  = oci_parse($koneksi, "SELECT (ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_export_2021  = oci_parse($koneksi, "SELECT (ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_export      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_import_export
  $perbulan_import_export_2020  = oci_parse($koneksi, "SELECT (if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $perbulan_import_export_2021  = oci_parse($koneksi, "SELECT (if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $Bulan_perbulan_import_export      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
///////////////////////////////////////////////


////////////////////////
////////////////////////
//////////////////////// triwulan_import
  $triwulan_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $triwulan_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );


//////////////////////// triwulan_export
  $triwulan_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $triwulan_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );


//////////////////////// triwulan_import_export
  $triwulan_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $triwulan_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );



////////////////////////
////////////////////////
//////////////////////// semester_import
  $semester_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $semester_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );



//////////////////////// semester_export
  $semester_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $semester_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );


//////////////////////// semester_import_export
  $semester_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $semester_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );


////////////////////////
////////////////////////
//////////////////////// pertahun_import
  $pertahun_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $pertahun_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );



//////////////////////// pertahun_export
  $pertahun_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $pertahun_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );


//////////////////////// pertahun_import_export
  $pertahun_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $pertahun_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );


 ?>






<?php 

///////////////////////////////////////////////
///////////////////////////////////////////////
// perbulan_import
  $teus_perbulan_import_2020  = oci_parse($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_import_2021  = oci_parse($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_import      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_export
  $teus_perbulan_export_2020  = oci_parse($koneksi, "SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_export_2021  = oci_parse($koneksi, "SELECT ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_export      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");

// perbulan_import_export
  $teus_perbulan_import_export_2020  = oci_parse($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
  $teus_perbulan_import_export_2021  = oci_parse($koneksi, "SELECT if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45 as teus FROM ARUS_BONGKAR_MUAT where Tahun='2021' and Lokasi='Internasional' order by ID asc");
  $teus_Bulan_perbulan_import_export      = oci_parse($koneksi, "SELECT Bulan FROM ARUS_BONGKAR_MUAT where Tahun='2020' and Lokasi='Internasional' order by ID asc");
///////////////////////////////////////////////


///////////////////////////////////////////////
///////////////////////////////////////////////
//////////////////////// triwulan_import
  $teus_triwulan_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $teus_triwulan_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );


//////////////////////// triwulan_export
  $teus_triwulan_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $teus_triwulan_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );


//////////////////////// triwulan_import_export
  $teus_triwulan_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

  $teus_triwulan_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret')
                    ) as triwulan1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('April','Mei','Juni')
                    ) as triwulan2,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September')
                    ) as triwulan3,
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Oktober','November','Desember')
                    ) as triwulan4 from dual
    "                
  );

//////////////////////////////////////////////////////////
/////////////////////////////////////////////////////
//////////////////////// semester_import
  $teus_semester_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $teus_semester_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );



//////////////////////// semester_export
  $teus_semester_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $teus_semester_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );


//////////////////////// semester_import_export
  $teus_semester_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

  $teus_semester_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni')
                    ) as semester1, 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Juli','Agustus','September','Oktober','November','Desember')
                    ) as semester2 from dual
    "                
  );

/////////////////////////////////////////////////////
/////////////////////////////////////////////////////
//////////////////////// pertahun_import
  $teus_pertahun_import_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $teus_pertahun_import_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );



//////////////////////// pertahun_export
  $teus_pertahun_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $teus_pertahun_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );


//////////////////////// pertahun_import_export
  $teus_pertahun_import_export_2020  = oci_parse($koneksi, 
    "
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2020' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );

  $teus_pertahun_import_export_2021  = oci_parse($koneksi, 
    " 
    SELECT 
    (
        Select sum(if20+if40+if45+ie20+ie40+ie45+if40+if45+ie40+ie45+ef20+ef40+ef45+ee20+ee40+ee45+ef40+ef45+ee40+ee45) from ARUS_BONGKAR_MUAT where Lokasi='Internasional' and tahun='2021' 
        and bulan in('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember')
                    ) as pertahun from dual
    "                
  );


?>