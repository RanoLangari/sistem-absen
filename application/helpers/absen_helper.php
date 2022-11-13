<?php
defined('BASEPATH') OR die('No direct script access allowed!');
function is_weekend($tgl = false)
{
    $tgl = @$tgl ? $tgl : date('d-m-Y');
    return in_array(date('l', strtotime($tgl)), ['Saturday', 'Sunday']);
}
function checkAbsenHarian($tgl = false)
{
    $tgl = @$tgl ? $tgl : date('d-m-Y');
    $CI =& get_instance();
    $CI->load->model('Absensi_model');
    $absen = $CI->Absensi_model->getAbsen($CI->session->userdata('id_users'));
    if ($absen) {
        if ($absen['date'] == date('Y-m-d', strtotime($tgl))) {
            return true;
        }
    }
    return false;
}
function limitTimeAbsenHarian($tgl = false)
{
    $tgl = @$tgl ? $tgl : date('d-m-Y');
    $start = strtotime('08:00:00');
    $end   = strtotime('10:00:00');
    $now   = strtotime(date('H:i:s'));
    if ($now >= $start && $now <= $end) {
        return true;
    }
    return false;
}



