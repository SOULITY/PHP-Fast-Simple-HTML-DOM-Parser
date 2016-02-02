<?php

namespace FastSimpleHTMLDom;


use DOMNode;

/**
 * Class Element
 * @package FastSimpleHTMLDom
 * @property string outertext Get dom node's outer html
 * @property string innertext Get dom node's inner html
 * @property string plaintext Get dom node's plain text
 */
class Element
{
    protected $node;

    public function __construct(DOMNode $node)
    {
        $this->node = $node;
    }

    /**
     * @return DOMNode
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return Document
     */
    public function getDom()
    {
        return new Document($this);
    }

    /**
     * Find list of nodes with a CSS selector
     *
     * @param string $selector
     * @param int $idx
     */
    public function find($selector, $idx = null)
    {
        $this->getDom()->find($selector, $idx);
    }

    /**
     * Get dom node's outer html
     *
     * @return string
     */
    public function html()
    {
        return $this->getDom()->html();
    }

    /**
     * Get dom node's inner html
     *
     * @return string
     */
    public function innerHtml()
    {
        return $this->getDom()->innerHtml();
    }

    /**
     * Get dom node's plain text
     *
     * @return string
     */
    public function text()
    {
        return $this->node->textContent;
    }

    /**
     * Get dom node's outer html
     *
     * @return string
     */
    public function outertext()
    {
        return $this->innerHtml();
    }

    /**
     * Get dom node's inner html
     *
     * @return string
     */
    public function innertext()
    {
        return $this->html();
    }

    /**
     * @param $name
     * @return string
     */
    function __get($name) {
        switch ($name) {
            case 'outertext': return $this->outertext();
            case 'innertext': return $this->innertext();
            case 'plaintext': return $this->text();
        }
    }

}