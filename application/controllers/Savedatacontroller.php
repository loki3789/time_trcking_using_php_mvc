<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Savedatacontroller
 *
 * @author lokesh
 */
class Savedatacontroller extends CI_Controller {
    //put your code here
    public function __construct()
{
//call CodeIgniter's default Constructor
parent::__construct();
//load database libray manually
$this->load->database();
//load Model
$this->load->model('data');
}
    public function savedata() {
        
 $working_on = $_REQUEST['working_on'];
$time =(int)$_REQUEST['time_elapsed'];
$category = $_REQUEST['category'];
$time=$time/10;
$hours = floor($time / 3600);
$minutes = floor(($time / 60) % 60);
$seconds = $time % 60;
$date = date("Y-m-d");
$duration="$hours:$minutes:$seconds";
echo $duration;

$this->data->saverecords($working_on,$category,$duration,$date);	
echo "Records Saved Successfully";
$head=base_url();
header('Location:'.$head.'index.php');
}
}