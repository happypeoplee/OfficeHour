<?php
function tanggal_indonesia($tanggal_lengkap)
{
    $nama_bulan = array(
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April', 5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    );
    $pisah = explode("/", $tanggal_lengkap);

    $tanggal_baru = $pisah[0] . ' ' . $nama_bulan[$pisah[1]] . ' ' . $pisah[2];
    return $tanggal_baru;
}