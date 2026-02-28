<?php

class createSearchSqlQuery {

    private $test;

    private $test1;

    private $test2;

    private $test3;

    private $test4;

    private $page;

    private static $pageSize = 20;

    private $createSearchSqlQuery;

   public function createSearchQuery(): string{
        $this->createSearchSqlQuery =  "SELECT {column} from test  as tm
        LEFT JOIN test1 as ah ON test1.testID = test.test_id";
        if($this->test){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' test="'.$this->test.'"';
        } 
        if($this->test1){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' test1="'.$this->test1.'"';
        } 
        if($this->test2){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' test2="'.$this->test2.'"';
        } 

        if($this->test3){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' test3="'.$this->test3.'"';
        } 

        if($this->test4){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' test4="'.$this->test4.'"';
        } 
        
        if($this->page){
            $this->createSearchSqlQuery .=   " LIMIT ".self::$pageSize." OFFSET ".($this->page == 1 ? "0" : self::$pageSize*($this->page-1));
        }
        return $this->createSearchSqlQuery;
      }
   
}
