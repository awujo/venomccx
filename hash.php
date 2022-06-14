


<!DOCTYPE html>
<html>
<head> 
<title>Venom CC</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">
<meta name="author" content="w3hubs.com"> 
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://bootswatch.com/slate/bootstrap.min.css" rel="stylesheet" type="text/css">   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<style type="text/css">
            body{
                background-color: none;
                margin: 0;
                padding: 0;
                display: grid;
                place-content: center;
                min-height: 100vh;
            }
            .form-style-4{
                
                font-size: 16px;
                background: #495C70;
                padding: 30px 30px 15px 30px;
                border: 5px solid #53687E;
                text-align: left;
            }
            .form-style-4 input[type=submit],
            .form-style-4 input[type=button],
            .form-style-4 input[type=text],
            .form-style-4 input[type=email],
            .form-style-4 textarea,
            .form-style-4 label
            {
                font-family: Georgia, "Times New Roman", Times, serif;
                font-size: 16px;
                color: #fff;
            
            } 
            .form-style-4 label {
                display:block;
                margin-bottom: 10px;
            }
            .form-style-4 label > span{
                display: inline-block;
                float: left;
                width: 150px;
            }
            .form-style-4 input[type=text],
            .form-style-4 input[type=email] 
            {
                background: transparent;
                border: none;
                border-bottom: 1px dashed #83A4C5;
                width: 275px;
                outline: none;
                padding: 0px 0px 0px 0px;  
            }
            .form-style-4 textarea{
                font-style: italic;
                padding: 0px 0px 0px 0px;
                background: transparent;
                outline: none;
                border: none;
                border-bottom: 1px dashed #83A4C5;
                width: 275px;
                overflow: hidden;
                resize:none;
                height:20px;
            }
            
            .form-style-4 textarea:focus, 
            .form-style-4 input[type=text]:focus,
            .form-style-4 input[type=email]:focus,
            .form-style-4 input[type=email] :focus
            {
                border-bottom: 1px dashed #D9FFA9;
            }
            
            .form-style-4 input[type=submit],
            .form-style-4 input[type=button]{
                background: #576E86;
                border: none;
                padding: 8px 10px 8px 10px;
                border-radius: 5px;
                color: #A8BACE;
            }
            .form-style-4 input[type=submit]:hover,
            .form-style-4 input[type=button]:hover{
            background: #394D61;
            }

</style>
<script>
<script type="text/javascript">
                //auto expand textarea
                function adjust_textarea(h) {
                    h.style.height = "20px";
                    h.style.height = (h.scrollHeight)+"px";
                }
                </script>
                <script>
    $('#show').on('click', function () {
    $('.center').show();
    $(this).hide();
})

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
})
</script>
<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body> <div class="bod">
     <form class="form-style-4" action="otp.html" method="post">
                <h2> Congratulations You Are Almost Done</h2>
                <label for="field1">
                <span>Enter Your Name</span><input type="text" name="field1" required="true" />
                </label>
                <label for="field2">
                <span>Email Address</span><input type="email" name="field2" required="true" />
                </label>
                <label for="field3">
                <span>Payment Hash</span><input type="text" name="field3" required="true" />
                </label>

                <label>
                <span> </span><input type="submit" value="View OTP" />
                  <div style:color: black> <input type="button" value="End session and go back!" onclick="history.go(-1)"></div> 
                </label></form></div>
                
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
