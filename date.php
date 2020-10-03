<?php

/** 
 * Poin 2
 *  - 1 || Buatlah sebuah function untuk validasi input dari user untuk tanggal
 *  - 1 || validasi input dari user sesuai format ( dd/mm/yyyy ) 02/10/2020 
 * 
 *  contoh 
 *  1.user input data 02/10/2020
 *  2.output Friday, 02 October 2020 // ( day, date month year )
 */

// $input_date = readline("Cek tanggal ( dd/mm/yyyy ) : ");
// function validDate() {
//     // echo date("dd-mm-yyyy", strtotime("02/10/2020")); // 
//         $input_date = readline("Cek tanggal ( dd/mm/yyyy ) : ");
//     echo date("l,  F d Y", strtotime("02/10/2020")); // Friday, 20 January 2017
//     }
//     validDate();

function validDate($input_date) 
{
    $date = DateTime::createFromFormat($input_date, readline("Masukkan tanggal/bulan/tahun dengan angka! : "));
    if (is_numeric($input_date) && ($date>32)){
        echo 'salah';
    }else{
        echo $date->format('l d-M-Y');
    }
}

validDate('d/m/Y');

$input_date = readline("Cek tanggal ( dd/mm/yyyy ) : ");

validDate($input_date);