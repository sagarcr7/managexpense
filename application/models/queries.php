<?php 
    class queries extends CI_Model{

        public function getPosts(){
            $query = $this->db->get('account_tbl');
            
                return $query->result();
        }

        public function addPost($data){
            return $this->db->insert('account_tbl', $data);
        }

        public function getSinglePosts($id){
            $query = $this->db->get_where('account_tbl', array('SN'=> $id));
            if ($query->num_rows() >0){
                return $query->row();
            }
        }

        public function deletePosts($id){
            return $this->db->delete('account_tbl', ['SN'=>$id]); 
        }

        public function resetPosts(){
            return $this->db->empty_table('account_tbl');
        }

        public function updatePost($data, $id){
            return $this->db->where('SN', $id)->update('account_tbl', $data);
        }

    }
?>
