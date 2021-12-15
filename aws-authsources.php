<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'user1@example.com',
            'https://aws.amazon.com/SAML/Attributes/Role' => array('arn:aws:iam::111122223333:role/athena-saml-idp,arn:aws:iam::111122223333:saml-provider/athena-saml-idp'),
            'https://aws.amazon.com/SAML/Attributes/RoleSessionName' => array('user1'),
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
    ),

);
