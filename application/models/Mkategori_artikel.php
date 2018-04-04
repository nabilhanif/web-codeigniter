<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mkategori_artikel
 * $data = array() untuk mengeset field dan nilai yang diinputkan
 * $this->input->post('kategori_post') : elemen input form ==> mirip $POST[txt]
 * $this->input->post : bisa ditaruh di models atau controller
 * @author USER
 */
class Mkategori_artikel extends CI_Model{
    
    function create(){
       $data = array(
           'kategori_post' => $this->input->post('kategori_post'),
           'slug_katpost' => ''
       );
       return $this->db->insert('pc_katpost', $data);
    }
    
    function read(){
        $this->db->order_by("kategori_post","asc");
        return $this->db->get('pc_katpost')->result();
    }
    
    function update($id){
         $data = array(
           'kategori_post' => $this->input->post('kategori_post'),
           'slug_katpost' => ''
       );
       $this->db->where('id_katpost', $id);
       return $this->db->update('pc_katpost', $data);
    }
    
    function delete($id){
        $this->db->where('id_katpost', $id);
        return $this->db->delete('pc_katpost');
    }
    
    function get_id($id){
        $this->db->where("id_katpost", $id);
        return $this->db->get('pc_katpost')->result();
    }

}
