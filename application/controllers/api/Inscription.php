<?php   
    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;
   
class Inscription extends REST_Controller {
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
        $this->db->insert('etudiant', $input);
        $this->response(['etudiant created successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_put($numETU){
        $input = $this->put();
        $this->db->update('etudiant', $input, array('numETU'=>$numETU));
        $this->response(['etudiant updated successfully'], REST_Controller::HTTP_OK);
    }

}
?>    