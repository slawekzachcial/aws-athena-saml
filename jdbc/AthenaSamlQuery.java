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

        String idpUrl = args.length >= 2 ? args[1] : "http://localhost:8080";
        String loginUrl = idpUrl + "/simplesaml/login-jdbc.php";


        String dbUrl = String.format("jdbc:awsathena://AwsRegion=%s;Schema=%s;S3OutputLocation=%s;AwsCredentialsProviderClass=%s;login_url=%s",
            "us-east-2",
            "mydatabase",
            s3Location,
            "com.simba.athena.iamsupport.plugin.BrowserSamlCredentialsProvider",
            loginUrl);

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
