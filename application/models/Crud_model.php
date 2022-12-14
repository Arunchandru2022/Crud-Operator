<?php
class Crud_model extends CI_Model {


        public function get_entries()
        {
                $query = $this->db->get('curd');
                if (count($query->result()) > 0) {
                	return $query->result();
                }
                
        }

        public function insert_entry($data)
        {

            return $this->db->insert('curd', $data);
        }

        public function delete_entry($id)
        {
         $this->db->delete('curd',  array('id' => $id));
        }

        public function edit_entry($id)
	    {
	        $this->db->select("*");
	        $this->db->from("curd");
	        $this->db->where("id", $id);
	        $query = $this->db->get();
	        if (count($query->result()) > 0) {
	            return $query->row();
	        }
	    }


        public function update_entry($data)
    {
        return $this->db->update('curd', $data, array('id' => $data['id']));
    }

}

?>