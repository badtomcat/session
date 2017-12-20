<?php
/**
 * 2017/5/15 17:36:25
 * config component
 */
namespace Badtomcat\Session;

use Badtomcat\Config\Config;

class Session extends Config
{
    protected $started = false;

    /**
     * @return $this
     */
	public function start()
    {
        if ($this->started)
            return $this;
        session_start();
        $this->items = &$_SESSION;
        $this->started = true;
        return $this;
    }
}
