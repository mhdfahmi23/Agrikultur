<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function get_image()
  {
    $this->db->select('*');
    $this->db->from('filefoto');
    $query = $this->db->get();
    return $query->result;
  }

  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('image')->row();
  }

  public function insert($data)
  {
    $this->db->insert('image', $data);
  }

  public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('image', $data);
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('image');
  }

}
  