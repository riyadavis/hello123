<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExamDatabase extends CI_Model {

    public function insertItems()
    {
        $insertData = array('itemName'=>$this->input->post('itemName'),
                            'description'=>$this->input->post('description')
                            );
        
        if($_POST['itemName']!=null && $_POST['description']!=null)
        {
            $this->db->insert('items',$insertData);
            return "inserted";
        }
        else
        {
            return "failed";
        }
    }

    public function home()
    {
        $items = $this->db->query("select * from items")->result_array();
        return $items;
    }

    public function search()
    {
        $q = $this->input->get('q');
        $flag = $this->db->query("select * from items where itemName like'%$q%'")->result_array();
        return $flag;
    }

    public function visitors()
    {
    //     $ip = $this->input->ip_address();
    //    $ipAddress = $this->session->set_userdata('ip', $ip); echo $ip;
    //     return  $ipAddress;
    }

}