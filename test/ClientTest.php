<?php

use PHPUnit\Framework\TestCase;
use Codegyan\Compiler\Client;

class ClientTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        // Replace 'YOUR_API_KEY' and 'YOUR_CLIENT_ID' with your actual API key and client ID
        $this->client = new Client('YOUR_API_KEY', 'YOUR_CLIENT_ID');
    }

    public function testCompilePHPCode()
    {
        // PHP code to be compiled
        $code = '<?php echo "Hello, world!"; ?>';

        // Compile the PHP code
        $compiledCode = $this->client->compilePHPCode($code);

        // Perform assertions on the compiled code
        $this->assertNotEmpty($compiledCode);
        $this->assertIsString($compiledCode);
        $this->assertStringContainsString('<?php', $compiledCode); // Compiled code should contain PHP opening tag
        $this->assertStringContainsString('echo "Hello, world!";', $compiledCode); // Compiled code should contain the original code
        $this->assertStringNotContainsString('error', $compiledCode); // Compiled code should not contain error messages
    }
}

?>
