<?php
namespace MadStoreBundle\Entity;

 use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="car")
  */
 class Car
 {
     /**
      * @ORM\Id
      * @ORM\Column(type="integer")
      * @ORM\GeneratedValue(strategy="AUTO")
      */
     protected $id;

     /**
      * @ORM\Column(type="string", length=100)
      */
     protected $name;
     
     /**
      * @ORM\Column(type="string", length=100)
      */
     protected $model;

     /**
      * @ORM\Column(type="text")
      */
     protected $segment;
     
     /**
      * @ORM\Column(type="text")
      */
     protected $color;
     
     /**
      * @ORM\Column(type="text")
      */
     protected $engine;
     
     /**
      * @ORM\Column(type="integer")
      */
     protected $rentDate;
     
      /**
      * @ORM\Column(type="integer")
      */
      protected $returnDate;
     
     /**
      * @ORM\Column(type="decimal", scale=2)
      */
     protected $price;

     
 
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Car
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set segment
     *
     * @param string $segment
     *
     * @return Car
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Car
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set engine
     *
     * @param string $engine
     *
     * @return Car
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return string
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Set rentDate
     *
     * @param integer $rentDate
     *
     * @return Car
     */
    public function setRentDate($rentDate)
    {
        $this->rentDate = $rentDate;

        return $this;
    }

    /**
     * Get rentDate
     *
     * @return integer
     */
    public function getRentDate()
    {
        return $this->rentDate;
    }

    /**
     * Set returnDate
     *
     * @param integer $returnDate
     *
     * @return Car
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return integer
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }
}
