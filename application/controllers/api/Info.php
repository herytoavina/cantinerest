<?php   

    var_dump(scandir(APPPATH . "/librar ies/"));
    require APPPATH . "libraries/REST_Controller.php";
    use Restserver\Libraries\REST_Controller;
   
class Info extends REST_Controller {
    /** 
     * Get All Data from this method.
     * 
     * @return Response
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /** 
     * Get All Data from this method.
     * 
     * @return Response
     */    
    public function index_get() {        
        
        $this->response("ANDRIMANDROSO HERY TOAVINA - ETU000968"); 
    }

}
?>    