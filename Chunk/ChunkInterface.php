<?php

namespace BoyHagemann\Wave\Chunk;

/**
 *
 * @author boyhagemann
 */
interface ChunkInterface 
{
    /**
     * 
     * return string
     */
    public function getName();
    
    /**
     * 
     * return integer
     */
    public function getSize();
}