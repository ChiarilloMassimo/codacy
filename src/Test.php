<?php

namespace ChiarilloMassimo\Codacy;

/**
 * Class Test
 * @package ChiarilloMassimo\Codacy
 */
class Test implements TestInterface
{
    /**
     * @return bool
     */
    public function test()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function testOps()
    {
        return false;
    }
}
