<?php
/**
 * The file for the http request interface
 *
 * @author     Jack Clayton <jack@1bg.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

/**
 * An http request
 *
 * @since  0.1.0
 */
interface Request
{
    /* !Public methods */
    
    /**
     * Returns the client's ip address
     *
     * @return  string|null
     */
    public function getIp();
    
    /**
     * Returns the request's "User Agent" string
     *
     * @return  string|null
     */
    public function getUserAgent();
}
