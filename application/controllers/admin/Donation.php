<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model', 'Common_model');
        $this->load->model('admin/Enquiry_model', 'Enquiry_model');
        date_default_timezone_set("Asia/Calcutta");
        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }
    function permission()
    {
        $con = array("id" => 1);
        $data['navbar'] = $this->Common_model->get_data("navbar", $con, "*");
        return $data;
    }

   

// ========================================================= 
    function manage_donation()
    {

        $data = $this->permission();
        $data['title']="Donation Enquiry";
        $data['breadcrums']="Donation Enquiry";
        $data['donation_enquiry']=$this->Enquiry_model->all_data(" admin_donation_enq","*");
        $this->load->view("admin/enquiry/donation",$data);
    }


    function view_donation_enquiry()
    {
        if($this->input->Is_ajax_request())
        {
            $val=$this->input->post();
            $data['doa_enq']=$this->Common_model->get_data("admin_donation_enq",$val,"*");
            $this->load->view("admin/enquiry/view_donation_details",$data);
        }
    }


    function delete_donation_enquiry()
    {
      $msg=array("Something Went Wrong");
      if($this->input->is_ajax_request())
         {
            $val=$this->input->post();
          
            $deleted=$this->Common_model->del_data_con("admin_donation_enq",$val);
           
            if(!empty($deleted))
            {
              $data=array("text"=>"Deleted Successfully" ,"icon"=>"success");
            }
            else{
              $data=array("text"=>$msg ,"icon"=>"error");
            }
         }
         else{
          $data=array("text"=>$msg ,"icon"=>"error");
         }
         echo json_encode($data);

    }




    function old_enquiry()
    {
        $msg=array("Something Went Wrong");
        if($this->input->is_ajax_request())
           {
              $val=$this->input->post();
              $data=array("status"=>1);
              $update=$this->Common_model->update_data("admin_enquiry",$val,$data);
             
              if(!empty($update))
              {
                $data=array("text"=>"Enquiry updated Successfully" ,"icon"=>"success");
              }
              else{
                $data=array("text"=>$msg ,"icon"=>"error");
              }
           }
           else{
            $data=array("text"=>$msg ,"icon"=>"error");
           }
           echo json_encode($data);

    }

    function new_enquiry()
    {
        $msg=array("Something Went Wrong");
        if($this->input->is_ajax_request())
           {
              $val=$this->input->post();
              $data=array("status"=>0);
              $update=$this->Common_model->update_data("admin_enquiry",$val,$data);
             
              if(!empty($update))
              {
                $data=array("text"=>"Enquiry updated Successfully" ,"icon"=>"success");
              }
              else{
                $data=array("text"=>$msg ,"icon"=>"error");
              }
           }
           else{
            $data=array("text"=>$msg ,"icon"=>"error");
           }

           echo json_encode($data);
    }

  

    

}
