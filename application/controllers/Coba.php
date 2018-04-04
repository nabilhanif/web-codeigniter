<?php if (!defined('BASEPATH')) exit('No direct script allowed');

/**
 * Description of Oc
 *
 * @author USER
 */
class Coba extends CI_Controller{
    //put your code here
    /*function_construct : fungsi yang akan dijalankan pertama kali
     * ketika file controller ini dipanggil
     * Cara akses url :
     * https://localhost/folder_web/index.php/nama_controller/nama_fungsi
     * https://localhost/webci/index.php/Coba/
     * 
     * untuk meghilangkan index.php pada url
     * 1.lakukan pengaturan pada file config didalam folder config
     *      $config['base_url'] = 'alamat_web';
     *      $config['index_page'] = '';
     * 2.ubah file .htaccess pada folder application
     * 3.copy paste file .htaccess ke folder source files
     * 
     * untuk megatur koneksi database buka file database pada folder config
     * 
     * panggil libraries dan helper yang dibutuhkan pada file autoload
     */
    public function __construct(){
        parent::__construct();
    }
    
    function index(){
        echo 'Hello World!';
    }
    
    function coba_lagi(){
        echo 'lagi ngoprek CI gan !';
    }
}
