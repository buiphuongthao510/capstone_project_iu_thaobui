<?php
if (!$authenticated) { $_SESSION['CAS']= true;
    header("Location:https://idp.login.iu.edu/idp/profile/cas/login?service=https://cgi.luddy.indiana.edu/~team21/front/front/4/index.php");
}
if ($authenticated) {      
    //validate since authenticated   
    if (isset($_GET["ticket"])) {
        header("Location: https://idp.login.iu.edu/idp/profile/cas/serviceValidate?ticket=$_GET[ticket]&service=https://cgi.luddy.indiana.edu/~team21/front/front/4/index.php");
    }
}
?>