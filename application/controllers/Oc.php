<?php if (!defined('BASEPATH')) exit('No direct script allowed');

/**
 * Description of Oc
 *
 * @author USER
 */
class Oc extends CI_Controller{
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->model('Moc');
    }
    
    function index(){
        $data['title'] = "Oemah Codinger";
        $data['description'] = "Sekolang Pemrograman Software Pekalongan";
        $data['content'] = "home";
        $data['dataaboutus'] = $this->Moc->showAboutUs();
        $this->load->view('main', $data);
    }
}
