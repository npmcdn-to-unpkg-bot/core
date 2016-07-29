<?php

use Illuminate\Database\Seeder;
use App\Http\Models\sys\sys_status_mst as sys_status_mst;
use App\Http\Models\sys\sys_type_mst as sys_type_mst;
use Carbon\Carbon as Carbon;

class default_acl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(StatusTableSeeder::class);
        $this->call(TypeTableSeeder::class);
    }

}

class StatusTableSeeder extends Seeder {

    public function run()
    {
        // sys_status_mst::truncate();
        sys_status_mst::create(array(
                'id_status' => 'A',
                'keterangan' => 'Aktif',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_status_mst::create(array(
                'id_status' => 'N',
                'keterangan' => 'Non-Aktif',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_status_mst::create(array(
                'id_status' => 'Y',
                'keterangan' => 'Ya',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_status_mst::create(array(
                'id_status' => 'T',
                'keterangan' => 'Tidak',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
    }
}

class TypeTableSeeder extends Seeder {

    public function run()
    {
        // sys_type_mst::truncate();
        sys_type_mst::create(array(
                'id_type' => 'TRX',
                'nama_type' => 'TRANSAKSI',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'RPT',
                'nama_type' => 'REPORT',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'APV',
                'nama_type' => 'APPROVAL',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'MST',
                'nama_type' => 'MASTER DATA',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'WEB',
                'nama_type' => 'Web Content',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'MENU',
                'nama_type' => 'Link Menu',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
        sys_type_mst::create(array(
                'id_type' => 'OTH',
                'nama_type' => 'LAIN-LAIN',
                'sys_user_created' => 'SYSADMIN',
                'sys_tgl_created' => Carbon::now(),
                'sys_status_aktif' => 'A'
        ));
    }
}
