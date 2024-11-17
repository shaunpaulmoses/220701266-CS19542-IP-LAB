import java.io.*;
import java.sql.*;
//import java.driverManager.*;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.*;
//import javax.xml.*;
@WebServlet("/Dbser")
public class Dbser extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out= response.getWriter();
		String name=request.getParameter("name");
		String year=request.getParameter("year");
		String d=request.getParameter("dep");
		String r=request.getParameter("rn");
		out.println("<h1>Name : "+name+"</h1><br>");
		out.println("<h1>Roll Number :"+r+"</h1><br>");
		out.println("<h1>Year :"+year+"</h1><br>");
		out.println("<h1>Department :"+d+"</h1><br>");
//		 ResultSet rt=null;
		 try {
			 //Class.forName("com.mysql.jdbc.Driver");
			 Connection con1=DriverManager.getConnection("jdbc:mysql://localhost/stud_det","root","root");
	          PreparedStatement st=con1.prepareStatement("insert into details values('"+r+"','"+name+"','"+year+"','"+d+"')"); 
	          int rs = st.executeUpdate();
	          if(rs>0) {
	        	  out.println("Inserted Successfully");
	          }else {
	        	  out.println("Error Inserting");
	          }
		 }
		 catch(Exception e) {
			 out.println(e);
	}
	}

}