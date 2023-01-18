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
            'https://aws.amazon.com/SAML/Attributes/Role' => array('arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':role/athena-saml-idp,arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':saml-provider/athena-saml-idp'),
            'https://aws.amazon.com/SAML/Attributes/RoleSessionName' => array('user1'),
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user2@example.com',
        ),
        'user3:user3pass' => array(
            'uid' => array('3'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'user3@example.com',
            'https://aws.amazon.com/SAML/Attributes/Role' => array(
                'arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':role/redshift-saml-noaccess-role,arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':saml-provider/redshift-saml-idp',
                'arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':role/redshift-saml-role,arn:aws:iam::'.getenv('AWS_ACCOUNT_ID').':saml-provider/redshift-saml-idp'
            ),
            'https://aws.amazon.com/SAML/Attributes/RoleSessionName' => 'user3@example.com',
            // 'https://redshift.amazon.com/SAML/Attributes/DbUser' => 'user3@example.com',
            // 'https://redshift.amazon.com/SAML/Attributes/AutoCreate' => 'true',
            // 'https://redshift.amazon.com/SAML/Attributes/DbGroups' => array('readonly_group'),
        ),
    ),

);
