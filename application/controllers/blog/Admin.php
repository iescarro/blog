<?php

/**
 * Blog
 *
 * Minimalist personal publishing platform
 *
 * Copyright (c) 2025 Blog. All rights reserved.
 *
 * Blog and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
class Admin extends CI_Controller
{
    var $layout;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['html', 'url', 'form', 'post']);
        $this->load->library(['form_validation', 'layout']);
        $this->load->model(['post_model']);
        $this->layout->set('layouts/app');
    }

    function login()
    {
        $this->layout->view('blog/admin/login');
    }
}
