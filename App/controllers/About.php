<?php  


class About extends Controller {
    public function index($nama = "Gilman", $pekerjaan = "Mahasiswa", $umur = 21 ) 
    {
        //echo "Hallo, Nama Saya $nama, Saya Adalah Seorang $pekerjaan. Saya Berumur $umur tahun.";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view ('about/index', $data);
        $this->view('templates/footer');
    }


    public function page() 
    {
        //echo 'About/page';
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}