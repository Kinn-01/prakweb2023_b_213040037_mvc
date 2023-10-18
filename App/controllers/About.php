<?php  


class About {
    public function index($nama = "Gilman", $pekerjaan = "Mahasiswa") 
    {
        echo "Hallo, Nama Saya $nama, Saya Adalah Seorang $pekerjaan";
    }
    public function page() 
    {
        echo 'About.page';
    }
}