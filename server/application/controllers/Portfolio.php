<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function view($name){

		$detail = [
			'pktgr' => [
				'title' => 'PEMKAB TANGERANG SIBANGRIR',
				'category' => $this->category(['B']),
				'client' => 'Pemkab Tangerang',
				'year' => '2021',
				'url' => null,
				'sector' => 'Company',
				'description' => 'Web sistem yang digunakan untuk manajemen pengembangan karir Pemerintah Kabupaten Tangerang',
			],
			'belianter' => [
				'title' => 'Belianter',
				'category' => $this->category(['A', 'B', 'C']),
				'client' => 'Digital Buana',
				'year' => '2020',
				'url' => 'https://belianter.com/',
				'sector' => 'Public',
				'description' => 'Website E-Commerce dan Online Delivery Platform',
			],
			'shoptv' => [
				'title' => 'ShopTv',
				'category' => $this->category(['A']),
				'client' => 'Omega',
				'year' => '2018',
				'url' => null,
				'sector' => 'Company',
				'description' => 'Web Admin untuk aplikasi e-commerce ShopTv',
			],
			'r3d' => [
				'title' => 'R3D',
				'category' => $this->category(['A']),
				'client' => 'R3D',
				'year' => '2019',
				'url' => null,
				'sector' => 'Public',
				'description' => 'Sistem Informasi untuk Trend & Target Audience Analysis',
			],
			'lawyerapp' => [
				'title' => 'AdvocApp',
				'category' => $this->category(['A']),
				'client' => 'Skyware',
				'year' => '2020',
				'url' => null,
				'sector' => 'Public',
				'description' => 'Sistem Informasi untuk Lawyer',
			],
			'erp' => [
				'title' => 'SkyErp',
				'category' => $this->category(['D']),
				'client' => 'Skyware, Globalindo Asia Sejahtera, Prima Multi Artha, KNS, QQ, JNE Depok',
				'year' => '2018',
				'url' => null,
				'sector' => 'Company',
				'description' => 'Enterprise Resource Planning untuk management data Sales, Purchase, Production, Stock, Inventory, Human Resources, etc',
			],
			'tanya_dokter' => [
				'title' => 'TanyaDokter',
				'category' => $this->category(['A']),
				'client' => '-',
				'year' => '2017',
				'url' => null,
				'sector' => 'Public',
				'description' => 'Sistem Informasi konsultasi kesehatan secara Online',
			],
			'as' => [
				'title' => 'SMK ADI SANGGORO',
				'category' => $this->category(['A']),
				'client' => '-',
				'year' => '2017',
				'url' => 'http://www.adisanggoro.sch.id/',
				'sector' => 'Public',
				'description' => 'Official Website SMK Adi Sanggoro & Sistem PPDB (Penerimaan Peserta Didik Baru) Online',
			],
			'legendnet' => [
				'title' => 'PT. LEGEND NET INDONESIA',
				'category' => $this->category(['A', 'D']),
				'client' => '-',
				'year' => '2017',
				'url' => null,
				'sector' => 'Company',
				'description' => 'Manajemen Data Perusahaan PT. LEGEND NET INDONESIA',
			],
		];

		if (empty($detail[$name])) {
			echo 'Opps, something wrong!!!';
			exit();
		}
		$get_detail = $detail[$name];

		$image_dir = '../assets/img/portfolio/'.strtolower($name).'/';
		$get_detail['images'] = glob($image_dir."*.{png,PNG,jpg,JPG,jpeg,JPEG}", GLOB_BRACE);

		$data['detail'] = $get_detail;
		$this->load->view('portfolio/detail', $data, FALSE);
	}

	private function category($arr_type){
		$types = [
			'A' => 'Sistem Informasi',
			'B' => 'Landing Page',
			'C' => 'E-Commerce',
			'D' => 'Enterprise Resource Planning',
		];
		$result = [];
		foreach ($arr_type as $type) {
			if (!empty($types[$type])) {
				$result[] = $types[$type];
			}
		}
		return implode(', ', $result);
	}
}
