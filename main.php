
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->

<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

<?PHP
//$connect    =   mysqli_connect("sql213.epizy.com","epiz_25683249","dUdzKoN537","epiz_25683249_bids");


$connect    =   mysqli_connect("localhost","root","","bids");


$date = date("y-m-d", time());
$_SESSION['prompt']=0;

if(isset($_POST['contact'])){
    $fname=mysqli_real_escape_string($connect,  $_POST['fname']);
    $oname= mysqli_real_escape_string($connect, $_POST['oname']);
    $email= mysqli_real_escape_string($connect, $_POST['email']);
    $message= mysqli_real_escape_string($connect, $_POST['message']);   
 
if(!empty($fname) && !empty($email)){ 
   
   $data_1="INSERT INTO `contact_message`(`fname`, `oname`, `email`, `message`, `date`) VALUES ('$fname','$oname','$email','$message','$date')"; 
   
        $done= mysqli_query($connect,$data_1); 
    if ($done){
        $_SESSION['prompt']=2;
        
        
        if($_SESSION['prompt']==2){
    echo "<script>  Swal.fire('Successful','Thank you for contacting Vipax Global Company LTD., Our team will get back to you', 'success') </script>";
}
    }
  
//$mail->SetFrom('heraldsworldinc@gmail.com','Heralds World Ministries Inc.');
//$mail->AddAddress($main_email,$main_fname." ".$main_oname." ".$main_sname);
//// $mail->AddReplyTo('jngissah@gmail.com','Joseph Ngissah');
//      
//$mail->isHTML(true);
//$mail->Subject='Prayer Request Received';
//$mail->Body='<div>  <p>Shalom '.$main_fname.' </p>       <p> Your Prayer request has been received, Pastor David will be praying for you. Your request will be met by the mighty hand of God.<br> Thank you.    </p>  <br>     <hr>  <br>     <div style="text-align:center;">  <img src="http://www.heraldsworldinc.com/images/hh.png" width="12%" >   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Heralds World Ministries Incorporated</span>  <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">Madina, Baba Yara Near the Aviation Building</span>   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Accra, Ghana</span> <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">	+233 244060781</span> ,          <span style="font-style:italic; font-family:san-sarif; color:#006994">	+233 246246105</span> <br>          <span style="font-style:italic; font-family:san-sarif; color:#006994">	<a>www.heraldsworldinc.com</a> </span> <br>      </div>      </div>  <div>';
//      
//if($mail->send()){
//    
//    // echo 'email sent';
//}
}
 
 
    }

if(isset($_POST['bid_now'])){
    $fname=mysqli_real_escape_string($connect,  $_POST['fname']);
    $oname= mysqli_real_escape_string($connect, $_POST['oname']);
    $sname= mysqli_real_escape_string($connect, $_POST['sname']);
    $email= mysqli_real_escape_string($connect, $_POST['email']);
    $country=  $_POST['country'];
    $contact= mysqli_real_escape_string($connect, $_POST['contact']);
    $business_name= mysqli_real_escape_string($connect, $_POST['bname']);
    $business_type= mysqli_real_escape_string($connect, $_POST['btype']);
    $business_des= mysqli_real_escape_string($connect, $_POST['bdes']);   
 
if(!empty($fname) && !empty($email) && !empty($contact)){ 
   
   $data_1="INSERT INTO `request`(`fname`, `oname`, `sname`, `email`, `contact`, `business_name`, `business_type`, `description`, `date`,`country`) VALUES ('$fname','$oname','$sname','$email','$contact','$business_name','$business_type','$business_des','$date','$country')"; 
   
        $done= mysqli_query($connect,$data_1); 
    if ($done){
        $_SESSION['prompt']=1;
        
        
        if($_SESSION['prompt']==1){
    echo "<script>  Swal.fire('Successful','Your have successfully sent a request for a website, our team will get back to you soon. Thank you', 'success') </script>";
}
    }
  
//$mail->SetFrom('heraldsworldinc@gmail.com','Heralds World Ministries Inc.');
//$mail->AddAddress($main_email,$main_fname." ".$main_oname." ".$main_sname);
//// $mail->AddReplyTo('jngissah@gmail.com','Joseph Ngissah');
//      
//$mail->isHTML(true);
//$mail->Subject='Prayer Request Received';
//$mail->Body='<div>  <p>Shalom '.$main_fname.' </p>       <p> Your Prayer request has been received, Pastor David will be praying for you. Your request will be met by the mighty hand of God.<br> Thank you.    </p>  <br>     <hr>  <br>     <div style="text-align:center;">  <img src="http://www.heraldsworldinc.com/images/hh.png" width="12%" >   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Heralds World Ministries Incorporated</span>  <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">Madina, Baba Yara Near the Aviation Building</span>   <br>        <span style="font-style:italic; font-family:san-sarif; color:#006994">Accra, Ghana</span> <br>         <span style="font-style:italic; font-family:san-sarif; color:#006994">	+233 244060781</span> ,          <span style="font-style:italic; font-family:san-sarif; color:#006994">	+233 246246105</span> <br>          <span style="font-style:italic; font-family:san-sarif; color:#006994">	<a>www.heraldsworldinc.com</a> </span> <br>      </div>      </div>  <div>';
//      
//if($mail->send()){
//    
//    // echo 'email sent';
//}
}
 
 
    }




?>