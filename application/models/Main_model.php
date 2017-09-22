<?php class Main_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

    /* SELECT */
    function get($table){
        return $this->db->get($table)->result();
    }

    function get_select($table, $select){
        $this->db->select($select);
        return $this->db->get($table)->result();
    }

    function get_query($query){
        return $this->db->query($query)->result();
    }

    function get_where($table, $where){
        return $this->db->get_where($table, $where)->result();
    }

    function get_where_row($table, $where){
        return $this->db->get_where($table, $where)->row();
    }

    /* INSERT */
    function insert($table, $data){
        $this->db->set('insert_dt', 'NOW()', false);
        $this->db->insert($table, $data);
    }

    function insert_update($table, $data, $where){
        $beforeData=$this->db->get_where($table, $where)->row();

        $column=($table=='user')? 'updated':'insert_dt';
        $this->db->set($column, 'NOW()', false);
        if(sizeof($beforeData)==0): $this->db->insert($table, $data);
        else:
            $this->db->where('id', $beforeData->id);
            $this->db->update($table, $data);
        endif;
    }

    /* NUM_ROW */
    function get_num_row($table, $where){
        $this->db->where($where);
        $this->db->from($table);
        return $this->db->count_all_results();
    }
}