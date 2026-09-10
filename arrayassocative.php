<?php


require_once('connection.php');


$queryData = mysqli_query($koneksi, "SELECT * FROM data_kelas");


$proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

foreach ($proses as $rowData){
    echo "<br/>";
    echo "Tampil Data " . $rowData['id'];
}


function latihanArrayScope(){
$siswa = [[
"nis" => "2001",
"nama" => "andu",
"jurusan" => "Teknik Mesin",
"nilai" => "90" ]
,
[
"nis" => "2008",
"nama" => "andi",
"jurusan" => "Teknik Mesin",
"nilai" => "80"
]];

// echo "nis" , $siswa["nis"].$siswa["nisi"];
foreach( $siswa as $dataTampil){
    echo "Tampil <br/>" .$dataTampil["nis"]."<br/>";
    echo "";
}
}