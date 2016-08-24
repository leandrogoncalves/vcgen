<?php
/**
 *  Class Visual composer Generator Collection
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen;


use vcgen\nodes\Vcgen_node;

class Vcgen_collection implements \Countable{

    /**
     * @var Nodes Array
     */
    private $nodes;

    /**
     * Vcgen_col constructor.
     */
    public function __construct() {
        $this->nodes = [];
    }

    /**
     * @param Vcgen_node $node
     *  @return Vcgen_collection
     */
    public function addNode(Vcgen_node $node){
        $this->nodes[] = $node;
        return $this;
    }

    /**
     * @param $bookNumberToGet
     * @return mixed
     */
    public function getNode($nodeNumber)
    {
        if (isset($this->nodes[$nodeNumber])) {
            return $this->nodes[$nodeNumber];
        }
    }

    /**
     * Countable
     * @return int
     */
    public function count(){
        return count($this->nodes);
    }

    /**
     *
     */
    public function render(){
        $tmp = '';
        foreach ($this->nodes as $node){
            $tmp .= $this->_renderNode($node);
        }
        return $tmp;
    }

    /**
     * Recursive function for render shortcode
     *
     * @param Vcgen_node $node
     */
    private function _renderNode(Vcgen_node $node){
        $tmp = "[{$node->nodeName} {$node->getAttributes()} ]";
        $tmp .= ($node->nodeContent)? $node->nodeContent : '';
        if($node->has_child()){
            while ($node->valid()){
                $tmp .= $this->_renderNode($node->current());
                $node->next();
            }
        }
        $tmp .= $node->nodeType === Vcgen_node::NODE_BLOCK ? "[/{$node->nodeName}]" : '';
        return $tmp;
        
    }

}