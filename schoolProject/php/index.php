<?php
session_start();
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $password = isset($_POST['password']) ? $_POST['password'] : '';
   if ($password == 'password')
   {
      $_SESSION['password'] = $password;
   }
}
else
{
   $password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
}
if ($password != 'password')
{
   echo "<!doctype html>\n";
   echo "<html>\n";
   echo "<head>\n";
   echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n";
   echo "<title>Untitled Page</title>\n";
   echo "<style>\n";
   echo "body { background-color:#FFFFFF;text-align:center; }\n";
   echo "#ProtectSinglePage1 { color:#000000;font-family:Bahnschrift;font-weight:normal;font-size:13px;text-decoration:none;text-align:center; }\n";
   echo "#ProtectSinglePage1 .button { background-color:#3370B7;border:1px solid #2E6DA4;border-radius:3px;color:#FFFFFF;padding:4px 14px 4px 14px; }\n";
   echo "#ProtectSinglePage1 .error { color:#FF0000; }\n";
   echo "#ProtectSinglePage1 #password { background-color:#FFFFFF;border:1px solid #CCCCCC;border-radius:2px;box-sizing:border-box;color:#555555;padding:6px 4px 6px 4px;width:100%; }\n";
   echo "#ProtectSinglePage1 .header { background-color:#878787;color:#FFFFFF;padding:4px 4px 4px 4px; text-align: center; }\n";
   echo "#ProtectSinglePage1 form { display:inline-block; }\n";
   echo "#ProtectSinglePage1 table { background-color:#FFFFFF;border:1px solid #CCCCCC;border-radius:4px;border-spacing:6px;color:#000000;width:350px;}\n";
   echo "#ProtectSinglePage1 td { padding:0;text-align:center; }\n";
   echo "@media all and (max-width:480px) { #ProtectSinglePage1 table, #ProtectSinglePage1 form { width: 100% !important; } }\n";
   echo "</style>\n";
   echo "</head>\n";
   echo "<body>\n";
   echo "<div id=\"ProtectSinglePage1\">\n";
   echo "<br>\n";
   if($_SERVER['REQUEST_METHOD'] == 'POST')
      echo "<span class=\"error\">The specified password is invalid!<br><br><br></span>\n";
   else
      echo "<span>This page is password protected.<br><br><br></span>\n";
   echo "<form method=\"post\" action=\"".basename(__FILE__)."\">\n";
   echo "<input type=\"hidden\" name=\"form_name\" value=\"loginform\">\n";
   echo "<table>\n<tbody>\n";
   echo "<tr><td class=\"header\">Login</td></tr>\n";
   echo "<tr><td><br><label for=\"password\">Password:</label></td></tr>\n";
   echo "<tr><td><input id=\"password\" type=\"password\" name=\"password\" value=\"\"></td></tr>\n";
   echo "<tr><td><br><br><br><input class=\"button\" type=\"submit\" value=\"Login\"></td></tr>\n";
   echo "</tbody>\n</table>\n</form>\n";
   echo "</div>\n</body>\n</html>\n";
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page</title>
<link href="css/Untitled1.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
<form action="admin.php" method="post">
<div id="wb_Shape1" style="position:absolute;left:424px;top:108px;width:512px;height:484px;z-index:0;">
<img src="images/img0001.png" id="Shape1" alt="" width="512" height="484" style="width:512px;height:484px;"></div>
<div id="wb_Text1" style="position:absolute;left:492px;top:145px;width:403px;height:72px;z-index:1;">
<span style="color:#000000;font-family:Boldfinger;font-size:64px;">Delete Blog</span></div>
<input type="text" id="Editbox1" style="position:absolute;left:509px;top:319px;width:358px;height:52px;z-index:2;" name="name" value="" spellcheck="false" placeholder="Eg: The Kardashians">
<button type="submit" id="ThemeableButton1" name="" value="Submit" class="ui-button ui-corner-all" style="position:absolute;left:615px;top:440px;width:156px;height:62px;z-index:3;">Submit</button>
<div id="wb_Text2" style="position:absolute;left:509px;top:300px;width:161px;height:18px;z-index:4;">
<span style="color:#000000;font-family:Bahnschrift;font-size:15px;">Blog Name</span></div>

</form>
</body>
</html>