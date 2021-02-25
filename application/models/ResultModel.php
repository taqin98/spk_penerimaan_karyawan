<?php
class ResultModel extends CI_Model
{
	private $_table = 'tb_hasil';
	
	public function insertTest($arrData)
	{
		$data = $this->db->insert('tb_hasil', $arrData);
		if($data)
			return true;
		else
			return false;
	}

	public function getAllData()
	{
		$data = $this->db->query('SELECT * from tb_hasil JOIN tb_profile using(ktp_id) order by nama asc');
		return $data->result();
	}

	public function deleteData($id)
	{
		return $this->db->delete('tb_hasil', array('ktp_id' => $id));
	}

	public function editData($id)
	{
		return $this->db->get_where('tb_hasil', array('ktp_id' => $id))->row();
	}

	public function updateTest($arrData)
	{
		$data = $this->db->replace('tb_hasil', $arrData);
		if($data)
			return true;
		else
			return false;
	}
}
?>