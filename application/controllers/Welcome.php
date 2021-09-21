<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo"<h1>Perkenalan <h1>";
		echo"Nama              :Uzi Jonathan Tuhuleruw <br>
		     Tanggal Lahir     :Bekasi 21 Desember 2002 <br>
			 Tempat Tinggal    :Perumahan Kompas Indah, Jln. Meranti Blok c24 no.11, Kota Bekasi, Kabupaten Tambun Selatan, Provinsi Jawa Barat, Kode Pos 17510 <br>
             Motivation Kuliah :Ingin menempuh Pendidikan yang lebih Tinggi";
     }
}