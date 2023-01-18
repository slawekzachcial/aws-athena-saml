import java.util.Properties;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class AthenaSamlQuery {
    static final String QUERY = "SELECT os, COUNT(*) count FROM cloudfront_logs WHERE date BETWEEN date '2014-07-05' AND date '2014-08-05' GROUP BY os";

    public static void main(String[] args) {
        String bucketName = args.length >= 1 ? args[0] : "athena-saml-query-results";
        String s3Location = "s3://" + bucketName;

        String idpUrl = args.length >= 2 ? args[1] : "https://localhost:8443";
        String loginUrl = idpUrl + "/simplesaml/saml2/idp/SSOService.php?spentityid=urn:amazon:webservices:jdbc";

        Properties connProps = new Properties();
        connProps.put("AwsRegion", "us-east-2");
        connProps.put("S3OutputLocation", s3Location);
        connProps.put("AwsCredentialsProviderClass", "com.simba.athena.iamsupport.plugin.BrowserSamlCredentialsProvider");
        // login_url parameter value can be put directly in the JDBC URL rather
        // than in connection Properties if it does not contain query string,
        // e.g. /simplesaml/login-jdbc.php
        connProps.put("login_url", loginUrl);

        // Something must be present in the JDBC URL after ://. Otherwise Schema
        // could probably be also put in connProps above.
        String dbUrl = "jdbc:awsathena://Schema=mydatabase";
        try(Connection conn = DriverManager.getConnection(dbUrl, connProps);
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery(QUERY);
           ) {
            while(rs.next()){
                System.out.printf("OS: %-8s, Count: %-4d\n", rs.getString("os"), rs.getInt("count"));
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
