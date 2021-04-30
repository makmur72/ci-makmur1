<?php
defined('BASEPATH') or exit('no direct script acces allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array(1,17124000987,'Abdillah Faqih','Laki-laki',2017)
			,array(2,17124000988,'Ahmad Syarif','Laki-laki',2017)
			,array(3,17124000989,'Ummi Qulsum,','Perempuan',2017)
			,array(4,17124000987,'Abduh Somat','Laki-laki',2018)
			,array(5,17124000988,'Soleh Mukarom','Laki-laki',2018)
		);

		return $cars;
	}
}