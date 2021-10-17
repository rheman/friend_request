<?php
/**
 * Friend Request
**/
return [
        'plugin' => [
                'version' => '4.0',
		'name' => 'Friend Request',
                'dependencies' => [
                        'profile' => [
                                'must_be_active' => true,
                                'position' => 'after',
                        ],
                ],
        ],
	'bootstrap' => \ColdTrick\FriendRequest\Bootstrap::class,
	'actions' => [
		'friends/add' => [],
		'friends/remove' => [
			'filename' => __DIR__ . '/actions/friends/removefriend.php',
		],
		'friend_request/approve' => [],
		'friend_request/decline' => [],
		'friend_request/revoke' => [],
	],
	'routes' => [
		'collection:user:user:friend_request' => [
			'path' => '/friend_request/{username}',
			'resource' => 'friend_request',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
		],
	],
];
