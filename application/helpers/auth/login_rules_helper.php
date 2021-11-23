<?php

function get_login_rules() {
    return array(
        array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'El %s es requerido.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'La %s es requerido.',
            ),
        ),
    );
}