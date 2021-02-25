<?php
class ProfileModel extends CI_Model
{
	private $_table = 'tb_profile';

	public function getAllData()
	{
		$data = $this->db->get('tb_profile');
		return $data->result();
	}
	public function insertProfile($arrData)
	{
		$data = $this->db->insert('tb_profile', $arrData);
		if($data)
			return true;
		else
			return false;
	}

	public function updateProfile($arrData)
	{
		$data = $this->db->replace('tb_profile', $arrData);
		if($data)
			return true;
		else
			return false;
	}

	public function getProfile($id)
	{
		$data = $this->db->get_where('tb_profile', array('ktp_id' => $id));
		return $data->row();
	}

	public function deleteData($id)
	{
		return $this->db->delete('tb_profile', array('ktp_id' => $id));
	}
}
?>