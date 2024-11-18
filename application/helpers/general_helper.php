<?php

function dd($data){
    var_dump($data); 
    die;
}

function frontPage($view, $data = []){
    $CI = &get_instance();
    $data['content'] = $view;
    $CI->load->view('base_layout/front_layout', $data);
}

function dashPage($view, $data = []){
    $CI = &get_instance();
    $data['content'] = $view;
    $CI->load->view('base_layout/dash_layout', $data);
}

function upload64($files=false)
{
    $CI =& get_instance();
    if ($files != false )
    {
        $gambar = "";
        $tanggal = date('dmY');
        $username = $CI->session->userdata('username');
        if (!file_exists('assets/img/uploaded')) {
            mkdir('assets/img/uploaded', 0777, true);
        }

        $config = array(
            'upload_path' => './assets/img/uploaded/', 
            'file_name' => 'Foto'.'-'.$tanggal.'-'.date('his').'-'.$username.'-'.rand(1,10000000).'.jpg',
        );

        $output_file = $config['upload_path'].''.$config['file_name'];
        $data = explode( ',', $files );
        // var_dump($data);
        if ($data[0] != '')
        {
            $ifp = fopen($output_file, 'wb'); 
            // we could add validation here with ensuring count( $data ) > 1
            fwrite($ifp, base64_decode($data[1]));
            // clean up the file resource
            fclose( $ifp ); 

            return $config['file_name']; 
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}