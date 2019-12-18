<?php
//use API OF OTHERS

        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        // CURLOPT_URL => "http://myapi.com/api/post/read.php",
        // CURLOPT_RETURNTRANSFER => true,
        // CURLOPT_TIMEOUT => 30,
        // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        // CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_HTTPHEADER => array(
        //     "cache-control: no-cache"
        // ),
        // ));

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);
        // $response = json_decode($response, true); //because of true, it's in an array
        // echo 'Post Id = '.$response['id'];


//use xml api content in other page
    //$otp_number = rand(111111, 999999);
     //$otp = urlencode("$otp_number OTP ");


     //$url = "http://admagister.net/api/mt/SendSMS?user=website&password=Website&senderid=ADMGTR&channel=Trans&DCS=0&flashsms=0&number=9810296882&text=$otp&route=30";

       //$data = file_get_contents($url);
       //$response = json_decode($data, true);
       //echo $response['MessageData'][0]['Number'].'<br>';
       //echo "<pre>";
       //print_r($response);
       //echo "</pre>";

//githubs commands
    // credentials:
    // userName = Neeraj-metech
    // email = neeraj.metkumar@gmail.com
    // pass = king@124

        //for changeing the directory
            // cd /d

        //for viewing the folders and files in directory
            // ls

        //for changeing folder
            // cd text.txt/

        // for connecting github
            // git config --global user.name "YOR USER NAME"
            // git config --global user.email "YOR EMAIL ID"

        //for clone the data from the github to local
            // git clone URL OF REPOSITORY

        //for update the clone files
            //git pull origin master

        //for checking the status of the files
            // git status

        //for uploading the files from local to github
            // git commit -m "first commit" mytext.txt
            // git push -u origin master



// basic commends
    // git config --global user.name "Neeraj-metech"
    // git config --global user.email "neeraj.metkumar@gmail.com"
    // git init
    // git add [filename] -A
    // git status
    // git commit -m "msg"
    // git remote add origin repoName
    // git push origin master
    // git clone repoName
    // git pull origin master
        

// branch commends
    // git branch
    // git barnch "New Branch Name"
    // git checkout "Branch Name"


// Logs commends
    // git log
    // git log -p
    // git log --oneline
    // git log -2
    // git log -i --grep ="text"
    // git log -i author="Neeraj kumar"

//end githubs commands

//laravel cmd commends
    // for install laravel
    // composer create-project --prefer-dist laravel/laravel example
    //laravel 5.7
    //composer create-project laravel/laravel test dev-develop

    

    //Access the MySQL CLI
    //mysql -u root -p

    //Create Database for Laravel
    //CREATE DATABASE laravel DEFAULT CHARACTER SET utf8 COLLATE ucltf8_general_ci;

    //Creating Controller at git-bash
    //php artisan make:controller PagesController
    
    
    //Creating PostsController at git-bash
    //php artisan make:controller PostsController --resource
    
    //Creating module at git-bash
    //php artisan make:model Post

    //Migrate DB
    //php artisan migrate

    //maintenance mode
    //php artisan down
    


    //maintenance mode done
    //php artisan up

    
    //Tinker
    //php artisan tinker

    //npm install for import node_modules bootstrap
    //npm install

    //for reload the bootstrap files
    //npm run dev

    //for autoreload the bootstrap files
    //npm run watch

    //Inster data through gid bash
        // >>> App\Post::count()
        // => 0
        // >>> $post= new App\Post()
        // => App\Post {#700}
        // >>> $post->title='post one'
        // => "post one"
        // >>> $post->body="This is post body"
        // => "This is post body"
        // >>> $post->save()
        // => true
        // >>>

    //show routing gibbash
    // php aritsan rout:list

    //laravelcollective/html(cmd)
        //composer require "laravelcollective/html": "^5.4.0"

        //Add ServiceProvider
        //Collective\Html\HtmlServiceProvider::class,

        //Add aliases
        /*
            'Form' => Collective\Html\FormFacade::class,
            'Html' => Collective\Html\HtmlFacade::class,
        */

    //laravel ckeditor
        //composer require unisharp/laravel-ckeditor

        //Add ServiceProvider
        //Unisharp\Ckeditor\ServiceProvider::class,

        //Publish the resources
        //php artisan vendor:publish --tag=ckeditor

        //Usage
        // <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        // <script>
        //     CKEDITOR.replace( 'article-ckeditor' );
        // </script>


    
//End laravel cmd commends
    


//sorting of an array
    // $num = array(4,5,1,12,44,1,5,78,6,4,0,46);
    // $numCount = count($num);
    // for ($i=0; $i <$numCount ; $i++) { 
    //     for ($j=$i+1; $j < $numCount; $j++) { 
    //         if ($num[$i] < $num[$j]) {
    //             $temp = $num[$i];

    //             $num[$i]=$num[$j];
    //             $num[$j] = $temp;
    //         }
    //     }
    // }
    
    // echo "<pre>";
    // print_r($num);
    // echo "</pre>";


//remove dublicate value from array without using any function
        // $num = array(4,5,1,12,44,1,5,78,6,4,0,46);
        // $newarray= array();

        //with foreach loop
        // foreach ($num as $newnum) {
        //     foreach ($newarray as $newvalue) {
        //         if ($newnum == $newvalue) {
        //             continue 2;
        //         }
        //     }
        //     $newarray[] = $newnum;
        // }      

        //with for loop
        // for ($i=0; $i < count($num); $i++) { 
        //     for ($j=0; $j < count($newarray); $j++) { 
        //         if ($num[$i]==$newarray[$j]) {
        //             continue 2;
        //         }
        //     }
        //     $newarray[]=$num[$i];
        // }
        // echo "<pre>";
        // print_r($newarray);
        // echo "</pre>";


// add two array as key and value pair ex:- $a=array(a,b,c); $b=array(4,5,6) then result should be array(a=>4,b=>5,c=>6)

        // $a = array(a,b,c);
        // $b = array(4,5,6);
        // $c = count($a);
        // $d = array();
        // for ($i=0; $i < $c; $i++) { 
        //     $d[$a[$i]] = $b[$i];
        //     }
        // echo "<pre>";
        // print_r($d);
        // echo "</pre>";




//print a triangle pattern

    // for ($i=0; $i < 10; $i++) { 
    //     for ($j=0; $j <= $i; $j++) { 
    //         echo '*';
    //     }
    //     echo "<br/>";
    // }

//reverse pattern

    // for ($i=10; $i >= 0; $i--) { 
    //     for ($j=0; $j <= $i; $j++) { 
    //         echo '*';
    //     }
    //     echo "<br/>";
    // }


//triangle
    //$row = 10;
    // for ($i=1; $i < $row; $i++) { 
    //     for ($j=1; $j <= $row-$i; $j++) { 
    //         echo "&nbsp;";
    //     }
    //     for ($k=1; $k <= $i; $k++) { 
    //         echo "*&nbsp;";
    //     }
    //     echo "<br>";
    // }

// Reverce patter
    //$row = 10;
    // for ($i=$row; $i > 0; $i--) { 
    //     for ($j=$row-$i; $j >= 0; $j--) { 
    //         echo "&nbsp;";
    //     }
    //     for ($k=$i; $k > 0; $k--) { 
    //         echo "*&nbsp;";
    //     }
    //     echo "<br>";
    // }


// swap two number without using third variable
        // $a = 15;
        // $b = 20;

        // $a = $a + $b;
        // $b = $a - $b;
        // $a = $a - $b;
        // echo "now a=".$a."and b=".$b;


//find the lenght of a string without using any function
    // $string = 'dfsaofsndao';
    // $temp ='';
    // $i=0;
    // while (isset($string[$i])) {
    //     $temp .= $string[$i];
    //     $i++;
    // }

    // echo $temp.'<br>';
    // echo $i;

//Merge two array without duplicates value
        // $a = array(4,5,7,14,34,57,8);
        // $b = array(6,4,2,6,7,8,9,5);

        // $c = array();
        // foreach ($a as $value) {
        //     foreach ($c as $result) {
        //         if ($value == $result) {
        //             continue 2;
        //         }
        //     }
        //     $c[] = $value;
        // }

        // foreach ($b as $value) {
        //     foreach ($c as $result) {
        //         if ($value == $result) {
        //             continue 2;
        //         }
        //     }
        //     $c[] = $value;
        // }

        // echo "<pre>";
        // print_r($c);
        // echo "</pre>";


//Merge two array without any function

        // $a = array(4,5,7,14,34,57,8);
        // $b = array(6,4,2,6,7,8,9,5);

        // $c = array();
        // foreach ($a as $value) {
        //     $c[] = $value;
        // }
        // foreach ($b as $value) {
        //     $c[] = $value;
        // }

        // echo "<pre>";
        // print_r($c);
        // echo "</pre>";

//Merge two array only duplicate value without any function
        
        // $a = array(4,5,7,14,34,57,8);
        // $b = array(6,4,2,6,7,8,9,5);

        // $c = array();
        // $d = array();
        // foreach ($a as $value) {
        //     foreach ($c as $result) {
        //         if ($value==$result) {
        //             $d[] = $value;
        //             continue 2;
        //         }
        //     }
        //     $c[] = $value;
        // }
        // foreach ($b as $value) {
        //     foreach ($c as $result) {
        //         if ($value==$result) {
        //             $d[] = $value;
        //             continue 2;
        //         }
        //     }
        //     $c[] = $value;
        // }

        // echo "<pre>";
        // print_r($d);
        // echo "</pre>";

//check string is exist or not
		// $str1 = 'sdfyewaowowe';
		// $str2 = 'wow';
		// if (strpos($str1,$str2)) {
		//     echo strpos($str1,$str2);
		//     echo "string is exist";
		// }else{
		//     echo "string is not exist";

		// }



//pre and post increment and decrement

    // $x = 5;
    // echo $x;
    // echo "<br />";
    // echo $x++ + $x++;
    // echo "<br />";
    // echo $x;
    // echo "<br />";
    // echo $x---$x--;
    // echo "<br />";
    // echo $x;

//$a refrence to $b

    // $a = '1';
    // $b = &$a;
    // $b = "2$b";
    // echo $a;

//
    // var_dump(0123 == 123).'<br>';
    // var_dump('0123' == 123).'<br>';
    // var_dump('0123' === 123).'<br>';

//
    // $x = true and false;
    // var_dump($x);

//
    // $x = 3 + "15%" + "$25";
    // echo $x;

//A pattern

    // for ($i = 1; $i <= 5; $i++) {
    //     for ($j = 5; $j > $i; $j--) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     echo "*";
        
    //     for ($j = 1; $j < ($i - 1) * 2; $j++) {
    //         echo "&nbsp;&nbsp;";
    //     }

    //     if ($i == 1)
    //         echo "</br>";
    //     else
    //         echo "*</br>";
    // }
 
    // for ($i = 4; $i >= 1; $i--) {
    
    //     for ($j = 5; $j > $i; $j--) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //         echo "*";
        
    //     for ($j = 1; $j < ($i - 1) * 2; $j++) {
    //         echo "&nbsp;&nbsp;";
    //     }
    //     if ($i == 1)
    //         echo "</br>";
    //     else
    //         echo "*</br>";
    // }

//Write a program in PHP to print Fibonacci series . 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
		// $first = 0;
		// $second = 1;
		// echo $first.'&nbsp;,';
		// echo $second.'&nbsp;,';


		// for($limit=0;$limit<10;$limit++)
		// {
		// $third = $first+$second;
		// echo $third.'&nbsp;,';;
		// $first = $second;
		// $second = $third;
		// }

//Write a program to print Reverse of any number

		// $num = 58;
		// $rev=0;
		// while($num>=1)
		// {
		// $re=$num%10;
		// $rev = $rev*10 + $re;
		// $num=$num/10;
		// }
		// echo $rev;


// check number is prime or not
		// 	$num=22;
		// 		if($num%2==0)
		// 		{
		// 			// $check++;
		// 			$prime = "number is not prime";
		// 		}else{
		// 			$prime = "number is prime";
		// 		}

		// echo $prime;

// print D pattron

	 // for($i = 1; $i<=5; $i++){
	 //        for($j = 1; $j<=5; $j++){
	 //           if($i == 1 || $i == 5){
	 //               echo "*";
	 //           }
	 //           else if($j == 1 || $j == 5){
	 //               echo "*";
	 //           }
	 //           else {
	 //               echo "&nbsp;&nbsp;";
	 //           }
	 //        }
	 //        echo "<br/>";
	 // }



//convert a number to array
	 // $number = 2464654;
	 // $array  = array_map('intval', str_split($number));
     // print_r($array);




//Here 0 indecate octal number. so 016 is treated as 14.
				// $i = 016; // octal number
				// echo $i / 2; // output: 7



// how to access the visiblity of public, private and protected function in oops.
		// class A
		// {
			
		// 	public $public = 'Public';
		//     protected $protected = 'Protected';
		//     private $private = 'Private';
		//     static $static = 'static';
		// 	private function printHello()
		//     {
		//         echo $this->public;
		//         echo $this->protected;
		//         echo $this->private;
		//         echo $this::$static;
		//     }

		//    function myfunction(){
		//    	$this->printHello();
		//    }
		// }

		// $d = new A();
		// echo $d->myfunction();


// What is Encapsulation?
// Encapsulation is an attribute of an object, and it contains all data which is hidden. That hidden data can be restricted to the members of that class.
        
            // class Person{
            // private $name;
            // public $gender; 
            // public $address; 
            // public $height; 
            // public $color; 
            // public $race; 
            // public function __construct($name){ 
            // $this->race = "human"; 
            // $this->name = $name;
            // }
            // public function getName(){
            // return $this->name;
            // }
            // public function setName($name){
            // $this->name = $name;
            // }
            // }

            // $per = new Person('neeraj');
            // echo $per->getName();




//What is Polymorphism?
//Polymorphism is nothing but assigning behavior or value in a subclass to something that was already declared in the main class. Simply, polymorphism takes more than one form.

//What is Inheritance?
//Inheritance is a concept where one class shares the structure and behavior defined in another class.

//What is an abstract class?
//An abstract class is a class which cannot be instantiated. Creation of an object is not possible with an abstract class, but it can be inherited. An abstract class can contain only Abstract method. In one way, hiding unnecessary details or implementation about the functionality from the user is called  Abstraction.

        //     abstract class A{
        //     public $length;
        //     public $width;
        //     public $sides; 
        //     abstract public function setLenth($len);
        //     abstract public function setWidth($width); 
        //     abstract public function setSides($sides);
        // }

        // class B extends A{
        //     function setLenth($len){
        //         $this->length = $len;
        //     }
        //     function getLenth(){
        //         return $this->length;
        //     }
        //     function setWidth($width){

        //     } 
        //     function setSides($sides){

        //     }
        // }

        // $obj = new B();
        // $obj->setLenth('55');
        // echo $obj->getLenth();





//interface:: implements
//abstract:: extends


// DDL (Data Definition Language) – It allows you to perform various operations on the database such as CREATE, ALTER and DELETE objects.
// DML ( Data Manipulation Language) – It allows you to access and manipulate data. It helps you to insert, update, delete and retrieve data from the database.
// DCL ( Data Control Language) – It allows you to control access to the database. Example – Grant, rollback, Revoke access permissions.



//factorial of a number using recursion

    // function factorial($num){
    //     if ($num <= 1) {
    //         return 1;
    //     }else{
    //         return $num * factorial($num - 1);
    //     }
    // }
    // echo factorial(5);


//sum of factorial of nth number
    // function fabsum($num){
    //     if ($num==1 || $num==2) {
    //         return 1;
    //     }else{
    //         return fabsum($num-1) + fabsum($num-2);
    //     }
    // }

    // echo '<br/>';
    // echo fabsum(5);
    // echo '<br/>';



//ajax syntax with jquery
            // function ajaxmodel() {
            //     var  model_api_value = $('#model_api').val();
            //     var  vtype_value = $('#vehicle_type').val();
            //     var make = $('#make').val();
               
            //     make = make.split('_');
            //     jQuery.ajax({
            //         type: 'POST',
            //         url: surl+'tradevalue/modeldata/',
            //         data: {markeid: make[1], vtype: vtype_value},
            //         dataType: 'json',
            //         success: function (res) {
            //             var outputStr = 'fadsf';
            //             $('#model').html(outputStr);
            //         }
            //     });
            // }


//ajax function
            // function loadDoc(){
            // xhttp = new XMLHttpRequest();
            // xhttp.onreadystatechange = function(){
            //     if (xhttp.readyState==4 && xhttp.status==200) {
            //         var jsonobj = JSON.parse(xhttp.responseText);
            //         var txt = "<p>"+jsonobj.language+"</p><p>"+jsonobj.author+"</p>";
            //         document.getElementById('demo').innerHTML = txt;
            //     }
            // };
            //     xhttp.open('GET','book.json',true);
            //     xhttp.send();
            // }

            //Here
            // 0: request not initialized 
            // 1: server connection established
            // 2: request received 
            // 3: processing request 
            // 4: request finished and response is ready
            // 200: "OK"
            // 403: "Forbidden"
            // 404: "Not Found"


//traits in oops
//The concept of Traits is introduced in PHP 5.4, which is basically a group of functions which can be used in any other classes. To overcome the problem of Multiple Inheritance, PHP introduced traits which is very much welcomed by PHP community.

            // trait MyFirstTrait{
            //     public function traitMethod1(){ 
            //     echo "traitMethod1";
            //     } 
            // }
            // trait MySecondTrait{
            //     public function traitMethod2(){ 
            //     echo "traitMethod12";
            //     } 
            // }
            // class SampleClass{ 
            //     use MyFirstTrait, MySecondTrait; 
            //     public function classMethod1(){ 
            //      $this->traitMethod1(); 
            //     }
            //     public function classMethod2(){ 
            //      $this->traitMethod2(); 
            //     } 
            // }

            // $obj = new SampleClass();
            // $obj->classMethod1();


//Example of overloading
//In the example above, the function compute is overloaded with two different parameter signatures. *This is not yet supported in PHP. An alternative is to use optional arguments:

                // class TDshape {
                // const Pi = 3.142 ;  // constant value
                //  function __call($fname, $argument){
                //     if($fname == 'area'){
                //         switch(count($argument)){
                //             case 0 : return 0 ;
                //             case 1 : return self::Pi * $argument[0] ; // 3.14 * 5
                //             case 2 : return $argument[0] * $argument[1];  // 5 * 10
                //         }
                //     }

                //     }

                // }
                // $circle = new TDshape();
                // echo "Area of circle:".$circle->area(5)."</br>"; // display the area of circle
                //  $rect = new TDshape();
                // echo "Area of rectangle:".$rect->area(5,10); // display area of rectangle

                // output
                // ================
                // Area of circle:15.71
                // Area of rectangle:50


    // class Addition {
    //     function compute($first=0, $second=0, $third = 0, $four = 0, $five = 0) {
    //         return $first+$second+$third+$four+$five;
    //     }
    // }
    // $additon = new Addition();
    // echo $additon->compute(4,5);

// Example of overriding
//Function overriding occurs when you extend a class and rewrite a function which existed in the parent class:

            // class Addition {
            //   function compute($first, $second, $third = 0) {
            //     return $first+$second+$third;
            //   }
            // }

            // class Substraction extends Addition {
            //   function compute($first, $second, $third = 0) {
            //     return $first-$second-$third;
            //   }
            // }

//set cookies
    //setcookie(name, value, expire, path, domain, secure, httponly);
    // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


// $read = fopen('demo.txt', 'w');
// echo fread($read,filesize("demo.txt"));
// fclose($read);

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe2\n";
// fwrite($myfile, $txt);
// fclose($myfile);


// stringify or parse JSON Data
            // <script>
            //     var myObj, myJSON, text, obj;

            //     // Storing data:
            //     myObj = { name: "John", age: 31, city: "New York" };
            //     myJSON = JSON.stringify(myObj);
            //     localStorage.setItem("testJSON", myJSON);

            //     // Retrieving data:
            //     text = localStorage.getItem("testJSON");
            //     obj = JSON.parse(text);
            //     document.getElementById("demo").innerHTML = obj.name;
            // </script>


//php functions
            // count();
            // strlen();
            // impload(); //array to string
            // expload(); // string to array
            // array_marge();
            // array_combain();
            // isset();
            // str_split(); //a string to array
            //strtoupper();
            //strtolower();
            //date();
            //array_sum();


// Rollback function in pdo
            // public function insertMyVehicle_and_archive_order_and_delete($carID,$arr,$orderID,$type){ 
            //     $con = $this->_con->con();

            //     try{

            //       $con->prepare("SET autocommit=0;")->execute();


            //       $sql = "insert into ".PREFIX."customer_order_archive SELECT  * FROM  ".PREFIX."customer_order  WHERE  ".PREFIX."customer_order.id_order='" . $_SESSION['id_order'] . "'";
            //       $stmt = $con->prepare($sql);
            //       $stmt->execute();


            //       $seid = $type.'_id='.$carID;
            //       $sql1 = "insert into ".PREFIX.$type."index_archive SELECT  * FROM ".PREFIX.$type."index  WHERE ".PREFIX.$type."index.".$seid.' AND dealer_id = '.$arr[0]['dealer_id'];
            //       $stmt1 = $con->prepare($sql1);
            //       $stmt1->execute();

            //       $delerID = $con->query("SELECT dealer_id FROM ".PREFIX."customer_order_archive where id_order='" . $_SESSION['id_order'] . "' ")->fetch(PDO::FETCH_ASSOC); 
            //       $sqldel = "DELETE  FROM ".PREFIX."customer_order WHERE id_order='" . $_SESSION['id_order'] . "'";
            //       $stmtdel = $con->prepare($sqldel);
            //       $stmtdel->execute();

            //       $cardel = "DELETE FROM  ".PREFIX.$type."index  WHERE dealer_id='".$delerID['dealer_id']."' AND ".PREFIX.$type."index.".$seid;
            //       $cardel1 = $con->prepare($cardel);
            //       $cardel1->execute(); 


            //       $con->prepare("COMMIT;")->execute();
            //       return "commited";

            //     }catch (Exception $e) {

            //         $con->prepare("ROLLBACK;")->execute();
            //         return $e->getMessage();
            //     }
            // }





//Rolling multipal column in single row
            // SELECT 
            //    q.id,
            //    GROUP_CONCAT(DISTINCT a.q_id SEPARATOR ",") as q_id,
            //    GROUP_CONCAT(DISTINCT a.answer SEPARATOR ",") as answer
            // FROM question q
            // LEFT JOIN answer a ON a.q_id = q.id
            // GROUP BY q.id,a.q_id
            // ORDER by 1,2

// difference between WHERE AND HAVING Clause

            // A WHERE clause is used is filter records from a result.  The filter occurs before any groupings are made.
            // A HAVING clause is used to filter values from a group.

            // SELECT
            // FROM
            // WHERE
            // GROUP BY
            // HAVING

// Synchronous: = Executing something synchronously means, you wait for the task to finish before moving on to another task. Or we can say, two synchronous threads must be aware of one another, and one must execute in some way that is dependent on the other.

// Asynchronous : = Executing something asynchronously means, you can move on to another task without waiting for the first task to get finished. The result of each task will be handled once the result is available. Or in other words, Asynchronous means two threads are totally independent, run parallely and neither one comes in each other way at the time of execution.


            



?>




