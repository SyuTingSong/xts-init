<?php
function index() {
    X::view()
        ->setPageTitle('Hello world')
        ->render('index', array(
        'to' => 'world',
    ), '1');
}
