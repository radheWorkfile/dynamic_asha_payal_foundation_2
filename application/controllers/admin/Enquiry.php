<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiry extends CI_Controller
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


    function manage_enquiry()
    {
        $data = $this->permission();
        $data['title']="Enquiry";
        $data['breadcrums']="Enquiry";
        $data['enquiry']=$this->Enquiry_model->all_data("admin_enquiry","*");
        // echo "<pre>"; print_r($data['enquiry']);die;
        $this->load->view("admin/enquiry/manage",$data);
    }

    function view_enquiry()
    {
        if($this->input->Is_ajax_request())
        {
            $val=$this->input->post();
            $data['enquiry']=$this->Common_model->get_data("admin_enquiry",$val,"*");
            $this->load->view("admin/enquiry/view",$data);
        }
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

    function delete_enquiry()
    {
      $msg=array("Something Went Wrong");
      if($this->input->is_ajax_request())
         {
            $val=$this->input->post();
          
            $deleted=$this->Common_model->del_data_con("admin_enquiry",$val);
           
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


    public function donation_enquery()
    {
     
      $this->form_validation->set_rules('fname',  'First Name', 'required');
      $this->form_validation->set_rules('lname',  'Last Name', 'required');
      $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
      $this->form_validation->set_rules('email', 'Email Id', 'trim|required|valid_email');
      $this->form_validation->set_rules('address', 'Address', 'required');
      $this->form_validation->set_rules('amount', 'Amount', 'required');
      // $this->form_validation->set_rules('payment_img', 'Add Payment Screenshot *', 'required');

      if($this->form_validation->run() == TRUE) {

          $value = $this->input->post();

          $config['upload_path']  = './uploads/payment_details/';
          $config['allowed_types']  = 'gif|jpg|png|jpeg';
           $this->load->library('upload', $config);
           if (!$this->upload->do_upload('amo_detials')) {
             echo $this->upload->display_errors();
           } else {              
             $img_data = $this->upload->data();
             $image =  $img_data['file_name'];
           }
          $data = array(
              'first_name'       => $value['fname'],
              'last_name'     => $value['lname'],
              'mobile'      => $value['mobile'],
              'email'    => $value['email'],
              'address'    => $value['address'],
              'amount'    => $value['amount'],
              'payment_img'    => $image,
              'created_at' => date('Y-m-d')
          );
          if($this->db->insert('admin_donation_enq', $data)){
          
              $full_name      = $value['fname'].''.$value['lname'];
              $mobile    = $value['mobile'];
              $email     = $value['email'];
              $address     = $value['address'];
              $total_Amount  = $value['amount'];
      
              $to =       $email;
              $subject =  "Welcome to Asha Payal Foundation";
              $headers =  'MIME-Version: 1.0' . "\r\n";
              $headers .= 'From: ashapayalfoundation@gmail.com' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      
              $msg = "Hellow " . $name . "<br/> Welcome to Asha Payal Foundation ( company_name ) Just now you have successfully Payment. Hope your well. <hr/><br/>
              <hr/>";
      
              $full_message = "<html>
                  <head><title>Payment Details</title></head><body>
                  <table>
                  <tr><td>Name</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $full_name</td></tr>
                  <tr><td>Email Id</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $email</td></tr>
                  <tr><td>Mobile No</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $mobile</td></tr>
                  <tr><td>Paid Amount</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $total_Amount</td></tr>
                  <tr><td>Address</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $address</td></tr>
                  <tr><td>Name</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td><td> $msg</td></tr>
                  </table>
                  </body>
                  </html>";
              mail($to, $subject, $full_message, $headers);

            $data=array('text' => 'Successfully Added', 'icon' => 'success');
          }
         } else {
          // echo "Hello radhe@radhe";die;
          $data = array(
              'fname'        => form_error('fname'),
              'lname'        => form_error('lname'),
              'mobile'   => form_error('mobile'),
              'email'       => form_error('email'),
              'address'    => form_error('address'),
              'amount'    => form_error('amount'),
              // 'payment_img'    => form_error('payment_img'),

         );
         $data=array('text' => $data, 'icon' => 'error');
      }
      echo json_encode($data);
    }
    

}
