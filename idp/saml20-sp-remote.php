<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata['urn:amazon:webservices'] = array (
  'entityid' => 'urn:amazon:webservices',
  'description' => 
  array (
  ),
  'OrganizationName' => 
  array (
    'en' => 'Amazon Web Services, Inc.',
  ),
  'name' => 
  array (
    'en' => 'AWS Management Console Single Sign-On',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'AWS',
  ),
  'url' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'expire' => 1705017600,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://signin.aws.amazon.com/saml',
      'index' => 1,
      'isDefault' => true,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-north-1.signin.aws.amazon.com/saml',
      'index' => 2,
      'isDefault' => false,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://me-south-1.signin.aws.amazon.com/saml',
      'index' => 3,
      'isDefault' => false,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-south-1.signin.aws.amazon.com/saml',
      'index' => 4,
      'isDefault' => false,
    ),
    4 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-west-3.signin.aws.amazon.com/saml',
      'index' => 5,
      'isDefault' => false,
    ),
    5 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-southeast-3.signin.aws.amazon.com/saml',
      'index' => 6,
      'isDefault' => false,
    ),
    6 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://us-east-2.signin.aws.amazon.com/saml',
      'index' => 7,
      'isDefault' => false,
    ),
    7 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://af-south-1.signin.aws.amazon.com/saml',
      'index' => 8,
      'isDefault' => false,
    ),
    8 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-west-1.signin.aws.amazon.com/saml',
      'index' => 9,
      'isDefault' => false,
    ),
    9 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-central-1.signin.aws.amazon.com/saml',
      'index' => 10,
      'isDefault' => false,
    ),
    10 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sa-east-1.signin.aws.amazon.com/saml',
      'index' => 11,
      'isDefault' => false,
    ),
    11 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-east-1.signin.aws.amazon.com/saml',
      'index' => 12,
      'isDefault' => false,
    ),
    12 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-northeast-2.signin.aws.amazon.com/saml',
      'index' => 13,
      'isDefault' => false,
    ),
    13 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-northeast-3.signin.aws.amazon.com/saml',
      'index' => 14,
      'isDefault' => false,
    ),
    14 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-west-2.signin.aws.amazon.com/saml',
      'index' => 15,
      'isDefault' => false,
    ),
    15 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-south-1.signin.aws.amazon.com/saml',
      'index' => 16,
      'isDefault' => false,
    ),
    16 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-northeast-1.signin.aws.amazon.com/saml',
      'index' => 17,
      'isDefault' => false,
    ),
    17 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://us-west-2.signin.aws.amazon.com/saml',
      'index' => 18,
      'isDefault' => false,
    ),
    18 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://us-west-1.signin.aws.amazon.com/saml',
      'index' => 19,
      'isDefault' => false,
    ),
    19 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-southeast-1.signin.aws.amazon.com/saml',
      'index' => 20,
      'isDefault' => false,
    ),
    20 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-southeast-2.signin.aws.amazon.com/saml',
      'index' => 21,
      'isDefault' => false,
    ),
    21 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ca-central-1.signin.aws.amazon.com/saml',
      'index' => 22,
      'isDefault' => false,
    ),
    22 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://me-central-1.signin.aws.amazon.com/saml',
      'index' => 23,
      'isDefault' => false,
    ),
    23 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-central-2.signin.aws.amazon.com/saml',
      'index' => 24,
      'isDefault' => false,
    ),
    24 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://eu-south-2.signin.aws.amazon.com/saml',
      'index' => 25,
      'isDefault' => false,
    ),
    25 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-south-2.signin.aws.amazon.com/saml',
      'index' => 26,
      'isDefault' => false,
    ),
    26 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ap-southeast-4.signin.aws.amazon.com/saml',
      'index' => 27,
      'isDefault' => false,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'attributes' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
    2 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.1',
    3 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.2',
    4 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.3',
    5 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.4',
    6 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.5',
    7 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
    8 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
    9 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.8',
    10 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.9',
    11 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
    12 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.11',
    13 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.2',
    14 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.3',
    15 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.4',
    16 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.5',
    17 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.6',
    18 => 'urn:oid:2.5.4.3',
  ),
  'attributes.required' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDbTCCAlWgAwIBAgIEZxyd3TANBgkqhkiG9w0BAQsFADBnMR8wHQYDVQQDExZ1
cm46YW1hem9uOndlYnNlcnZpY2VzMSIwIAYDVQQKExlBbWF6b24gV2ViIFNlcnZp
Y2VzLCBJbmMuMRMwEQYDVQQIEwpXYXNoaW5ndG9uMQswCQYDVQQGEwJVUzAeFw0y
MzAxMTIwMDAwMDBaFw0yNDAxMTIwMDAwMDBaMGcxHzAdBgNVBAMTFnVybjphbWF6
b246d2Vic2VydmljZXMxIjAgBgNVBAoTGUFtYXpvbiBXZWIgU2VydmljZXMsIElu
Yy4xEzARBgNVBAgTCldhc2hpbmd0b24xCzAJBgNVBAYTAlVTMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnmj5j6fxspoMk/NPiWj4QZYcSwEGIccMna7v
k8MV8R5P1sw20qTSFe5b47MTyBnQmHSAWKWGfKOQIRw+fzrz9F6IOPu+/jX2rec1
9dpoBnTNtaLHYjbj8pFn4kuIaRvA0PLLs1IUBN8v6eC9qLvFPENWlk01f+rpHesQ
JWhRLz/mA8Y8yUTncDIxQ/lFllmpyEkkVr7mniB2O4RCDgtZlipLee3lkSyTmj4H
9n4SSS7uIXNFxFaX62RYVb0r/de1sMFtpEL8Hxfmw5sgne1E2U/NnPhNx71blO5c
aZkAhipuSo+j2A1wQmvAI6+VvGtI1Kn1fY3EoHLUuVUoorJA1wIDAQABoyEwHzAd
BgNVHQ4EFgQUyeVPBk+HvIxFSmyURjzONoutbOkwDQYJKoZIhvcNAQELBQADggEB
AFAK4W1woywA0gnaditArM4dSfTnZ1XEZl5Q9gM1CfThOXBM3yGA2k9FfifKcOmC
hidm2XasGZO9gGP6xlfGkgQJ1AS/FMsHuTsu1o7JcS2AwRlpUn4chTB5TbSva6MI
z7JeEWcFnFeYs4WvadTDgqO9eeyNt4iHmQvk1jSW5ydaVRfyDqjn/Y8lecz47DHb
w+LsxJNyoNMIQ9kJZScG9GmK4QHTGbg8/2UkaXxZ0RCk1K/Qmd7mrfM7h4KKAxsh
dFA62ribcl1SRdwTgDs4Hr0DgrqhWI+YbF8tb3r7bf9SBj0KlxxqJzTJSuMa61tf
gVxnaR99xOjI57qdgrfVTwc=',
    ),
  ),
  'saml20.sign.assertion' => true,
);

$metadata['urn:amazon:webservices:jdbc'] = array (
  'entityid' => 'urn:amazon:webservices',
  'description' => 
  array (
  ),
  'OrganizationName' => 
  array (
    'en' => 'Amazon Web Services, Inc.',
  ),
  'name' => 
  array (
    'en' => 'AWS Management Console Single Sign-On',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'AWS',
  ),
  'url' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'expire' => 1705017600,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      // 'Location' => 'https://signin.aws.amazon.com/saml',
      'Location' => 'http://localhost:7890/athena',
      'index' => 1,
      'isDefault' => true,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'attributes' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
    2 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.1',
    3 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.2',
    4 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.3',
    5 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.4',
    6 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.5',
    7 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
    8 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
    9 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.8',
    10 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.9',
    11 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
    12 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.11',
    13 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.2',
    14 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.3',
    15 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.4',
    16 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.5',
    17 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.6',
    18 => 'urn:oid:2.5.4.3',
  ),
  'attributes.required' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDbTCCAlWgAwIBAgIEZxyd3TANBgkqhkiG9w0BAQsFADBnMR8wHQYDVQQDExZ1
cm46YW1hem9uOndlYnNlcnZpY2VzMSIwIAYDVQQKExlBbWF6b24gV2ViIFNlcnZp
Y2VzLCBJbmMuMRMwEQYDVQQIEwpXYXNoaW5ndG9uMQswCQYDVQQGEwJVUzAeFw0y
MzAxMTIwMDAwMDBaFw0yNDAxMTIwMDAwMDBaMGcxHzAdBgNVBAMTFnVybjphbWF6
b246d2Vic2VydmljZXMxIjAgBgNVBAoTGUFtYXpvbiBXZWIgU2VydmljZXMsIElu
Yy4xEzARBgNVBAgTCldhc2hpbmd0b24xCzAJBgNVBAYTAlVTMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnmj5j6fxspoMk/NPiWj4QZYcSwEGIccMna7v
k8MV8R5P1sw20qTSFe5b47MTyBnQmHSAWKWGfKOQIRw+fzrz9F6IOPu+/jX2rec1
9dpoBnTNtaLHYjbj8pFn4kuIaRvA0PLLs1IUBN8v6eC9qLvFPENWlk01f+rpHesQ
JWhRLz/mA8Y8yUTncDIxQ/lFllmpyEkkVr7mniB2O4RCDgtZlipLee3lkSyTmj4H
9n4SSS7uIXNFxFaX62RYVb0r/de1sMFtpEL8Hxfmw5sgne1E2U/NnPhNx71blO5c
aZkAhipuSo+j2A1wQmvAI6+VvGtI1Kn1fY3EoHLUuVUoorJA1wIDAQABoyEwHzAd
BgNVHQ4EFgQUyeVPBk+HvIxFSmyURjzONoutbOkwDQYJKoZIhvcNAQELBQADggEB
AFAK4W1woywA0gnaditArM4dSfTnZ1XEZl5Q9gM1CfThOXBM3yGA2k9FfifKcOmC
hidm2XasGZO9gGP6xlfGkgQJ1AS/FMsHuTsu1o7JcS2AwRlpUn4chTB5TbSva6MI
z7JeEWcFnFeYs4WvadTDgqO9eeyNt4iHmQvk1jSW5ydaVRfyDqjn/Y8lecz47DHb
w+LsxJNyoNMIQ9kJZScG9GmK4QHTGbg8/2UkaXxZ0RCk1K/Qmd7mrfM7h4KKAxsh
dFA62ribcl1SRdwTgDs4Hr0DgrqhWI+YbF8tb3r7bf9SBj0KlxxqJzTJSuMa61tf
gVxnaR99xOjI57qdgrfVTwc=',
    ),
  ),
  'saml20.sign.assertion' => true,
);

$metadata['urn:amazon:webservices:redshift'] = array (
  'entityid' => 'urn:amazon:webservices',
  'description' => 
  array (
  ),
  'OrganizationName' => 
  array (
    'en' => 'Amazon Web Services, Inc.',
  ),
  'name' => 
  array (
    'en' => 'AWS Management Console Single Sign-On',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'AWS',
  ),
  'url' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'https://aws.amazon.com',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-sp-remote',
  'expire' => 1705017600,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      // 'Location' => 'https://signin.aws.amazon.com/saml',
      'Location' => 'http://localhost:7890/redshift/',
      'index' => 1,
      'isDefault' => true,
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'attributes' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
    2 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.1',
    3 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.2',
    4 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.3',
    5 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.4',
    6 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.5',
    7 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.6',
    8 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.7',
    9 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.8',
    10 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.9',
    11 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.10',
    12 => 'urn:oid:1.3.6.1.4.1.5923.1.1.1.11',
    13 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.2',
    14 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.3',
    15 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.4',
    16 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.5',
    17 => 'urn:oid:1.3.6.1.4.1.5923.1.2.1.6',
    18 => 'urn:oid:2.5.4.3',
    // 19 => 'https://redshift.amazon.com/SAML/Attributes/DbUser',
    // 20 => 'https://redshift.amazon.com/SAML/Attributes/AutoCreate',
    // 21 => 'https://redshift.amazon.com/SAML/Attributes/DbGroups',
  ),
  'attributes.required' => 
  array (
    0 => 'https://aws.amazon.com/SAML/Attributes/Role',
    1 => 'https://aws.amazon.com/SAML/Attributes/RoleSessionName',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDbTCCAlWgAwIBAgIEZxyd3TANBgkqhkiG9w0BAQsFADBnMR8wHQYDVQQDExZ1
cm46YW1hem9uOndlYnNlcnZpY2VzMSIwIAYDVQQKExlBbWF6b24gV2ViIFNlcnZp
Y2VzLCBJbmMuMRMwEQYDVQQIEwpXYXNoaW5ndG9uMQswCQYDVQQGEwJVUzAeFw0y
MzAxMTIwMDAwMDBaFw0yNDAxMTIwMDAwMDBaMGcxHzAdBgNVBAMTFnVybjphbWF6
b246d2Vic2VydmljZXMxIjAgBgNVBAoTGUFtYXpvbiBXZWIgU2VydmljZXMsIElu
Yy4xEzARBgNVBAgTCldhc2hpbmd0b24xCzAJBgNVBAYTAlVTMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnmj5j6fxspoMk/NPiWj4QZYcSwEGIccMna7v
k8MV8R5P1sw20qTSFe5b47MTyBnQmHSAWKWGfKOQIRw+fzrz9F6IOPu+/jX2rec1
9dpoBnTNtaLHYjbj8pFn4kuIaRvA0PLLs1IUBN8v6eC9qLvFPENWlk01f+rpHesQ
JWhRLz/mA8Y8yUTncDIxQ/lFllmpyEkkVr7mniB2O4RCDgtZlipLee3lkSyTmj4H
9n4SSS7uIXNFxFaX62RYVb0r/de1sMFtpEL8Hxfmw5sgne1E2U/NnPhNx71blO5c
aZkAhipuSo+j2A1wQmvAI6+VvGtI1Kn1fY3EoHLUuVUoorJA1wIDAQABoyEwHzAd
BgNVHQ4EFgQUyeVPBk+HvIxFSmyURjzONoutbOkwDQYJKoZIhvcNAQELBQADggEB
AFAK4W1woywA0gnaditArM4dSfTnZ1XEZl5Q9gM1CfThOXBM3yGA2k9FfifKcOmC
hidm2XasGZO9gGP6xlfGkgQJ1AS/FMsHuTsu1o7JcS2AwRlpUn4chTB5TbSva6MI
z7JeEWcFnFeYs4WvadTDgqO9eeyNt4iHmQvk1jSW5ydaVRfyDqjn/Y8lecz47DHb
w+LsxJNyoNMIQ9kJZScG9GmK4QHTGbg8/2UkaXxZ0RCk1K/Qmd7mrfM7h4KKAxsh
dFA62ribcl1SRdwTgDs4Hr0DgrqhWI+YbF8tb3r7bf9SBj0KlxxqJzTJSuMa61tf
gVxnaR99xOjI57qdgrfVTwc=',
    ),
  ),
  'saml20.sign.assertion' => true,
);
