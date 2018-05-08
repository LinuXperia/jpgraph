<?php

class MultigraphTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
        $className = strtolower(str_replace('Test', '', str_replace(__NAMESPACE__ . '\\', '', get_class($this))));

        $this->exampleRoot = (dirname(__DIR__)) . '/Examples/examples_' . $className . '/';

    }

    protected function _after() {}

    // tests
    public function testSomeFeature() {}

    public function testFileIterator()
    {
        $files = ['comb90dategraphex01.php', 'comb90dategraphex02.php', 'comb90dategraphex03.php', 'combgraphex1.php', 'combgraphex2.php'];foreach ($files as $file) {$this->_fileCheck($file);}
    }
}
