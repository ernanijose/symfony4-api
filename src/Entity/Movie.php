<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"id": "exact", "title": "partial", "description": "partial"})
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

    /**
     * Undocumented variable
     *
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="movies")
     */
    private $category;

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

    public function getDescription() { 
        return $this->description; 
    } 

    public function setDescription($description) {  
       $this->description = $description; 
    } 

    public function getReleasedate() { 
        return $this->release_date; 
    } 

    public function setReleasedate(\Datetime $releasedate) {  
       $this->release_date = $releasedate; 
    }

    public function getCategory() { 
        return $this->category; 
    } 

    public function setCategory($category) {  
       $this->category = $category; 
    } 
    
} 