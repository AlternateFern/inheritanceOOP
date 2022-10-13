<?php

  class Student {
      public  $name       = "Daffa";
      public $class       = "XI";
      protected  $jurusan = "PPLG";
      private $nis        = "2122.5.021";
      function showData(){
          echo "nama    : $this->name    <br>";
          echo "kelas   : $this->class   <br>";
          echo "jurusan : $this->jurusan <br>";
          echo "nis     : $this->nis     <br>";
      }
  }  
  
  class pplg extends student{
      
  }
  
  $student1 = new student("");
  $student1->showData();
?>