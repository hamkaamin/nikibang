<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Model\Data_arsip_inactive;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArsipInaktifImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {					
        return new Data_arsip_inactive([
            'kode_klasifikasi' => $row['kode_klasifikasi'], 
            'indeks' => $row['indeks'], 
            'jumlah_unit' => $row['jumlah_unit'], 
            'nomor_berkas' => $row['nomor_berkas'], 
            'nomor_box' => $row['nomor_box'], 
            'nomor_rak' => $row['nomor_rak'], 
            'nomor_bku' => $row['nomor_ruang'],  
            'uraian_masalah' => $row['uraian_masalah'], 
            'divisi' => $row['divisi'], 
            'tahun_arsip' => $row['tahun_arsip'], 
            'keterangan' => $row['keterangan'], 
            'tingkat_perkembangan' => $row['tingkat_perkembangan'], 
        ]);
    }
}
