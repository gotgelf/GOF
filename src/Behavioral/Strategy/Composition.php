<?php

namespace Behavioral\Strategy;

class Composition
{
    /**
     * @var Compositor
     */
    private $compositor;

    // the list of components
    private $components;

    // the number of components
    private $componentCount;

    // the Composition's line width
    private $lineWidth;

    // the position of linebreaks in components
    private $lineBreaks;

    // the number of lines
    private $lineCount;

    public function __construct(Compositor $compositor)
    {
        $this->compositor = $compositor;
    }

    public function repair()
    {
        // prepare the arrays with the desired component sizes
        // ...

        $natural        = array();
        $stretchability = array();
        $shrinkability  = array();
        $componentCount = 5;
        $lineWidth      = 5;
        $breaks         = array();

        // determine where the breaks are:
        $breakCount = $this->compositor->compose($natural, $stretchability, $shrinkability,
            $componentCount, $lineWidth, $breaks);

        // lay out components according to breaks
        // ...
    }
} 
