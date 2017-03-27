<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

mail("nate@projektintl.com","nateyork.com - Form Submission","Form data:

Name: " . $_POST['field_1'] . " 
Email: " . $_POST['field_2'] . " 
Phone: " . $_POST['field_3'] . " 
Inquiry: " . $_POST['field_4'] . " 


 powered by phpFormGenerator.
");

include("confirm.html");

?>