<?php   
    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;
   
class Menu extends REST_Controller {
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

    public function index_get($dateMenu = '0') {        
        if(!empty($dateMenu)){            
            $data = $this->db->get_where("AllPlatMenu", ['dateMenu' => $dateMenu])->result_array();        
        }else{            
            $data = $this->db->get("AllPlatMenu")->result();        
        }             
        $this->response($data, REST_Controller::HTTP_OK); 
    }
    
    public function index_post() {
        $input = $this->input->post();
        $this->db->insert('menu', $input);
        $this->response(['Menu created successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_put($idMenu){
        $input = $this->put();
        $this->db->update('AllPlatMenu', $input, array('idMenu'=>$idMenu));
        $this->response(['AllPlatMenu updated successfully'], REST_Controller::HTTP_OK);
    }

    public function index_delete($idMenu){        
        $this->db->delete('AllPlatMenu', array('idMenu'=>$idMenu));               
        $this->response(['AllPlatMenu deleted successfully.'], REST_Controller::HTTP_OK );    
    } 
}
?>    