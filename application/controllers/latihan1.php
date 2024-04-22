<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        // Memuat model Model_latihan
        $this->load->model('Model_latihan');
        
        // Menyiapkan data untuk dikirim ke view
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        
        // Memanggil metode jumlah dari model dan menyimpan hasilnya di $data['hasil']
       $data['hasil'] = $this->Model_latihan->jumlah($n1, $n2);
        
        // Memuat view dengan data yang telah disiapkan
        $this->load->view('view-latihan1', $data);
    }
}
?>
