<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 18.03.2015
 * Time: 15:25
 */

return array(

    '0' => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule'     => null,
        'data'        => null
    ),
    '1' => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'User',
        'children'    => array(
            0, // унаследуемся от гостя
        ),
        'bizRule'     => null,
        'data'        => null
    ),
    '2' => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Administrator',
        'children'    => array(
            3,
        ),
        'bizRule'     => null,
        'data'        => null
    ),
    '3' => array(
        'type'        => CAuthItem::TYPE_ROLE,
        'description' => 'Moderator',
        'children'    => array(
            1,
        ),
        'bizRule'     => null,
        'data'        => null
    ),
);