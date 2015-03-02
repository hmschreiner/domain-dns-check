# Domain DNS Check
Check if records from a DNS host server corresponds to a domain.
## Simple usage:
```
  $result = Domains\Dns::checkDomain('gmail.com', 'ns1.google.com');
  
  if(empty($result)) {
    echo 'Invalid!';
  } else { 
    echo 'Valid!';
  }
```
If DNS host server corresponds to a domain, returns all NS target entries, otherwise returns false.
