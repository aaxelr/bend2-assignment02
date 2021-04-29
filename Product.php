<?php 

class Product
{
    /****************************
     * Private instance variables
     */
    private $id;
    private $title;
    private $description;
    private $image;
    private $price;
    private $category;


    /*************
     * Constructor
     */
    public function __construct($id, $title, $description, $price, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $this->get_random_image($this->id);
        $this->price = $price;
        $this->category = $category;
    }

    /***********************
     * Get image based on id
     */
    public function get_random_image($id)
    {
        $image_url = "https://picsum.photos/400?random=$id";

        return $image_url;
    }

    /*************************
     * Convert object to array
     */
    public function to_array()
    {
        $array = array(
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "image" => $this->image,
            "price" => $this->price,
            "category" => $this->category
        );

        return $array;
    }
}
