<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Dashboard extends CI_controller
{
    /**
     * Constructs a new instance.
     */
    function __construct()
    {
        parent::__construct();
        //login cek and authentication
        getAuthTatausaha();
        $this->load->model('m_admin');
        $this->load->model('m_pengumuman');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Tata Usaha';
        $data['pengumumans'] = $this->m_pengumuman->getPengumuman();
        getViews($data, 'v_tatausaha/dashboard');
    }

        //chart alumni berdasarkan status
    // public function get_dataChart(){

    //     $total = $this->m_admin->chartStatus();
    
    //     $data = ['total' => $total];

    //     echo json_encode($data);
    
    // }

    // public function get_dataChart2(){
    //     $total = $this->m_admin->getGender();

    //     $data = ['jumlah' => $total];

    //     echo json_encode($data);
    // }

    // public function get_dataChart3(){

    //     $jurusan = $this->m_admin->chartJurusan();

    //     foreach ($jurusan as $jtotal) {
    //         $total = $jtotal['total'];
    //         $totalJurusan[] = $total;
    //     }

    //     foreach ($jurusan as $jlabel) {
    //         $label[] = $jlabel['nama_jurusan'];
    //     }

    //     $dataJurusan = ['jurusan' => $totalJurusan,
    //                     'nama_jurusan' => $label];
    //     echo json_encode($dataJurusan);
    // }
}
