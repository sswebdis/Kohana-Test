<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-04 17:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-04 17:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\192.168.2.3\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\192.168.2.3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\192.168.2.3\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-04 17:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-04 17:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\192.168.2.3\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-04 17:34:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-04 17:34:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\192.168.2.3\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-04 17:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL nj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-04 17:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL nj was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\192.168.2.3\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\192.168.2.3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\192.168.2.3\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-04 17:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-04 17:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\192.168.2.3\www\index.php(109): Kohana_Request->execute()
#1 {main}