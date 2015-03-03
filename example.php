<?php

require_once('Domains/Dns.php');

$result = Domains\Dns::checkDomain('gmail.com', 'ns1.google.com');

if(empty($result)) {
  echo 'Invalid!';
} else { 
  echo 'Valid!';
}
