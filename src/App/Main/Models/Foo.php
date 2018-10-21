<?php declare(strict_types=1);

namespace App\Main\Models;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity
 */
class Foo
{
    /**
     * @var int
     * @Id @GeneratedValue @Column(type="string")
     */
    private $id;
    /**
     * @var string
     * @Column(type="string")
     */
    private $name;
    /**
     * @var int
     * @Column(type="string")
     */
    private $age;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}
