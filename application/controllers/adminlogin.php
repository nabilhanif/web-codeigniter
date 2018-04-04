<?php if (!defined('BASEPATH')) exit('No direct script allowed');


/**
 * Description of adminlogin
 *
 * @author USER
 * file atau class ini digunakan untuk mengatur halaman login/proses login
 */
class Adminlogin extends CI_Controller {
    //put your code here
     public function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
        if ($this->session->userdata('id_admin')) {
            if($this->session->userdata('level') == 'Administrator'){
                redirect('adminoc');
            }elseif($this->session->userdata('level') == 'Operator') {
                redirect('adminoc');
            }
        }
    }
    /*function untuk menampilkan halaman login
     * untuk mengakses url login ketikkan http://localhost/webci/adminlogin
     */
    function index(){
        $data['title'] = ".: Login Admin-OC"; //parameter yang akan dipanggil pada view
        $data['error']="";
        $this->load->view('view_admin/login', $data);
    }
    
    function auth(){
        $id_admin = $this->input->post('id_admin');
        $pass = md5($this->input->post('pass'));
        //calling check_login() function in Madmin.php
        $result = $this->Madmin->check_login($id_admin, $pass);
        
        if($result->num_rows() > 0){
            foreach ($result->result() as $row) {
                $id_admin = $row->id_admin;
                $nama_admin = $row->nama_admin;
                $level = $row->level;
                $foto = $row->foto;
            }
            
            $newdata = array(
                'id_admin' => $id_admin,
                'nama_admin' => $nama_admin,
                'level' => $level,
                'foto' => $foto
            );
            
            $this->session->set_userdata($newdata);
            if($this->session->userdata('level')=='Administrator'){
                redirect('adminoc');
            }elseif($this->session->userdata('level')== 'Operator'){
                redirect('adminoc');
            }
        }else{
            $data['title'] = ".: Login - OC - Admin :.";
            $data['error'] = "ID. Admin dan Password anda salah...";
            $this->load->view('view_admin/login', $data);
        }
    }
}
