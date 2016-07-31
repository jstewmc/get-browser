<?php
/**
 * The file for a browser
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

/**
 * A browser
 *
 * @since  0.1.0
 */
class Browser
{
    /* !Private properties */
    
    /**
     * @var    string|null  the browser's ip address (e.g., "1.2.3.4" or "::1")
     * @since  0.1.0
     */
    private $ip;
    
    /**
     * @var    string|null  the browser's name (e.g., "Safari")
     * @since  0.1.0
     */
    private $name;
    
    /**
     * @var    string|null  the browser's platform  (e.g., "Macintosh")
     * @since  0.1.0
     */
    private $platform;
    
    /**
     * @var    string|null  the browser's version  (e.g., "1.0.0")
     * @since  0.1.0
     */
    private $version;
    
    
    /* !Get methods */
    
    /**
     * Returns the browser's name
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Returns the browser's ip address
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getIp()
    {
        return $this->ip;
    }
    
    /**
     * Returns the browser's platform
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    
    /**
     * Returns the browser's version
     *
     * @return  string|null
     * @since   0.1.0
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    
    /* !Set methods */
    
    /**
     * Sets the browser's name 
     *
     * @param   string|null  $browser  the browser's name
     * @return  self
     * @since   0.1.0
     */
    public function setName(string $name = null): self
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Sets the browser's ip address
     *
     * @param   string|null  $ip  the browser's ip address
     * @return  Request
     * @since   0.1.0
     */
    public function setIp(string $ip = null): self
    {
        $this->ip = $ip;
        
        return $this;
    }
    
    /**
     * Sets the client's platform name
     *
     * @param   string|null  $platform  the browser's platform
     * @return  Request
     * @since   0.1.0
     */
    public function setPlatform(string $platform = null): self
    {
        $this->platform = $platform;
        
        return $this;
    }
    
    /**
     * Sets the client's browser version
     *
     * @param   string|null  $version  the browser's version
     * @return  Request
     * @since   0.1.0
     */
    public function setVersion(string $version = null)
    {
        $this->version = $version;
        
        return $this;
    }
}
