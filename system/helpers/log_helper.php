<?php 
function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe   = 0;
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = 1;
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = 2;
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = 3;
    }
    else{
        $log_tipe  = 4;
    }
 
    // paramter
    $param['username']      = $CI->session->userdata('username');
    $param['log_type']      = $log_tipe;
    $param['log_desc']      = $str;
 
    //load model log
    $CI->load->model('Auth/M_Log','m_log');
 
    //save to database
    $CI->m_log->save_log($param);
 
}
?>