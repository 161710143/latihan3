<?php

	class hewan {
		public $nama_hewan;
		public $warna;
		public $suara;
		public $kaki;

		function __construct ($nama_hewan, $warna, $suara, $kaki) {
			$this->nama_hewan = $nama_hewan;
			$this->warna = $warna;
			$this->suara = $suara;
			$this->kaki = $kaki;
		}

		function get_nama_hewan(){
			return $this->nama_hewan;
		}

		function get_warna(){
			return $this->warna;
		}

		function get_suara(){
			return $this->suara;
		}

		function get_kaki(){
			return $this->kaki;
		}
	}



?>