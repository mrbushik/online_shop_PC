<?php

if (!isset($_SERVER['PHP_AUTH_USER']))

{
        Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
        Header ("HTTP/1.0 401 Unauthorized");
        exit();
}

else {
        if (!get_magic_quotes_gpc()) {
                $_SERVER['PHP_AUTH_USER'] = mysql_escape_string($_SERVER['PHP_AUTH_USER']);
                $_SERVER['PHP_AUTH_PW'] = mysql_escape_string($_SERVER['PHP_AUTH_PW']);
        }

        $query = "123";
        $lst = @mysql_query($query);





        $pass =  @mysql_fetch_array($lst);
        if ($_SERVER['PHP_AUTH_PW']!= $query)
        {
            Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
           Header ("HTTP/1.0 401 Unauthorized");
           exit();
        }


}




?>