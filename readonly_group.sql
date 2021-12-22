-- source: https://jokertechnologies.com/redshift-read-only-users/

CREATE GROUP readonly_group;
GRANT USAGE ON SCHEMA "public" TO GROUP readonly_group;
GRANT SELECT ON ALL TABLES IN SCHEMA "public" TO GROUP readonly_group;
ALTER DEFAULT PRIVILEGES IN SCHEMA "public" GRANT SELECT ON TABLES TO GROUP readonly_group;
REVOKE CREATE ON SCHEMA "public" FROM GROUP readonly_group;
