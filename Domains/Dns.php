<?php

namespace Domains;

/**
 * Class to verify DNS Settings
 * 
 * @author Henrique Schreiner <hms.sud@gmail.com>
 * @version 1.0
 * @package Domains
 */
class Dns {

    /**
     * Get records from a DNS host server and check if corresponds to a domain
     * @param string $domain Domain address (Ex. domain.com)
     * @param string $dns DNS hostname (Ex. ns1.example.com)
     * @return boolean If DNS host server corresponds to a domain, returns all NS target entries, otherwise returns false.
     */
    public static function checkDomain($domain, $dns) {

        $record = \dns_get_record($domain);

        $ns = array();

        // Get all NS targets from given domain
        for ($i = 0; $i < count($record); $i++) {
            if ($record[$i]['type'] == 'NS') {
                $ns[] = $record[$i]['target'];
            }
        }

        if (in_array($dns, $ns)) {
            return $ns;
        } else {
            return false;
        }
    }

}

