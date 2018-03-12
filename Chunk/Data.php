<?php

namespace Fedoskin\Wave\Chunk;

use Fedoskin\Wave\Channel;

/**
 * Description of Data
 *
 */
class Data extends ChunkAbstract
{
    const NAME = 'data';
    
    protected $channels;
    
    /**
     * 
     * @param integer $size
     */
    public function __construct($size = null) 
    {
        if($size) {
            $this->setSize($size);
        }
    }
    
    /**
     * 
     * @see FedoskinWave\Chunk\ChunkInterface
     * @return string
     */
    public function getName()
    {
        return self::NAME;
    }
    
    /**
     * 
     * @return string
     */
    public function getChannels()
    {
        return $this->channels;
    }
    
    /**
     * 
     * @param string $name
     * @return Channel
     */
    public function setChannel($name, Channel $channel)
    {
        $this->channels[$name] = $channel;
        return $this;
    }
    
    /**
     * 
     * @param array $channels
     * @return Data
     */
    public function setChannels(Array $channels)
    {
        foreach($channels as $name => $channel) {
            $this->setChannel($name, $channel);
        }
        return $this;
    }

    /**
     * 
     * @param string $name
     * @throws Exception
     * @return Channel
     */
    public function getChannel($name)
    {
        if(!key_exists($name, $this->channels)) {
            throw new Exception(sprintf('No channel with name "%s" exists', $name));
        }
        
        return $this->channels[$name];
    }
}
