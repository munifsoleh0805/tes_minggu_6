<?php

/** 
 *  
 *  poin 7
 *  
 *  - 1 || menu bisa berjalan sesuai dengan pilihan yang tersedia menggunakan perulangan
 *  - 1 || filter berdasarkan provinsi
 *  - 1 || tidak ada duplikasi data saat filter provinsi
 *  - 1 || filter berdasarkan kawasan
 *  - 1 || tidak ada duplikasi data saat filter kawasan
 *  - 2 || tidak ada duplikasi kode ( Penerapan DRY ) menggunakan function
 * 
 */

 $provinsi=[
     [
         "provinsi"=>"Aceh",
         "kota"=>"Banda Aceh",
         "kawasan"=>"Sumatra"
     ],
    [
        "provinsi" => "Aceh",
        "kota" => "Langsa",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Aceh",
        "kota" => "Lhokseumawe",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Bali",
        "kota" => "Denpasar",
        "kawasan" => "Bali dan Nusa Tenggara"
    ],
    [
        "provinsi" => "Bangka Belitung",
        "kota" => "Pangkalpinang",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Cilegon",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Serang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang Selatan",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Bengkulu",
        "kota" => "Bengkulu",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jambi",
        "kota" => "Jambi",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bandung",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bekasi",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bogor",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Magelang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Semarang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Surakarta",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Batu",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Blitar",
        "kawasan" => "Jawa"
    ],
];





// User Pilih Menu

$menu=["All","Provinsi","Kawasan","Exit"];


$berhenti=true;

while($berhenti)
{
    echo "Daerah otonomi Di Indonesia\n";
    echo "===============================\n";
    $nomor=1;
    foreach($menu as $data)
    {
        echo "$nomor.$data \n";
        $nomor++;
    }

    $pilih_menu=readline("Pilih menu :");

    if($pilih_menu==1)
    {
        // Fitur All
        foreach($provinsi as $value){
            echo $value['provinsi']. ' | ',$value['kota']. ' | ',$value['kawasan']. PHP_EOL;
        }

    }elseif($pilih_menu==2)
    {
        // Fitur Provinsi
        $filter_provinsi=readline('Masukan nama provinsi :');
        foreach($provinsi as $value){
            if($value['provinsi']==$filter_provinsi){
                echo $value['provinsi']. ' | ',$value['kawasan']. ' | ',$value['kota']. PHP_EOL;
            }
        }
    
    }elseif($pilih_menu==3)
    {
        // Fitur Kawasan
        $filter_kawasan=readline('Masukan nama kawasan :');
        foreach($provinsi as $values){
            if($values['kawasan']==$filter_kawasan){
                echo $values['kawasan']. ' | ',$values['provinsi']. ' | ',$values['kota']. PHP_EOL;
            }
        }

    }elseif($pilih_menu==4)
    {
        // Fitur Exit
        exit;

    }else{

        // Jika tidak memilih menu yang tersedia

        echo "Anda memilih operasi yang tidak tersedia!!!";
    break;
    }
}