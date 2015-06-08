<?php

namespace Behavioral\Strategy;

interface Compositor
{
    /**
     * @param array $natural
     * @param array $stretch
     * @param array $shrink
     * @param $componentCount
     * @param $lineWidth
     * @param array $breaks
     * @return mixed
     */
    function compose(array $natural, array $stretch, array $shrink,
            $componentCount, $lineWidth, array $breaks);
} 
