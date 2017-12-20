<?php

class SessionTest
{


    public function testConfig()
    {
        $test = new \Badtomcat\Session\Session();
        $test->start();
        $test->set('c.d','foo');
        var_dump('foo' == $test->get('c.d'));
        $test->set('b.b','cc');
        var_dump($_SESSION['b']['b'] == 'cc');

    }
}

