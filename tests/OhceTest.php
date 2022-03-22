<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{

    private Ohce $ohce;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->ohce = new Ohce();
    }

    /**
     * @test
     */
    public function should_rotate_a_string()
    {
        $result = $this->ohce->rotate("rotar");

        $this->assertEquals("rator", $result);
    }

    /**
     * @test
     */
    public function given_palindrome_should_response_bonita_palabra()
    {
        $result = $this->ohce->rotate("oto");

        $this->assertEquals("¡Bonita palabra!", $result);
    }

    /**
     * @test
     */
    public function given_stop_should_response_adios()
    {
        $result = $this->ohce->rotate("Stop!");

        $this->assertEquals("Adios ", $result);
    }

}
