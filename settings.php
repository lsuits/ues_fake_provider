<?php

defined('MOODLE_INTERNAL') or die();

if ($hassiteconfig) {

    $setting_page = new admin_settingpage(
        'local_fake', get_string('pluginname', 'local_fake')
    );

    $ues_lib = $CFG->dirroot . '/enrol/ues/publiclib.php';

    if (file_exists($ues_lib)) {
        require_once $ues_lib;
        ues::require_extensions();

        require_once dirname(__FILE__) . '/provider.php';

        $provider = new fake_enrollment_provider();
        $provider->settings($setting_page);

        $ADMIN->add('localplugins', $setting_page);
    }
}
