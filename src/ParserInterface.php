<?php
namespace almat\parser;
/**
 *
 * @author Almat
 */
interface ParserInterface {
     /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url , string $tag):array;
}
