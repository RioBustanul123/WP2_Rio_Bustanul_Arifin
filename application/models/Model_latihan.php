<?php
class Model_latihan extends CI_Model
{
	//membuat variabel penampung nilai
	public $nilai1, $nilai2;

	//metode penjumlahan
	public function jumlah ($n1 = null, $n2 = null)
	{
		$this->nilai1 = $n1;
		$this->nilai2 = $n2;
		return $this->nilai1 + $this-> nilai2;
	}
}
