<?php   
    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;
   
class PlatCommande extends REST_Controller {
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
    
    public function index_post() {
        $input = $this->input->post();
        $this->db->insert('PlatCommande', $input);
        $this->response(['PlatCommande created successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_get($numetu = '0') {        
        if(!empty($numetu)){            
            $data = $this->db->get_where("montant_total", ['numETU' => $numetu])->result_array();        
        }else{            
            $data = $this->db->get("montant_total")->result();        
        }             
        $this->response($data, REST_Controller::HTTP_OK); 
    }

}
?>    