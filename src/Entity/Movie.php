<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 * @ApiResource()
 */
class Movie
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
    private $title;

    /**
     * Undocumented variable
     *
     * @var string
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * Undocumented variable
     *
     * @var \Datetime
     * @ORM\Column(type="date")
     */
    private $release_date;   

    public function getId() { 
        return $this->id; 
    } 

    public function setId($id) {  
       $this->id = $id; 
    } 

    public function getTitle() { 
        return $this->title; 
    } 

    public function setTitle($title) {  
       $this->title = $title; 
    } 

    public function getReleasedate() { 
        return $this->releasedate; 
    } 

    public function setReleasedate($releasedate) {  
       $this->releasedate = $releasedate; 
    }
    
} 
