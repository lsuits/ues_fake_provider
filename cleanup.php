<?php

require_once dirname(__FILE__) . '/cleanuplib.php';
require_once dirname(__FILE__).'/../../config.php';

require_login();

require_capability('moodle/site:config', get_context_instance(CONTEXT_SYSTEM));

cleanup_fake_data(false);

redirect(new moodle_url('/admin/settings.php', array('section' => 'enrolsettingsues')));
