import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class AthenaSamlQuery {
    static final String QUERY = "SELECT os, COUNT(*) count FROM cloudfront_logs WHERE date BETWEEN date '2014-07-05' AND date '2014-08-05' GROUP BY os";

    public static void main(String[] args) {
        String bucketName = args.length >= 1 ? args[0] : "athena-saml-query-results";
        String idpUrl = args.length >= 2 ? args[1] : "http://localhost:8080";

        String dbUrl = String.format("jdbc:awsathena://AwsRegion=us-east-2;Schema=mydatabase;S3OutputLocation=s3://%s;AwsCredentialsProviderClass=com.simba.athena.iamsupport.plugin.BrowserSamlCredentialsProvider;login_url=%s/simplesaml/redirect.php", bucketName, idpUrl);

        try(Connection conn = DriverManager.getConnection(dbUrl);
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
