<?php

namespace almat\parser;
/**
 * Description of Parser
 *
 * @author Almat
 */
class Parser implements ParserInterface {
    
    public function process(string $url, string $tag):array {
        
       $htmlPage= file_get_contents($url);
       if($htmlPage===false){
           return ['false Url'];
       }
       
       //Regular expression
       preg_match_all('/<'.$tag.'.*?>(.*?)<\/'.$tag.'>/s', $htmlPage,$strings);
       
       if(empty($strings[1])){
           return ['There are no such tags on the page'];
       }
       return $strings[1];
    }

}
