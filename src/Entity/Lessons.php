<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LessonsRepository")
 */
class Lessons
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=75)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lessons;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLessons(): ?string
    {
        return $this->lessons;
    }

    public function setLessons(string $lessons): self
    {
        $this->lessons = $lessons;

        return $this;
    }
}
