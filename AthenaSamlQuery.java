import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class AthenaSamlQuery {
   static final String DB_URL = "jdbc:awsathena://AwsRegion=us-east-2;Schema=mydatabase;S3OutputLocation=s3://athena-saml-query-results;AwsCredentialsProviderClass=com.simba.athena.iamsupport.plugin.BrowserSamlCredentialsProvider;login_url=http://localhost:8080/simplesaml/redirect.php";
   // static final String DB_URL = "jdbc:awsathena://AwsRegion=us-east-2;S3OutputLocation=s3://athena-saml-query-results;AwsCredentialsProviderClass=com.simba.athena.iamsupport.plugin.BrowserSamlCredentialsProvider;UID=user1;PWD=user1pass;login_url=http://localhost:8080/simplesaml/saml2/idp/SSOService.php?spentityid=urn:amazon:webservices";
   // static final String USER = "user1";
   // static final String PASS = "user1pass";
   static final String QUERY = "SELECT os, COUNT(*) count FROM cloudfront_logs WHERE date BETWEEN date '2014-07-05' AND date '2014-08-05' GROUP BY os";

   public static void main(String[] args) {
      // try(Connection conn = DriverManager.getConnection(DB_URL, USER, PASS);
      try(Connection conn = DriverManager.getConnection(DB_URL);
         Statement stmt = conn.createStatement();
         ResultSet rs = stmt.executeQuery(QUERY);
      ) {
         while(rs.next()){
            System.out.print("OS: " + rs.getString("os"));
            System.out.println(", Count: " + rs.getInt("count"));
         }
      } catch (SQLException e) {
         e.printStackTrace();
      }
   }
}
