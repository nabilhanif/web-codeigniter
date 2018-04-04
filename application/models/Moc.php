<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Moc
 *
 * @author klidang lor
 */
class Moc extends CI_Model{
    
    function  showAboutUs(){
        $this->db->order_by("id_about","asc");
        return $this->db->get('pc_aboutus')->result();
    }
    
    function getAboutUs(){
        $this->db->where("id_about",$id);
        $this->db->order_by("id_about","asc");
        return $this->db->get('pc_aboutus')->result();
    }
    
    function getAboutUs_byslug($id){
        $this->db->where("slug_judul",$id);
        $this->db->order_by("id_about","asc");
        return $this->db->get('pc_aboutus')->result();
    }
    
    function showPost($num, $offset){
        $this->db->select('*')->join('pc_admin','pc_admin.id_admin=pc_post.id_admin');
        $this->db->where("post_aktif","1");
        $this->db->order_by("tgl_post","desc");
        return $this->db->get('pc_post', $num, $offset)->result();
    }
    
    function postLike($id){
        $query = $this->db->query("update pc_post set jml_like=jml_like+1 where id_post='$id'");
        return $query;
    }
    
    function postShare($id){
        $query = $this->db->query("update pc_post set jml_share=jml_share+1 where id_post='$id'");
        return $query;
    }
    
    function showKategoriBlog($num, $offset, $idkat){
        $this->db->select('*')->join('pc_admin','pc_admin.id_admin=pc_post.id_admin');
        $this->db->where("post_aktif","1");
        $this->db->where("id_katpost",$idkat);
        $this->db->order_by("tgl_post","desc");
        return $this->db->get('pc_post', $num, $offset, $idkat)->result();
    }
    
    function showKategoriBlog_byslug($num, $offset, $idkat){
        $this->db->select('*');
        //$this->db->from('pc_post);
        $this->db->join('pc_katpost', 'pc_katpost.id_katpost = pc_post.id_katpost');
        $this->db->join('pc_admin', 'pc_admin.id_admin = pc_post.id_admin');
        $this->db->where('pc_post.post_aktif', 1);
        $this->db->where('pc_katpost.slug_katpost',$idkat);
        $this->db->order_by("tgl_post","desc");
        return $this->db->get('pc_post', $offset, $idkat)->result();
    }
    
    function showLatestPost() {
        $this->db->where("post_aktif", "1");
        $this->db->order_by("tgl_post","desc");
        $this->db->limit(3);
        return $this->db->get('pc_post')->result();
    }
    
    function getPost($id) {
        $this->db->select('*')->join('pc_admin','pc_admin.id_admin=pc_post.id_admin');
        $this->db->where("post_aktif","1");
        $this->db->where("id_post",$id);
        $this->db->order_by("id_post","asc");
        return $this->db->get('pc_post')->result();
    }
    
    function getPost_byslug($id){
        $this->db->select('*')->join('pc_admin','pc_admin.id_admin=pc_post.id_admin');
        $this->db->where("post_aktif","1");
        $this->db->where("slug_post",$id);
        $this->db->order_by("id_post","asc");
        return $this->db->get('pc_post')->result();
    }
    
    function showKategoriPost($id){
        $this->db->where("id_katpost",$id);
        $this->db->order_by("id_post","desc");
        return $this->db->get('pc_post')->result();
    }
    
    function showKategori(){
        $query = $this->db->query("select a.id_katpost, b.kategori_post, b.slug_katpost, "
                . "count(a.id_post) as jml from pc_post a, pc_katpost b where "
                . "a.id_katpost=id_katpost and a.post_aktif='1' group by a.id_katpost order by a.id_katpost");
        return $query->result();
    }
    
    
}
