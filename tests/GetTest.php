<?php
/**
 * The file for the get-browser tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for the get-browser tests
 */
class GetTest extends TestCase
{
    /* !get() */
    
    /**
     * get() should return browser if ip address and user agent do not exist
     */
    public function testGetReturnsBrowserIfIpAndUserAgentDoNotExist()
    {
        $request = new class implements Request 
        {
            public function getUserAgent() 
            {
                return null;
            } 
                 
            public function getIp()
            {
                return null;
            }
        };
        
        $expected = new Browser();
        $actual   = (new Get($request))();
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
    
    /**
     * get() should return browser if ip address is invalid
     */
    public function testGetReturnsBrowserIfIpIsInvalid()
    {
        $request = new class implements Request 
        {
            public function getUserAgent() 
            {
                return null;
            } 
                 
            public function getIp()
            {
                return 'foo';
            }
        };
        
        $expected = new Browser();
        $actual   = (new Get($request))();
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
    
    /**
     * get() should return a browser if user-agent is invalid
     */
    public function testGetReturnsBrowserIfUserAgentIsInvalid()
    {
        $request = new class implements Request 
        {
            public function getUserAgent() 
            {
                return 'foo';
            } 
                 
            public function getIp()
            {
                return null;
            }
        };
        
        $expected = new Browser();
        $actual   = (new Get($request))();
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
    
    /**
     * get() should return a browser if ip address and user-agent are valid
     */
    public function testGetReturnsBrowserIfIpAndUserAgentAreValid()
    {
        $request = new class implements Request 
        {
            public function getUserAgent() 
            {
                return 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) '
                    . 'AppleWebKit/601.6.17 (KHTML, like Gecko) Version/9.1.1 '
                    . 'Safari/601.6.17';
            } 
                 
            public function getIp()
            {
                return '1.2.3.4';
            }
        };
        
        $expected = (new Browser())
            ->setName('Safari')
            ->setVersion('9.1.1')
            ->setPlatform('Macintosh')
            ->setIp('1.2.3.4');
        $actual = (new Get($request))();
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
}
