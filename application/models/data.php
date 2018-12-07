<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of data
 *
 * @author lokesh
 */
class data extends CI_Model{
    
    public function __construct() {
    $this->load->database();
    
    }
    
    
        public function get_task_details(){
            $query= $this->db->get('time_information');
            return $query->result_array();
            
        }
        public function saverecords($working_on,$category,$time,$date){
// Inserting in Table(time Information) of Database
    $query="insert into time_information(working_on,category,time,date) values('$working_on','$category','$time','$date')";
$this->db->query($query);

}
    
}