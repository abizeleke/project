<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newcss.css">
    <title>Document</title>
</head>
<body>
    <div class="topbar">
        <div class="div1">
            <p>CSEC-ASTU</p>
        </div>      
        <div class="div2">       
            <a href="index.jsp"> <button> log in </button> </a>
        </div>    
    </div>
    <section>
        <form action="signup.jsp">
                <%
                    String msg=request.getParameter("msg");
                    if("registered".equals(msg)){
                %>
                <h4 class="h5">The email was already registered</h4>
                <%}%>
                
            <input type="email" name="email" placeholder="Email" required>
            <select class="secQstn" name="secQstn">
                <option value="family birthday">Select security question</option>
                <option value="family birthday">family Birthday</option>
                <option value="user birthday">your Birthday</option>
                <option value="favorite number">your favorite number</option>
            </select>
            <input type="text" name="secAns" placeholder="Answer security question" required> 
            <input type="password" name="password1" placeholder="New password" required>
            <input type="password" name="password2" placeholder="Confirm password" required>
            <input class="submit" type="submit" value="Submit">  
        </form>
    </section>      
</body>
</html>
