<?php

$obj = new main();
$text = "I love NYC";
$array = array(22,11,66,55,44,33);
$array1 = array("Red", "White", "Blue", "Black");
$a2 = array("blue","yellow");
$obj->array1($array);
$obj->array_push1($array1);
$obj->array_pop1($array1);
$obj->array2($array1);
$obj->array3($array1);
$obj->array4($array1);
$obj->array6($array);
$obj->array7($array1);
$obj->array8($array1,$a2);
$obj->array9($array1);
$obj->print1($text);
$obj->print2($text);
$obj->print3($text);
$obj->print4($text);
$obj->print5($text);
$obj->print6($text); 
$obj->print7($text);
$obj->print8($text); 
$obj->print9($text); 
$obj->print10($text);   
	    class main {

	        public function __construct() {

		      echo '<h1>Assignment No : 3</h1> </br> <hr> <hr>';
          echo '<h1>Array functions</h1>';      
                

                }
                  public function array1($arr) {
			                echo '<h1> Array function 1 _sum </h1>';
				              echo '<h2> sum of array : </h2>' ." :" . array_sum($arr);
                                               
                      echo '<hr>';
						    }
                  
                  public function array_push1($array1) {
                      echo '<h1> Array function 2 _push </h1>';
                      echo '<h1>Array push function </h1>';
                      array_push($array1, "Raspberry");
                      print_r($array1);
                      
                      echo '<hr>';     
                }
                
                 public function array_pop1($array1) {
                      echo '<h1> Array function 3 _pop </h1>';
                      echo '<h1>Array Pop function </h1>';
                      array_pop($array1);
                      print_r($array1);
                      
                      echo '<hr>';  
                    
                }
                        
                  public function array2($array1){
                      echo '<h1> Array function 4 _count elements </h1>';
				              echo '<h2> no of elements in array  </h2>' ." :" . count($array1);
                      
                      echo '<hr>';
						    }           
                                        
                  public function array3($array1){
                      echo '<h1> Array function 5 _arrange elements in ascending order  </h1>';
				              echo '<h2> Ascending order is </h2>';
                      sort($array1);
                      
                      $clength = count($array1);
                      for($x = 0; $x < $clength; $x++) {
                      echo $array1[$x];
                      echo "<br>";
                      }
                      echo '<hr>';
						    }                               
                  public function array4($array){
                      echo '<h1> Array function 6 _arrange elements in descending order  </h1>';
				              echo '<h2> descending order is </h2>';
                      rsort($array);
                      
                      $clength = count($array);
                      for($x = 0; $x < $clength; $x++) {
                      echo $array[$x];
                      echo "<br>";
                      }
                      echo '<hr>';
						    }           
                                          
                  public function array6($array) {
			                echo '<h1> Array function 7_ product of elements </h1>';
				              echo '<h2> product of array : </h2>';
                      echo(array_product($array));
                      
                      echo '<hr>';
                }   
                
                  public function array7($array1){
                      echo '<h1> Array function 8_reverse array</h1>';
				              echo '<h2> reverse order of array is : </h2>';
                      print_r(array_reverse($array1));
                      
                      echo '<hr>';
						         
						    }   
                
                  public function array8($array1,$a2){
                      echo '<h1> Array function 9_replacing array</h1>';
				              echo '<h2> array 1 replaced with array2  : </h2>'; 
                      print_r(array_replace($array1,$a2));
                      
                      echo'<hr>';
                }
                
                public function array9($array1){
                      echo '<h1> Array function 10_fliping the array</h1>';
				              echo '<h2> flip of an array  : </h2>'; 
                      print_r(array_flip($array1));
                      
                      echo'<hr>';
                      echo'<hr>';
                }
                                  
			            public function print1($str) {
			                echo '<h1> String function 1 </h1>';
				              echo '<h2> string length : </h2>' ." :" . strlen($str);
                                               
                      echo '<hr>';
						    }
                  public function print2($str) {
			                echo '<h1> String function 2 </h1>';
				              echo '<h2> shuffled string : </h2>' ." " . str_shuffle($str);
                                               
                      echo '<hr>';
						    }
                  
                  public function print3($str) {
			                echo '<h1> String function 3 </h1>';
				              echo '<h2> Upper case 1st letter in string : </h2>' ." " . ucfirst($str);
                                               
                      echo '<hr>';
						    }
                  
                  public function print4($str) {
			                echo '<h1> String function 4 </h1>';
				              echo '<h2> string in Lower case : </h2>' ." " . strtolower($str);
                                               
                      echo '<hr>';
						    }
                  
                  public function print5($str) {
			                echo '<h1> String function 5 </h1>';
				              echo '<h2> string in upper case : </h2>' . " " . strtoupper($str);
                                               
                      echo '<hr>';
						    }
                
                  public function print6($str) {
			                echo '<h1> String function 6 </h1>';
				              echo '<h2> String\'s 1st word uppercase: </h2>' . " " . str_word_count($str);
                                               
                      echo '<hr>';
                     
						    }
                               public function print7($str) {
			                echo '<h1> String function 7 </h1>';
				              echo '<h2> Reverses the string: </h2>' . " " . strrev($str);
                                               
                      echo '<hr>';
						    }
                               public function print8($str) {
			                echo '<h1> String function 8 </h1>';
				              echo '<h2> Displays the 1st and 4th string\'s position   : </h2>' . " " . substr($str, 0, 4);
                                               
                      echo '<hr>';
						    }
                               public function print9($str) {
			                echo '<h1> String function 9 </h1>';
				              echo '<h2> string in upper case : </h2>' . " " . str_repeat($str, 6);
                                               
                      echo '<hr>';
						    }
                               public function print10($str) {
			                echo '<h1> String function 10 : string comparison function </h1>';
                        if(strcmp($str,"Akanksha") !==0)
                        {                    
				              echo '<h2> Strings are not matching </h2>';
                       }
                         else{
                             echo '<h2>The strings are matching </h2>';
                         }                     
                      echo '<hr>';
						    }
                               
                            
          
                                 
                  public function __destruct() {
                  
                      echo '</br> I\'m Done';
                }

}
?>
