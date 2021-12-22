# Redshift

## Enable access from outside of VPC (e.g. dev workstation with JDBC):

Cluster -> Actions -> Modify publicly accessing settings -> Enable

Update the cluster's security group to open port 5439

## Configure connection in DBeaver

https://bambooengineering.io/connecting-dbeaver-to-redshift-using-saml-federation-and-mfa/

## Configure Okta with Redshift (example of SAML)

https://aws.amazon.com/blogs/big-data/federate-amazon-redshift-access-with-okta-as-an-identity-provider/

## Options for providing IAM credentials

https://docs.aws.amazon.com/redshift/latest/mgmt/options-for-providing-iam-credentials.html
