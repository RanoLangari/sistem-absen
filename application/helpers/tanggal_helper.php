<?php
defined('BASEPATH') OR die('No direct script access allowed!');
function tgl_hari($tgl)
{    
    $bulan = bulan(date('m', strtotime($tgl)));
    $hari = hari(date('l', strtotime($tgl)));
    return $hari . ', ' . date('d-', strtotime($tgl)) . $bulan . date('-Y', strtotime($tgl));
}
