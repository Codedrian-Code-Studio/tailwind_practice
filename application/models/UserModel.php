<?php

class UserModel extends CI_Model {
    public function validate_input() {
        $this->load->library('form_validation');

        //sanitize input
        $name = $this->input->post('name', TRUE);
        $password = $this->input->post('password', TRUE);
        $this->form_validation->set_data(array(
            "name" => $name,
            "password" => $password
        ));
        $this->form_validation->set_rules('name', 'name', 'required|trim|regex_match[/^[^0-9]+$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[100]');

        $this->form_validation->run();
        return array(
            "name" => $name,
            "password" => $password
        );
    }

}
