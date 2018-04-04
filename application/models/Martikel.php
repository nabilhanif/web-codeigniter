<?php
/**
 * Description of Martikel
 *
 * @author USER
 */
class Martikel extends CI_Model{
  function create($data){
       return $this->db->insert('pc_post', $data);
    }
    
    function read(){
         //$this->db->order_by("id_post","asc");
         //return $this->db->get('pc_post')->result();
        
        //query join secara query
        //$query = $this->db->query('select * from pc_post a, pc_katpost b '
        //   ' where a.id_katpost=b.id_katpost');
        //return $query->result();
        
        //query join secara AR
         $this->db->select('*');
         $this->db->from('pc_post a');
         $this->db->join('pc_katpost b', 'a.id_katpost = b.id_katpost');
         $query =  $this->db->get();
         return $query->result();
    }
    
    function update($id){
         $tglpost = $this->input->post('tahun').'-'.$this->input->post('bln').'-'.$this->input->post('tgl');
         $data = array(
             'judul' => $this->input->post('judul'),
             'slug_post' => '',
             'headline' => $this->input->post('headline'),
             'isi_post' => $this->input->post('isi_post'),
             'tgl_post' => $tglpost,
             'id_katpost' => $this->input->post('id_katpost'),
             'id_admin' => $this->session->userdata('id_admin')
         );
         $this->db->where('id_post', $id);
         $this->db->update('pc_post', $data);
    }
    
    function delete($id){
        $this->db->where('id_post', $id);
        return $this->db->delete('pc_post');
    }
    
    function get_id($id){
        $this->db->where("id_post", $id);
        return $this->db->get('pc_post')->result();
    }
    
    function list_kategori_post(){
        $this->db->order_by('kategori_post', 'asc');
        $result = $this->db->get('pc_katpost');
        if ($result->num_rows()>0){
            return $result->result_array();
        }else{
            return array();
        }
    }
    
    function post_aktif($id){
        $query = $this->db->query("update pc_post set post_aktif='1' where id_post='$id'");
        return $query;
    }
    
    function post_nonaktif($id){
        $query = $this->db->query("update pc_post set post_aktif='0' where id_post='$id'");
        return $query;
    }
    
}
    
     