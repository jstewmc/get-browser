<?php
/**
 * The file for the get-browser service
 *
 * @author     Jack Clayton <clayjs0@gmai.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

/**
 * The get-browser service
 *
 * @since  0.1.0
 */
class Get
{           
    /* !Private properties */
    
    /**
     * @var    Request  the browser's http request
     * @since  0.1.0
     */
    private $request;
    
    
    /* !Magic methods */
    
    /**
     * Called when the service is constructed
     *
     * @param  Request  $request  the browser's http request
     * @since  0.1.0
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
        
    /**
     * Called when the service is treated like a function
     * 
     * @return  Browser
     * @since   0.1.0
     */
    public function __invoke(): Browser
    {
        // get the browser's information
        $info = $this->getInfo();
        
        // get the browser's ip address
        $ip = $this->getIp();
        
        // create the browser
        $browser = (new Browser())
            ->setName($info['browser'])
            ->setPlatform($info['platform'])
            ->setVersion($info['version'])
            ->setIp($ip);
            
        return $browser;
    }
    
    
    /* !Private methods */
    
    /**
     * Returns the browser's information
     *
     * @return  mixed[]  an array with keys "browser", "platform", and "version"
     * @since   0.1.0
     * @see     https://github.com/donatj/PhpUserAgent  donatj's PHP User Agent
     *     library on Github (accessed 7/30/16)
     */
    private function getInfo(): array
    {
        $info = [
            'browser'  => null, 
            'version'  => null, 
            'platform' => null
        ];
        
        // if the "User-Agent" header is null, short-circuit
        if (null === ($agent = $this->request->getUserAgent())) {
            return $info;
        }
        
        // otherwise, parse the user agent header...
        // keep in mind, if the "User-Agent" header is invalid or could not be 
        //     parsed, the contents of the entire "User-Agent" header will be 
        //     returned as the "browser" value
        //
        $info = parse_user_agent($agent);
        
        // if the "User-Agent" header was invalid, clear the browser's value
        if (
            $info['browser'] !== null 
            && $info['platform'] === null 
            && $info['version'] === null
        ) {
            $info['browser'] = null;
        }
        
        return $info;
    }
    
    /**
     * Returns the browser's valid ip address or null
     *
     * @return  string|null
     * @since   0.1.0
     */
    private function getIp()
    {
        return filter_var($this->request->getIp(), FILTER_VALIDATE_IP) ?: null;
    }
}
