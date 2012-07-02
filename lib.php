<?php

abstract class fake_enrollment_events {
    public static function ues_list_provider($data) {
        $data->plugins += array('fake' => get_string('pluginname', 'local_fake'));
        return true;
    }

    public static function ues_load_fake_provider($data) {
        require_once dirname(__FILE__) . '/provider.php';
        return true;
    }
}
