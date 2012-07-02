<?php

$mapper = function($event) {
    return array(
        'handlerfile' => '/local/fake/lib.php',
        'handlerfunction' => array('fake_enrollment_events', $event),
        'schedule' => 'instant'
    );
};

$events = array('ues_list_provider', 'ues_load_provider');

$handlers = array_combine($events, array_map($mapper, $events));
