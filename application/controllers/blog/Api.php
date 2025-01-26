<?php

class Api extends CI_Controller
{
    var $post_model;

    var $input;
    var $db;
    var $output;

    function __construct()
    {
        parent::__construct();
        $this->load->model('blog/post_model');
        // HACK: $this->db should be loaded by this time
        $debug = true;
        if ($debug) {
            $this->output->enable_profiler(true);
        } else {
            header('Content-Type: application/json');
        }
    }

    function get_posts()
    {
        $posts = $this->post_model->find_all();
        echo json_encode(array('status' => 'OK', 'posts' => $posts));
    }

    function get_post() {}

    function save_post()
    {
        if ($this->input->post()) {
            $post = post_form();
            $post_id = $this->post_model->save($post);
            echo json_encode(array('status' => 'OK', 'post_id' => $post_id));
        }
    }

    function update_post() {}




    // TODO: User functions for Auth
    private function read_by_username_and_password($username, $password)
    {
        $user = $this->db->get_where('users', array('email' => $username))->row();
        if ($user &&  password_verify($password, $user->password)) {
            return $user;
        }
        return null;
    }

    private function save_user_token($user_token)
    {
        $this->db->insert('user_tokens', $user_token);
        return $user_token['token'];
    }

    function login()
    {
        if ($this->input->post()) {
            list($username, $password) = array(
                $this->input->post('username'),
                $this->input->post('password')
            );
            $user = $this->read_by_username_and_password($username, $password);
            if ($user) {
                $token = md5(uniqid(rand(), true));
                $user_token = array(
                    'user_id' => $user->id,
                    'token' => $token,
                );
                $token = $this->save_user_token($user_token);
                echo json_encode(array('status' => 'OK', 'token' => $token));
            } else {
                echo json_encode(array('status' => 'Not OK', 'message' => 'Invalid username or password'));
            }
        } else {
            echo json_encode(array('status' => 'Not OK', 'message' => 'Invalid request'));
        }
    }
    // End user functions, may not be needed since it might be included in Auth library
}
