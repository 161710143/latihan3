<?php
echo "<center>";

	require_once 'hewan.php';

	$identitas1 = new hewan("kucing", "putih", "meong", "empat");
		echo "Nama_hewan = ".$identitas1->get_nama_hewan().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Suara = ".$identitas1->get_suara().'<br>';
		echo "Kaki = ".$identitas1->get_kaki().'<br>';
		echo "*************************************************".'<br>';

	$identitas1 = new hewan("tikus", "merah", "cit cit cit", "empat");
		echo "Nama_hewan = ".$identitas1->get_nama_hewan().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Suara = ".$identitas1->get_suara().'<br>';
		echo "Kaki = ".$identitas1->get_kaki().'<br>';
		echo "*************************************************".'<br>';
	
	$identitas1 = new hewan("kelinci", "pink", "cleng cleng cleng", "empat");
		echo "Nama_hewan = ".$identitas1->get_nama_hewan().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Suara = ".$identitas1->get_suara().'<br>';
		echo "Kaki = ".$identitas1->get_kaki().'<br>';
		echo "*************************************************".'<br>';
	
	$identitas1 = new hewan("kuda", "coklat", "hiiihaaa", "empat");
		echo "Nama_hewan = ".$identitas1->get_nama_hewan().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Suara = ".$identitas1->get_suara().'<br>';
		echo "Kaki = ".$identitas1->get_kaki().'<br>';
		echo "*************************************************".'<br>';
	
	$identitas1 = new hewan("burung", "hitam", "kukuk", "dua");
		echo "Nama_hewan = ".$identitas1->get_nama_hewan().'<br>';
		echo "Warna = ".$identitas1->get_warna().'<br>';
		echo "Suara = ".$identitas1->get_suara().'<br>';
		echo "Kaki = ".$identitas1->get_kaki().'<br>';
		echo "*************************************************".'<br>';

?>