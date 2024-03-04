<?php

use PHPUnit\Framework\TestCase;
use App\Revert;

class RevertTest extends TestCase
{
    public function testRevertCharacters()
    {
        $revert = new Revert;
        
        $input1 = "Hello! Abc wgd.";
        $expected1 = "Olleh! Cba dgw.";
        $this->assertEquals($expected1, $revert->revertCharacters($input1));

        $input2 = "";
        $expected2 = "";
        $this->assertEquals($expected2, $revert->revertCharacters($input2));
    }
}