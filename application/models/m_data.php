<?php
class M_data extends CI_model{
    function ambil_data(){
        return $this->db->get('user');
    }
}