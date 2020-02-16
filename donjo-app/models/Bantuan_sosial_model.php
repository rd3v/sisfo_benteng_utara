<?php

class Bantuan_sosial_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function full_bantuan($offset=0, $limit=50)
	{
		$paging_sql = ' LIMIT ' .$offset. ',' .$limit;
		$sql = "SELECT program.nama AS program,tweb_penduduk.nama AS nama,tweb_penduduk.nik AS nik, program.sdate AS mulai, program.edate AS akhir FROM program,program_peserta,tweb_penduduk WHERE program.id = program_peserta.program_id && program_peserta.kartu_nik = tweb_penduduk.nik";

		// $sql = "SELECT a.*,u.nama AS owner,k.kategori AS kategori FROM artikel a LEFT JOIN user u ON a.id_user = u.id LEFT JOIN kategori k ON a.id_kategori = k.id WHERE a.enabled=?
		// 	AND a.tgl_upload < NOW()
		// ORDER BY a.tgl_upload DESC";

		$sql .= $paging_sql;

		$query = $this->db->query($sql,1);
		$data  = $query->result_array();

		if ($query->num_rows()>0)
		{
			for ($i=0; $i<count($data); $i++)
			{
				$nomer = $offset + $i+1;
				$data[$i]['no'] = $nomer;

			}
		}
		else
		{
			$data  = false;
		}
		// die(json_encode($data));
		return $data;
	}

}
