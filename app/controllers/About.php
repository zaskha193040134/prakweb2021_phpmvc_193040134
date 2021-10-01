<?php 

class About {
    public function index($nama =  'Zaskha', $pekerjaan = 'Terbang') {
        echo "Helo nama saya $nama, saya adalah $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}