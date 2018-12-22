<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiModel extends CI_Model {

    public function sign($phone_number,$password,$name,$surname)
    {
       
   

    $sql_query_to_check_phone_number_exist ="SELECT CUSTOMER_MOBILE_NUMBER FROM DIM_CUSTOMER where CUSTOMER_MOBILE_NUMBER ='".$phone_number."';";

    $sql_insert_new_customer  = "INSERT INTO DIM_CUSTOMER (`CUSTOMER_NAME`, `CUSTOMER_SURNAME`, `CUSTOMER_MOBILE_NUMBER`) 
                                    VALUES ('".$name."', '".$surname."', '".$phone_number."');";
    //echo $sql_insert_new_customer;
    $sql_last_insert_id = "SELECT LAST_INSERT_ID() as ID;";


 
            try{

                    // Get DB Object
            

                    //echo $sql_query_to_check_phone_number_exist;

                    $existingUsers = $this->db->query($sql_query_to_check_phone_number_exist);

                    //$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $rowCountUsers = $existingUsers->num_rows();

                    //  $db = null;

                    if($rowCountUsers == 0 ){

                        $insertUser = $this->db->query($sql_insert_new_customer);


                        $getLastInsetId = $this->db->query($sql_last_insert_id);
                        $fetched_data = $getLastInsetId->result();

                        $customer_generated_id = $fetched_data['ID'];

                        $sql_insert_password = "INSERT INTO DIM_CUSTOMER_CREDENTIALS (`CUSTOMER_ID`, `PASSWORD`, `PASSWORD_STATUS`, `UPDATED_TS`) 
                                                VALUES ('".$customer_generated_id."', '".$password."', 'ACTIVE', NOW());";

                        $insert_credentials = $this->db->query($sql_insert_password);

                        echo '{"success": "true", "error_code": "0", "error_message": "No error"}';


                        

                    }
                    else{
                        echo '{"success": "false", "error_code": "2", "error_message": "Phone Number is already Exist"}';

                    }
                    

            } 
            catch(PDOException $e){

                    echo '{"success": "false", "error_code": "1", "error_message": "Server Down"}';

            }

}

}