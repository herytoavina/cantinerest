<?php   
    require APPPATH . "/libraries/REST_Controller.php";
    use Restserver\Libraries\REST_Controller;
   
class plat extends REST_Controller {
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

    public function index_get($idPlat = '0') {        
        if(!empty($idPlat)){            
            $data = $this->db->get_where("plat", ['idPlat' => $idPlat])->result_array();        
        }else{            
            $data = $this->db->get("plat")->result();        
        }             
        $this->response($data, REST_Controller::HTTP_OK); 
    }
    
    public function index_post() {
        $input = $this->input->post();
        $this->db->insert('plat', $input);
        $this->response(['plat created successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_put($idMenu){
        $input = $this->put();
        $this->db->update('plat', $input, array('idMenu'=>$idMenu));
        $this->response(['plat updated successfully'], REST_Controller::HTTP_OK);
    }

    public function index_delete($idMenu){        
        $this->db->delete('plat', array('idMenu'=>$idMenu));               
        $this->response(['plat deleted successfully.'], REST_Controller::HTTP_OK );    
    } 
}
?>    