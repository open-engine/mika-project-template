<?php declare(strict_types=1);

namespace App\Main\Controllers;

use OpenEngine\Mika\Core\Components\Http\Message\Response\Response;

/**
 * Class DefaultController
 * @package App\Main\Controllers
 */
class DefaultController
{
    /**
     * @return Response
     */
    public function defaultAction(): Response
    {
        return new Response('Hello World!');
    }
}
