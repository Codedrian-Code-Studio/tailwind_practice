<?php

class UserModel extends CI_Model {
    public function validate_input($data) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'name', 'required|trim|regex_match[/^[^0-9]+$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[100]');

        $result['name_valid'] = $this->form_validation->run(['name' => $data['name']]);
        $result['password_valid'] = $this->form_validation->run(['password' => $data['password']]);

        return $result;
    }

}
// else {
//             return array(
//                 "isValid"=> TRUE,
//                 "message"=> '<span class="text-green-500"></span>'
//             );
//         }
