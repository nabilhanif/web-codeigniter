<?php
/**
 * Description of Madmin
 *
 * @author USER
 */
class Madmin extends CI_Model{
    
    function check_login($id_admin, $pass){
        $this->db->where('id_admin', $id_admin); //baris 10,11,12 sama juga dengan perintah select
        $this->db->where('pass', $pass);
        return $this->db->get('pc_admin');
    }
}
