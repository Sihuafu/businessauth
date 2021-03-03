<?php

namespace AntFoot\BusinessAuth;

use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class BusinessAuth
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;

    /**
     * Packagetest constructor.
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    /**
     * @param string $msg
     *
     * @return string
     */
    public function test_rtn($msg = '')
    {
        $config_arr = $this->config->get('packagetest.options');

        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}
