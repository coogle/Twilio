<?php

return array(
	'router' => array(
		'routes' => array(
			'twilio-sms-callback' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
					'options' => array(
						'route'	=> '/twilio-sms-callback',
						'defaults' => array(
							'controller' => 'Twilio\Controller\Callback',
							'action'	 => 'smsCallback',
						),
					)
				)
			)
	),
	'controllers' => array(
		'invokables' => array(
			'Twilio\Controller\Callback' => 'Twilio\Controller\CallbackController'
		),
	)
);
