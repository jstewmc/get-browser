<?php
/**
 * The file for the get-browser service
 *
 * @author     Jack Clayton <clayjs0@gmai.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

use Jstewmc\Browser\Browser;

/**
 * The get-browser service
 *
 * @since  2.0.0
 */
class GetBrowser
{                   
    /**
     * Called when the service is treated like a function
     * 
     * @return  Browser|null
     * @since   2.0.0
     */
    public function __invoke(string $userAgent = null)
    {
        // if the "User-Agent" string is empty, short-circuit
        if ($userAgent === null) {
            return null;    
        }
        
        // otherwise, parse the "User-Agent" header...
        // keep in mind, if the "User-Agent" header is invalid or could not be 
        //     parsed, the contents of the entire "User-Agent" header will be 
        //     returned as the "browser" value
        //
        $info = parse_user_agent($userAgent);
        
        // if the "User-Agent" header is invalid, short-circuit...
        // keep in mind, this will falsely return null when only the browser name
        //     could be parsed from the "User-Agent", but that seems unlikely
        //
        if ($info['platform'] === null && $info['version'] === null) {
            return null;
        }
        
        // create the browser
        $browser = (new Browser())
            ->setName($info['browser'])
            ->setPlatform($info['platform'])
            ->setVersion($info['version']);
            
        return $browser;
    }
}
