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
  'expire' => 1670630400,
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      /* 'Location' => 'https://signin.aws.amazon.com/saml', */
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
      'X509Certificate' => 'MIIDbTCCAlWgAwIBAgIEZicHIjANBgkqhkiG9w0BAQsFADBnMR8wHQYDVQQDExZ1
cm46YW1hem9uOndlYnNlcnZpY2VzMSIwIAYDVQQKExlBbWF6b24gV2ViIFNlcnZp
Y2VzLCBJbmMuMRMwEQYDVQQIEwpXYXNoaW5ndG9uMQswCQYDVQQGEwJVUzAeFw0y
MTEyMTAwMDAwMDBaFw0yMjEyMTAwMDAwMDBaMGcxHzAdBgNVBAMTFnVybjphbWF6
b246d2Vic2VydmljZXMxIjAgBgNVBAoTGUFtYXpvbiBXZWIgU2VydmljZXMsIElu
Yy4xEzARBgNVBAgTCldhc2hpbmd0b24xCzAJBgNVBAYTAlVTMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhJ7UcaABjOBJ4NUEUyXMrjtj1NRBweTnfqEV
rquPJ0NNm+0LGLijUzlxZnTreY+vGZFO5i7IdjM2yKxp1UzhZhviTX8XhUXDGHwO
zijsDCGHwPVSRmNJLWi2f/9GNz373Y/Y0ZjJNhkfFYCUfuA71hNrgYfYbGnG10vi
T7PTueAwXUoX6QlvbbK/Z1gvcKpOsuZxytAARvlflJreH9l1+Je/5FPMXdBS8m+1
qJOX8ON8wWrmeqTBnRSeGBl30BSU7V2gmjmr/6ZjuidLPu+ghjDlt+1zTqN0MHfE
Red536tdt20vWOXfZG/XdVnYG/qdwHD8n/v/otLL5AA9S1tTmQIDAQABoyEwHzAd
BgNVHQ4EFgQUo+XDL6CxTSrfR6Mu2Scnbx7gqJ0wDQYJKoZIhvcNAQELBQADggEB
ADWo8xDAJO1gdXikElyen/O3ywsmuSNjvQL/1+25UgSMYAobKE5b+3gV5l2d7T16
AmqmIUsVHLSH5+ZArkZttR75r/0W8ggwEEFeUif7RDo8qlBD506s8K/LOoq1Mv2Z
bfZ63xy/EOMgFkDAUwi3h9jJvODbJFEavQ9YZZxCMrz5QGOI77eU+YkjYCC5zuXX
DSLyKmv9iVS/g5vX5Ty0vutkTsDh27rqLU7Soip7OJVzdQub8FZCDDAp8NobvGh4
vuLnH9xB1KdfYPqYI0/fYDpHJxRUSFfc7Iu7tgqpUThqAA3fmfFgcZ26tM2yQSvx
2FHGVd9NcbgQkThFKeFzBBw=',
    ),
  ),
  'saml20.sign.assertion' => true,
  'authproc' => array(
      30 => array(
          'class' => 'saml:AttributeNameID',
          'attribute' => 'eduPersonPrincipalName',
          'Format' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
      ),
      40 => array(
          'class' => 'core:AttributeMap',
          'name2oid'
      ),
  ),

);

