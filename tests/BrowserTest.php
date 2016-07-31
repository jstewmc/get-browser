<?php
/**
 * The file for the browser tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for the browser object
 */
class BrowserTest extends TestCase
{
    /* !getIp() */
    
    /**
     * getIp() should return null if ip does not exist
     */
    public function testGetIpReturnsNullIfIpDoesNotExist()
    {
        return $this->assertNull((new Browser())->getIp());
    }
    
    /**
     * getIp() should return string if ip does exist
     */
    public function testGetIpReturnsStringIfIpDoesExist()
    {
        $ip = '1.2.3.4';
        
        $browser = new Browser();
        
        $this->setProperty('ip', $browser, $ip);
        
        $this->assertEquals($ip, $browser->getIp());
        
        return;
    }
    
    
    /* !getName() */
    
    /**
     * getName() should return null if name does not exist
     */
    public function testGetNameReturnsNullIfNameDoesNotExist()
    {
        return $this->assertNull((new Browser())->getName());
    }
    
    /**
     * getName() should return string if name does exist
     */
    public function testGetNameReturnsStringIfNameDoesExist()
    {
        $name = 'foo';
        
        $browser = new Browser();
        
        $this->setProperty('name', $browser, $name);
        
        $this->assertEquals($name, $browser->getName());
        
        return;
    }
    
    
    /* !getPlatform() */
    
    /**
     * getPlatform() should return null if platform does not exist
     */
    public function testGetPlatformReturnsNullIfPlatformDoesNotExist()
    {
        return $this->assertNull((new Browser())->getPlatform());
    }
    
    /**
     * getPlatform() should return 
     */
    public function testGetPlatformReturnsStringIfPlatformDoesExist()
    {
        $platform = 'foo';
        
        $browser = new Browser();
        
        $this->setProperty('platform', $browser, $platform);
        
        $this->assertEquals($platform, $browser->getPlatform());
        
        return;
    }
    
    /* !getVersion() */
    
    /**
     * getVersion() should return null if version does not exist
     */
    public function testGetVersionReturnsNullIfVersionDoesNotExist()
    {
        return $this->assertNull((new Browser())->getVersion());
    }
    
    /**
     * getVersion() should return string if version does exist
     */
    public function testGetVersionReturnsStringIfVersionDoesExist()
    {
        $version = '1.0';
        
        $browser = new Browser();
        
        $this->setProperty('version', $browser, $version);
        
        $this->assertEquals($version, $browser->getVersion());
        
        return;
    }
    
    
    /* !setIp() */
    
    /**
     * setIp() should return self if ip is null
     */
    public function testSetIpReturnsSelfIfIpIsNull()
    {
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setIp(null));
        $this->assertNull($this->getProperty('ip', $browser));
        
        return;
    }
    
    /**
     * setIp() should return self if ip is string
     */
    public function testSetIpReturnsSelfIfIpIsString()
    {
        $ip = '1.2.3.4';
        
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setIp($ip));
        $this->assertEquals($ip, $this->getProperty('ip', $browser));
        
        return;
    }
    
    
    /* !setName() */
    
    /**
     * setName() should return self if name is null
     */
    public function testSetNameReturnsSelfIfNameIsNull()
    {
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setName(null));
        $this->assertNull($this->getProperty('name', $browser));
        
        return;
    }
    
    /**
     * setName() should return self if name is string
     */
    public function testSetNameReturnsSelfIfNameIsString()
    {
        $name = 'foo';
        
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setName($name));
        $this->assertEquals($name, $this->getProperty('name', $browser));
        
        return;
    }
    
    
    /* !setPlatform() */
    
    /**
     * setPlatform() should return self if platform is null
     */
    public function testSetPlatformReturnsSelfIfPlatformIsNull()
    {
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setPlatform(null));
        $this->assertNull($this->getProperty('platform', $browser));
        
        return;
    }
    
    /**
     * setPlatform() should return self if platform is not null
     */
    public function testSetPlatformReturnsSelfIfPlatformIsNotNull()
    {
        $platform = 'foo';
        
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setPlatform($platform));
        $this->assertEquals($platform, $this->getProperty('platform', $browser));
        
        return;   
    }
    
    
    /* !setVersion() */
    
    /**
     * setVersion() should return self if version is null
     */
    public function testSetVersionReturnsSelfIfVersionIsNull()
    {
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setVersion(null));
        $this->assertNull($this->getProperty('version', $browser));
        
        return;    
    }
    
    /**
     * setVersion() should return self if version is not null
     */
    public function testSetVersionReturnsSelfIfVersionIsNotNull()
    {
        $version = '1';
        
        $browser = new Browser();
        
        $this->assertSame($browser, $browser->setVersion($version));
        $this->assertEquals($version, $this->getProperty('version', $browser));
        
        return;
    }
}
