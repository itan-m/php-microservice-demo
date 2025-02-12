<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * Class IndexController
 * @Controller()
 */
class IndexController extends AbstractController
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    /**
     * @RequestMapping(path="test",methods="get,post")
     * @return int
     * @author a_he
     */
    public function test()
    {
        return 123;
    }
}
