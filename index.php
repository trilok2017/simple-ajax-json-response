<?php
echo "demo deployment on 12.42";
?>
<html>
    <head>
       <title>jQuery Test</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
     <script type="text/javascript">
     $(document).ready(function() {

            $("#submit").click(function(){
			$.ajax({
            url: "response.php",
            type: "POST",
            data: {
                amount: $("#amount").val(),
                firstName: $("#firstName").val(),
                lastName: $("#lastName").val(),
                email: $("#email").val()
            },
            dataType: "text",
            success: function (jsonStr) {
				data = $.parseJSON(jsonStr);
                $("#result").text("Json Response = "+JSON.stringify(jsonStr));
            }
        });

    }); 

    });
    </script>
    </head>
    <body>
    <div id="result"></div>
        <form name="contact" id="contact" method="post">
         Amount : <input type="text" name="amount" id="amount"/><br/>
         firstName : <input type="text" name="firstName" id="firstName"/><br/>
         lastName : <input type="text" name="lastName" id="lastName"/><br/>
         email : <input type="text" name="email" id="email"/><br/>
        <input type="button" value="Get It!" name="submit" id="submit"/>
        </form>

    </body>
</html>
