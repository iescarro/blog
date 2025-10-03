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
class Dashboard extends CI_Controller
{
    var $post_view_model;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(['html', 'form', 'url', 'blog/post_view']);
        $this->load->library('session');
        redirect_if(!$this->session->userdata('user_id'), 'auth/login');
        $this->load->model(['blog/post_view_model']);
        $this->load->library('layout');
        $this->layout->set('blog/layouts/app');
    }

    function index()
    {
        $post_views = $this->post_view_model->find_group_by_day();
        // print_pre($post_views);
        list($column_chart_categories, $column_chart_data) = post_views_to_column_chart_data($post_views);
        // print_pre($column_chart_data);
        $data['column_chart_categories'] = $column_chart_categories;
        $data['column_chart_data'] = $column_chart_data;
        $this->layout->view('blog/dashboard', $data);
    }
}
