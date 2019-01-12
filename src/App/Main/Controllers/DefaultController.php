<?php declare(strict_types=1);

namespace App\Main\Controllers;

use App\Main\Models\Foo;
use Doctrine\ORM\EntityManagerInterface;
use OpenEngine\Http\Message\Response\Response;

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

    /**
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function testDoctrineAction(EntityManagerInterface $em): Response
    {
        $foo = new Foo();
        $foo->setAge(12);
        $foo->setName(\uniqid('Uniq name ', true));

        $em->persist($foo);
        $em->flush();

        /**
         * @var Foo $item
         */
        foreach ($em->getRepository(Foo::class)->findAll() as $item) {
            print $item->getName() . '<br>';
        }

        return new Response('Doctrine Test');
    }
}
