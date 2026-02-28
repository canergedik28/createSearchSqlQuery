<?php

class CreateSearchSqlQuery {

    private $test;

    private $test1;

    private $test2;

    private $test3;

    private $test4;

    private $price_min;

    private $price_max;

    private $page;

    private $order = 2;

    private static $pageSize = 20;

    private $createSearchSqlQuery;

   public function createSearchQuery(): string{
        $this->createSearchSqlQuery =  "SELECT {column} from test  as ts
        LEFT JOIN test1 as ts1 ON ts1.testID = ts.test_id";
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


        if($this->price_min){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' price >='.$this->price_min.'';
        } 

        if($this->price_max){
          $this->createSearchSqlQuery =  preg_match('/WHERE/',$this->createSearchSqlQuery)   ? $this->createSearchSqlQuery : $this->createSearchSqlQuery .= ' WHERE';
          $this->createSearchSqlQuery .=  (substr($this->createSearchSqlQuery,-5,  null)  == "WHERE" ? ' ' : ' AND '). ' price <='.$this->price_max.'';
        } 

        if($this->order){
          switch($this->order){
             case 1 : $this->createSearchSqlQuery .= ' ORDER BY created_date ASC ';  break;
             case 2 : $this->createSearchSqlQuery .= ' ORDER BY created_date DESC ';  break;
             default: $this->createSearchSqlQuery .= ' ORDER BY created_date DESC '; break;
          }
        }
        
        if($this->page){
            $this->createSearchSqlQuery .=   " LIMIT ".self::$pageSize." OFFSET ".($this->page == 1 ? "0" : self::$pageSize*($this->page-1));
        }
        return $this->createSearchSqlQuery;
      }
   
}
