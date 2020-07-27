<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 * @ApiResource()
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Undocumented variable
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * Undocumented variable
     *
     * @var object
     * @ORM\OneToMany(targetEntity="App\Entity\Movie", mappedBy="category")
     */
    private $movies;

    public function getId() { 
        return $this->id; 
    } 

    public function setId($id) {  
       $this->id = $id; 
    } 

    public function getName() { 
        return $this->name; 
    } 

    public function setName($name) {  
       $this->name = $name; 
    } 

    public function getMovies() { 
        return $this->movies; 
    } 

    public function setMovies($movies) {  
       $this->movies = $movies; 
    } 
}
	
