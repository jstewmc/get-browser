<?php
/**
 * The file for the get-browser service tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\GetBrowser;

use Jstewmc\Browser\Browser;
use Jstewmc\TestCase\TestCase;

/**
 * Tests for the get-browser service tests
 */
class GetBrowserTest extends TestCase
{
    /* !__invoke() */
    
    /**
     * __invoke() should return null if user-agent does not exist
     */
    public function testInvokeReturnsNullIfUserAgentDoesNotExist()
    {
        return $this->assertNull((new GetBrowser())());
    }
    
    /**
     * __invoke() should return null if user-agent is invalid
     */
    public function testGetReturnsBrowserIfUserAgentIsInvalid()
    {
        return $this->assertNull((new GetBrowser())('foo'));
    }
    
    /**
     * get() should return a browser if ip address and user-agent are valid
     */
    public function testGetReturnsBrowserIfIpAndUserAgentAreValid()
    {
        $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) '
            . 'AppleWebKit/601.6.17 (KHTML, like Gecko) Version/9.1.1 '
            . 'Safari/601.6.17';

        $expected = (new Browser())
            ->setPlatform('Macintosh')
            ->setName('Safari')
            ->setVersion('9.1.1');
        
        
        $actual = (new GetBrowser())($userAgent);
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
}
