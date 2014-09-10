 <?php
class Hello extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        echo "<h3>Hello CodeIgniter Framework - QHOnline.Info</h3>";
    }
}