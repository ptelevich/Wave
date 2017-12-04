<?php

namespace Fedoskin\Wave\Chunk;

interface ChunkInterface
{
    /**
     * 
     * @return string
     */
    public function getName();
    
    /**
     * 
     * @return integer
     */
    public function getPosition();
    
    /**
     * 
     * @parram integer $position
     */
    public function setPosition($position);

    /**
     * 
     * @return integer
     */
    public function getSize();

    /**
     * 
     * @param integer $size
     */
    public function setSize($size);
}
