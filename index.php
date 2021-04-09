<?php 

require 'vendor/autoload.php'; // include Composer's autoloader


$collection = $client->performance->metrics;
$result = $collection->find([]);

foreach ($result as $row) {

            $projectssubmitted = $row["projectssubmitted"];  
            $tasksinproject = $row["tasksinproject"]; 
            $projectscompleted = $row["projectscompleted"];
            $timeofprojectcompletion_hours = $row["timeofprojectcompletion"];
}

$hours_per_projects = $timeofprojectcompletion_hours / $projectssubmitted ;

$mod_value = 72;

$timeofprojectcompletion_mod = $hours_per_projects / $mod_value;

$timeofprojectcompletion_mod = (int)$timeofprojectcompletion_mod;

if($timeofprojectcompletion_mod > 0){
$timeofprojectcompletion = $timeofprojectcompletion_mod . " blocks of 72 hours ";
    
} 



/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "sECU006!";
$dbname = "webdamn_demos";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}




$userNumber = $_GET["un"];
$taskNumber = $_GET["tnum"];





$charge1_url = "sign_up/charge1/";
$charge2_url = "sign_up/charge2/";
$charge3_url = "sign_up/charge3/";
$charge4_url = "sign_up/charge4/";
$charge5_url = "sign_up/charge5/";
$charge6_url = "sign_up/charge6/";
$charge7_url = "sign_up/charge7/";
$charge8_url = "sign_up/charge8/";
$charge9_url = "sign_up/charge9/";


?>



<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Feb 04 2021 00:40:41 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e350e1b9615a236736df41c" data-wf-site="5e350e1b9615a236bf6df41e">
<head>
  <meta charset="utf-8">
  <title>TASK.HELP work anywhere workforce platform</title>
  <meta content="Jobs recruiting hire consulting candidates recruiters developers 2D Design 3D Modeling 3D Rendering 3dCart Accounting Accounts Payable Active Directory Administrative Support Adobe Creative Cloud Adobe Creative Suite Adobe InDesign Adobe Photoshop Adobe Premiere Pro Amazon Web Services Android Android Developer Angular Js Animation Apache Apple UIKit Apple Xcode Article Writing ASP.NET Audio Editing Audio Mixing Audio Post Production AWS Azure B2B Marketing Banner Ads BigCommerce Blockchain Bookkeeper Brand Consulting Brand Marketing Business Development C# CentOS CMS Cold Calling Content Creation Content Marketing Content Strategy Content Writer Copywriting CoreOS Corporate Brand Identity CouchDB cPanel CRM Cryptocurrency CSS3 Customer Service Representative Data Analytics Data Entry Data Mining Data Scientist Database Administrator Database Design Database Migration Database Modeling Database Programming Debian DHCP Direct Marketing Django DNS Docker Dropbox API Drupal eLearning Email Marketing Enterprise architecture Erlang Ethereum Exchange Server Facebook Facebook Developer Facebook Marketing Fedora FreeBSD Front-End Developer Game Developer Genetic algorithms GitHub GitLab Go Go development Google App Engine API Google Cloud Platform Google G-suite Graphic Designer Groovy HTML5 HTML/CSS Hubspot Human Resource Management Image Editing Information Security Analyst Instagram Marketing Internet Research Intuit QuickBooks IOS iOS Developer iPhone UI design J2EE JAVA Java Developer JavaScript JavaScript Developer Jenkins JIRA Joomla Kotlin LAMP Landing Pages Lead Generation Legal Research Legal Writing LEMP LinkedIn Linux System Administration Logo Designer Magento MailChimp Mailchimp Market Research Marketing Strategy Medical Billing and Coding Medical Transcription Micro services Microsoft Excel Microsoft Office Microsoft Outlook Microsoft Power BI Microsoft PowerPoint Microsoft SQL Server Administration Microsoft SQL Server Programming Microsoft Word Mobile App" name="description">
  <meta content="TASK.HELP work anywhere workforce platform" property="og:title">
  <meta content="Jobs recruiting hire consulting candidates recruiters developers 2D Design 3D Modeling 3D Rendering 3dCart Accounting Accounts Payable Active Directory Administrative Support Adobe Creative Cloud Adobe Creative Suite Adobe InDesign Adobe Photoshop Adobe Premiere Pro Amazon Web Services Android Android Developer Angular Js Animation Apache Apple UIKit Apple Xcode Article Writing ASP.NET Audio Editing Audio Mixing Audio Post Production AWS Azure B2B Marketing Banner Ads BigCommerce Blockchain Bookkeeper Brand Consulting Brand Marketing Business Development C# CentOS CMS Cold Calling Content Creation Content Marketing Content Strategy Content Writer Copywriting CoreOS Corporate Brand Identity CouchDB cPanel CRM Cryptocurrency CSS3 Customer Service Representative Data Analytics Data Entry Data Mining Data Scientist Database Administrator Database Design Database Migration Database Modeling Database Programming Debian DHCP Direct Marketing Django DNS Docker Dropbox API Drupal eLearning Email Marketing Enterprise architecture Erlang Ethereum Exchange Server Facebook Facebook Developer Facebook Marketing Fedora FreeBSD Front-End Developer Game Developer Genetic algorithms GitHub GitLab Go Go development Google App Engine API Google Cloud Platform Google G-suite Graphic Designer Groovy HTML5 HTML/CSS Hubspot Human Resource Management Image Editing Information Security Analyst Instagram Marketing Internet Research Intuit QuickBooks IOS iOS Developer iPhone UI design J2EE JAVA Java Developer JavaScript JavaScript Developer Jenkins JIRA Joomla Kotlin LAMP Landing Pages Lead Generation Legal Research Legal Writing LEMP LinkedIn Linux System Administration Logo Designer Magento MailChimp Mailchimp Market Research Marketing Strategy Medical Billing and Coding Medical Transcription Micro services Microsoft Excel Microsoft Office Microsoft Outlook Microsoft Power BI Microsoft PowerPoint Microsoft SQL Server Administration Microsoft SQL Server Programming Microsoft Word Mobile App" property="og:description">
  <meta content="TASK.HELP work anywhere workforce platform" property="twitter:title">
  <meta content="Jobs recruiting hire consulting candidates recruiters developers 2D Design 3D Modeling 3D Rendering 3dCart Accounting Accounts Payable Active Directory Administrative Support Adobe Creative Cloud Adobe Creative Suite Adobe InDesign Adobe Photoshop Adobe Premiere Pro Amazon Web Services Android Android Developer Angular Js Animation Apache Apple UIKit Apple Xcode Article Writing ASP.NET Audio Editing Audio Mixing Audio Post Production AWS Azure B2B Marketing Banner Ads BigCommerce Blockchain Bookkeeper Brand Consulting Brand Marketing Business Development C# CentOS CMS Cold Calling Content Creation Content Marketing Content Strategy Content Writer Copywriting CoreOS Corporate Brand Identity CouchDB cPanel CRM Cryptocurrency CSS3 Customer Service Representative Data Analytics Data Entry Data Mining Data Scientist Database Administrator Database Design Database Migration Database Modeling Database Programming Debian DHCP Direct Marketing Django DNS Docker Dropbox API Drupal eLearning Email Marketing Enterprise architecture Erlang Ethereum Exchange Server Facebook Facebook Developer Facebook Marketing Fedora FreeBSD Front-End Developer Game Developer Genetic algorithms GitHub GitLab Go Go development Google App Engine API Google Cloud Platform Google G-suite Graphic Designer Groovy HTML5 HTML/CSS Hubspot Human Resource Management Image Editing Information Security Analyst Instagram Marketing Internet Research Intuit QuickBooks IOS iOS Developer iPhone UI design J2EE JAVA Java Developer JavaScript JavaScript Developer Jenkins JIRA Joomla Kotlin LAMP Landing Pages Lead Generation Legal Research Legal Writing LEMP LinkedIn Linux System Administration Logo Designer Magento MailChimp Mailchimp Market Research Marketing Strategy Medical Billing and Coding Medical Transcription Micro services Microsoft Excel Microsoft Office Microsoft Outlook Microsoft Power BI Microsoft PowerPoint Microsoft SQL Server Administration Microsoft SQL Server Programming Microsoft Word Mobile App" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/task-help-934cc4-8b4f3ee6e54963a7340f61.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Varela Round:400","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Varela:400","Inconsolata:400,700","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Droid Sans:400,700","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","ABeeZee:regular,italic","Abel:regular","Abhaya Libre:regular,500,600,700,800:sinhala,latin,latin-ext"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

  <script>
$(document).ready(function (e){
$("#frmContact1").on('submit',(function(e){
	e.preventDefault();
	$("#mail-status").html("processing...");
	var valid;	
	valid = validateContact();
	if(valid) {
		$.ajax({
		url: "https://task.help/contact_support/subscribe1.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
	      result_output(data);
			},
		error: function(){} 	        
		});
	}
}));
function result_output(data){
         if(data == 1){
		   $("#mail-status").html("Thank you!");
		   }
}
function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	return valid;
}
});
  </script>
  <style>
     * {
  box-sizing: border-box;
}
input[type=submit] {
-webkit-appearance: none;
-webkit-border-radius: 0; 
    color: #ffffff; 
  background: #FF269D;
    }
    input[type=submit]:hover{
      background: #cccccc;
      color: #000000;
    }    
.rowHeader {
    margin: 0 -5px;
}
.column_add_funds {
    display: grid;
    height: 50px;
     align-items: center;
  float: left;
  width: 100%;
  padding: 0 10px;
  border-radius: 10px;
  background: #ffffff;
}
.cardSearch {
  text-align: center;
   font-size: 16px;
  color: #999999;
  font-weight: 600;
  border-radius: 10px;
}
.cardSearch1 {
  text-align: center;
  border-radius: 10px;
}
#seach1{
   width: 100%;  
  height: 100px;
}
.searchBtn:hover{
 background-color: #ffffff;    
}
input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
     color: #ccc;
	  font-size:16px;
	font-family: ‘Arial Black’, Gadget, sans-serif, FontAwesome, sans-serif;
font-weight: 400; 
}
input::-moz-placeholder { /* Firefox 19+ */
      color: #ccc;
	  font-size:16px;
	font-family: ‘Arial Black’, Gadget, sans-serif, FontAwesome, sans-serif;
font-weight: 400; 
}
input:-ms-input-placeholder { /* IE 10+ */
      color: #ccc;
	  font-size:16px;
	font-family: ‘Arial Black’, Gadget, sans-serif, FontAwesome, sans-serif;
font-weight: 400; 
}
input:-moz-placeholder { /* Firefox 18- */
      color: #ccc;
	  font-size:16px;
	font-family: ‘Arial Black’, Gadget, sans-serif, FontAwesome, sans-serif;
font-weight: 400; 
}
/* Float four columns side by side */
.columnPPP {
  float: left;
  width: 25%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.rowPPP {margin: 0 -5px;}
/* Clear floats after the columns */
.rowPPP:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnPPP {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
/* Style the counter cards */
.cardPPP {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
}
/* Float four columns side by side */
.columnPheader {
  float: left;
  width: 100%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.rowPheader {margin: 0 -5px;}
/* Clear floats after the columns */
.rowPheader:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnPheader {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .column1f {
  width: 100%;
 }
  .column2f {
  width: 100%;
 }
}
/* Style the counter cards */
.cardPheader {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
}
.email_icon_center{
    display: grid;
    grid-template-columns: auto;
     justify-items: center;
    align-items: center;
    width: 100%;
}
.email_icon{
    display: grid;
    grid-template-columns: auto;
     justify-items: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: #5E5E5E;
    border-radius: 40px;
}
.email_icon:hover{
    background-color: #A96E6E;
}
.column1f {
  float: left;
  width: 10%;
  padding: 0 10px;
}
.column2f {
  float: left;
  width: 20%;
  padding: 0 10px;
}
.card1f {
  text-align: center;
  background-color: #0A141F;
}
.grid-item {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 700;
  background-color: #fff;
  border: 2px solid #bdc4cb;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 14px;
  text-align: center;
  border-radius: 10px;
  color: rgba(127, 127, 127, 0.9);
  cursor: pointer;
}
.grid-item:hover {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 700;
  background-color: #999;
  border: 2px solid rgba(153, 153, 153, 0.69);
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 14px;
  text-align: center;
  border-radius: 10px;
  color: #FFF;
  pointer: cursor;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 10%;
  padding: 5px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}
.tooltip007 {
  position: relative;
  display: inline-block;
}
.tooltip007 .tooltiptext007 {
  visibility: hidden;
  width: 400px;
  background-color: rgba(0, 0, 0, .8);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
  border: 1px solid white;
   box-shadow: 0 0 10px black;
}
.tooltip007 .tooltiptext007::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 5%;
  margin-left: -5px;
  border-width: 15px;
  border-style: solid ;
  border-color: #fff transparent transparent transparent;
}
.tooltip007:hover .tooltiptext007 {
  visibility: visible;
  opacity: 1;
}
/* Float four columns side by side */
.columnP {
 margin-top: 35px;
  float: left;
  width: 11.11%;
  padding: 0 3px;
}
/* Float four columns side by side */
.column1 {
  float: left;
  width: 19%;
  padding: 0 8px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the counter cards */
.card {
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
.grid-container11 {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #ffffff;
  grid-row-gap: 12px;
  padding: 5px;
}
.grid-container9 {
  display: grid;
  grid-template-columns: auto auto;
  background-color: #ffffff;
  grid-row-gap: 12px;
  padding: 5px;
}
.grid-container-buyNow {
  display: grid;
  grid-template-columns: auto;
  background-color: #ffffff;
  padding-top: 10px;
  padding-bottom: 10px;
    justify-items: center;
    align-items: center;
  grid-row-gap: 12px;
}
.grid-container-buyNow9 {
  display: grid;
  grid-template-columns: auto;
  background-color: #ffffff;
  padding-top: 10px;
    justify-items: center;
    align-items: center;
}
.grid-item00 {
  background-color: #f4f4f5;
  border: 1px solid #ffffff;
  color: #1C86EE;
  font-size: 13px;
  text-align: left;
}
.grid-item11 {
  background-color: #f4f4f5;
  border: 1px solid #ffffff;
  color: #507786;
  font-size: 13px;
  text-align: right;
}
.grid-item12 {
  background-color: #f4f4f5;
  border: 1px solid #ffffff;
  color: #333333;
  font-size: 13px;
  text-align: right;
  cursor:pointer;
}
.grid-itemR {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  color: #FF00CC;
  font-weight: 400;
  font-size: 12px;
  text-align: right;
}
.customClass0{
font-family: Arial, Helvetica, sans-serif;
font-weight: 400;
width: 100%;
background-color: white;
color: #fff;
border:3px solid white;
font-size: 14px;
box-shadow: 3px 3px 3px #FAFAFA;
cursor:pointer
}
.customClass1{
font-family: Arial, Helvetica, sans-serif;
font-weight: 400;
width: 100%;
background-color: orange;
color: #fff;
border:3px solid orange;
font-size: 14px;
box-shadow: 3px 3px 3px grey;
cursor:pointer
}
.customClass2{
font-family: Arial, Helvetica, sans-serif;
font-weight: 400;
width: 100%;
background-color: #0000FF;
color: #fff;
border:3px solid #0000FF;
font-size: 14px;
box-shadow: 3px 3px 3px grey;
cursor:pointer
}
.customClass3{
font-family: Arial, Helvetica, sans-serif;
font-weight: 400;
width: 100%;
background-color: #871F78;
color: #fff;
border:3px solid #871F78;
font-size: 14px;
box-shadow: 3px 3px 3px grey;
cursor:pointer
}
.customClass4{
font-family: Arial, Helvetica, sans-serif;
font-weight: 400;
width: 100%;
background-color: #9ACD32;
color: #fff;
border:3px solid #9ACD32;
font-size: 14px;
box-shadow: 3px 3px 3px grey;
cursor:pointer
}
@media (min-width: 481px) and (max-width: 767px) {
  .column1 {
    width: 50%;
    display: block;
    margin-bottom: 20px;
    cursor:pointer;
  }
  .columnP {
    width: 50%;
    display: block;
    margin-bottom: 20px;
    cursor:pointer;
  }
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .columnP {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffffff;
}
.customClass{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 900;
width: 100%;
background-color: #0EBFE9;
color: #fff;
border:5px solid #0EBFE9;
font-size: 18px;
cursor: pointer;
padding: 12px;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
     color: #ccc;
	  font-size:15px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
::-moz-placeholder { /* Firefox 19+ */
      color: #ccc;
	  font-size:15px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
:-ms-input-placeholder { /* IE 10+ */
      color: #ccc;
	  font-size:15px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
:-moz-placeholder { /* Firefox 18- */
      color: #ccc;
	  font-size:15px;
	font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 600; 
}
.typeTextarea{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 800;	
border:1px solid #BFD8D9;
font-size:18px;
color: #A9A9A9;
padding: 10px;
}
#mybtn{
 font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 800;
width:100px;
height: 45px;
background-color: #35a7a7;
color:#fff;
border: 1px solid #ccc;
font-size:16px;
cursor:pointer;
padding: 10px;   
}
.grid-container_sub {
  display: grid;
  grid-template-columns: 250px 100px ;
  width: 100%;
  padding: 10px;
}
.grid-item_sub {
  background-color: #ffffff;
  font-size: 16px;
  width: 100%;
  text-align: left;
}
.typeText_sub{
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 800;	
width: 250px;
height: 45px;
padding-top: 25px;
padding-bottom: 25px;
border:1px solid #ccc;
font-size:16px;
color: #A9A9A9;
padding: 10px;
}
    * {
  box-sizing: border-box;
}
  .ui-tooltip007, .arrow007:after {
    background: black;
    border: 2px solid white;
  }
  .ui-tooltip007 {
    font-family: ‘Arial Black’, Gadget, sans-serif;
    font-weight: 900;
    padding: 10px 20px;
    color: white;
    border-radius: 20px;
    font: bold 14px; 
    box-shadow: 10px 10px 10px 10px rgba(0,0,0, .7);
  }
  .arrow007 {
    width: 70px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;
  }
  .arrow007.top {
    top: -16px;
    bottom: auto;
  }
  .arrow007.left {
    left: 20%;
  }
  .arrow007:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .arrow007.top:after {
    bottom: -20px;
    top: auto;
  }
.grid-item {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 700;
  background-color: #fff;
  border: 2px solid #bdc4cb;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 14px;
  text-align: center;
  border-radius: 10px;
  color: rgba(127, 127, 127, 0.9);
  cursor: pointer;
}
.grid-item:hover {
font-family: ‘Arial Black’, Gadget, sans-serif;
font-weight: 700;
  background-color: #999;
  border: 2px solid rgba(153, 153, 153, 0.69);
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 14px;
  text-align: center;
  border-radius: 10px;
  color: #FFF;
  pointer: cursor;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 10%;
  padding: 5px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}
.store_icon_center{
    display: grid;
    grid-template-columns: auto;
     justify-items: center;
    align-items: center;
    width: 100%;
}
/* Float four columns side by side */
.columnf {
  float: left;
  width: 25%;
  padding: 0 10px;
}
.column_icon {
  float: left;
  width: 12%;
  padding: 0 10px;
}
.space_before_column_icon {
  float: left;
  width: 38%;
  padding: 0 10px;
}
   a {text-decoration: none;}
.store_icon{
    display: grid;
    grid-template-columns: auto;
     justify-items: center;
    align-items: center;
    width: 100px;
    height: 29px;
    background-color: #000;
}
.column1 {
  float: left;
  width: 10%;
  padding: 0 10px;
}
.column_connect {
  float: left;
  width: 10%;
  padding: 0 10px;
}
.column2 {
  float: left;
  width: 20%;
  padding: 0 10px;
}
/* Clear floats after the columns */
.rowf:after {
  content: "";
  display: table;
  clear: both;
  padding-bottom: 25px;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .columnf {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .space_before_column_icon {
  display: none;
}
.column_icon {
  width: 50%;
}
.column2 {
  width: 100%;
}
.column_connect {
  width: 100%;
}
.column1 {
  width: 15%;
}
.h3Font{
    font-size: 10px;
}
}
@media (min-width: 481px) and (max-width: 767px) {
  .space_before_column_icon {
 width: 25%;
}
.column_icon {
  width: 25%;
}
.column2 {
  width: 100%;
}
 .column_connect {
  width: 100%;
}
 .column1 {
  width: 15%;
}
   .column {
    width: 50%;
  }
}
/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #F7F7F7;
}
/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}
/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}
/* Add an italic font style to all quotes */
q {font-style: italic;}
/* Add a blue color to the author */
.author {color: cornflowerblue;}
.tableClass{
    text-align: center;
}
.headerStyle{
     font-family: ‘Arial Black’, Gadget, sans-serif;
     font-weight: 900;
     color: #343B44;
     font-size: 13px;
     line-height: 14px;
   border-radius: 3px;
   background: #ffffff;
    padding-top: 18px;
    padding-bottom: 18px;
    box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.2);  
}
.tdClass{
    border-radius: 3px;
    box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.2); 
    text-align: center; 
      background: #ffffff ;
}
.tdClass:hover{
    box-shadow: 0px 8px 16px 0px rgba(239, 239, 239, .9); 
}
.trHover{
}
.trHover:hover{
    box-shadow: 0px 4px 8px 0px rgba(183, 183, 183, .9); 
    border: 1px solid green;
}
</style>
</head>
<body class="body">
  <div class="section-5">
    <div class="w-layout-grid grid-146"><img src="images/task_help_logo-3-svg.svg" loading="lazy" alt="" class="image-9">
      <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
        <div class="w-container">
          <div class="w-layout-grid grid-214">
            <div></div>
            <div class="html-embed-23 w-embed">
              <div class="rowHeader">
                <div class="column_add_funds">
                  <div class="cardSearch">
                    <form class="cardSearch1" action="https://task.help/how_to_do_it_searches/" method="post">
                      <div style="display:grid; grid-template-columns: 100% ; width:100%; ">
                        <div>
                          <input id="seach1" type="text" name="keyword" class="fa" placeholder="&#xf002 how to do it search " style=" height: 45px;  border: 1px solid #DBDBDB; font-size: 16; color:999; font-weight:600;   outline-style: none;  border-radius: 10px;   box-shadow: 0 1px 2px 0 rgba(219, 219, 219, .8);  font-family:Arial, FontAwesome" required="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div></div>
            <nav role="navigation" class="w-nav-menu">
              <a href="https://task.help/signUp/" target="_blank" class="newclass w-nav-link">Sign up</a>
              <a href="https://task.help/contact_support/" target="_blank" class="nav-link-6 w-nav-link">Support</a>
              <a href="https://task.help/log_in_username/" class="nav-link-5 w-nav-link">Login</a>
            </nav>
            <div class="w-nav-button">
              <div class="w-icon-nav-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-18">
      <div class="w-embed">
        <div style="">
          <div style="display: grid; grid-template-columns: 20% 15% 35% 30%">
            <div></div>
            <div style="text-align: center; display:grid; align-items: center; background: #40E0D0; color: #6600FF; font-size: 14px"><a style="color: #E9FBFA; font-weight: bold; font-size: 16px" href="https://task.help/signUpStimulusGL">$2500 STIMULUS</a></div>
            <div style="background: #ff269d; color: #ffffff; font-size: 14px; padding-left:5px">$2500 stimulus for all startups, companies and non-profit organizations.<span style="color: #000"> Let's kickstart the economy. </span><span style="padding:2px; background: #000; color: #ffffff; border-radius: 3px">Go ahead</span><i style="color:purple; font-weight:900"> put us to the task</i> </div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-23">
    <div class="w-row">
      <div class="column-20 w-col w-col-6">
        <a href="#" class="button-75 w-button">For Candidates, Job seekers, Consultants and Freelancers</a>
        <div class="w-layout-grid grid-204"><img src="images/support100.jpg" loading="lazy" alt="">
          <a id="w-node-9fae9a93b5cd-736df41c" href="https://task.help/welcome_taskhelpers/" target="_blank" class="button-19 w-button">LET&#x27;S GO</a>
        </div>
        <a href="#" class="button-64 w-button">$36 per task</a>
        <h3 class="heading-4">IT&#x27;S EASY</h3>
        <a href="#" class="button-18 w-button"><em>You write code... any computer programming language is ok</em></a>
        <p class="paragraph-5">Task-helpers use Taskflow-suggest to break down any project into tasks.</p>
      </div>
      <div class="column-19 w-col w-col-6">
        <a href="#" class="button-51 w-button">For Employers<br></a>
        <div class="div-block-5">
          <a href="https://task.help/welcome_taskowners/" target="_blank" class="button-6 w-button">INSTANT ACCESS</a>
        </div>
        <h3 class="heading-2">Post jobs, Post projects, Post tasks FREE</h3>
        <div class="div-block-6">
          <div class="w-layout-grid grid-205">
            <div class="w-layout-grid grid-206">
              <a href="#" class="button-49 w-button">Employers </a>
              <a href="#" class="button-48 w-button">- No need to search</a>
              <a href="#" class="button-47 w-button">- No need to interview</a>
            </div>
            <div class="w-layout-grid grid-183">
              <a href="https://task.help/taskowners_dashboard/sample/" target="_blank" class="w-inline-block">
                <div class="w-layout-grid grid-184">
                  <div class="w-layout-grid grid-188">
                    <div id="w-node-b8e429ea3c32-736df41c" class="w-layout-grid grid-189">
                      <div id="w-node-c3a2baa27032-736df41c" class="html-embed-19 w-embed"><i class="fa fa-user-circle" style="font-size:25px;color:#ccc"></i></div>
                    </div>
                    <h5 id="w-node-2e261f34372e-736df41c" class="heading-21">Sample dashboard</h5>
                    <div id="w-node-0ef4f5b7fa32-736df41c" class="html-embed-20 w-embed"><i class="fa fa-toggle-on" style="font-size:28px ;color:#2fa0d4"></i></div>
                  </div>
                  <div class="w-layout-grid grid-187">
                    <div class="w-layout-grid grid-190">
                      <div class="w-layout-grid grid-195">
                        <div id="w-node-7713cedf2316-736df41c" class="w-layout-grid grid-196">
                          <div id="w-node-7ed7c6cffd13-736df41c" class="w-embed"><i class="fa fa-bars" style="font-size:40px ;color:#d6d6d6"></i></div>
                        </div>
                        <div class="w-layout-grid grid-197">
                          <div id="w-node-65cbecec8e42-736df41c" class="w-embed"><i class="fa fa-bars" style="font-size:40px ;color:#d6d6d6"></i></div>
                        </div>
                        <div class="w-layout-grid grid-198">
                          <div id="w-node-b416511363a7-736df41c" class="w-embed"><i class="fa fa-bars" style="font-size:40px ;color:#d6d6d6"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-layout-grid grid-191">
                      <div class="w-layout-grid grid-198">
                        <div id="w-node-1fd07fb42e2a-736df41c" class="w-embed"><i class="fa fa-bars" style="font-size:40px ;color:#d6d6d6"></i></div>
                      </div>
                      <div class="w-layout-grid grid-198">
                        <div id="w-node-2b63957cb948-736df41c" class="w-embed"><i class="fa fa-bars" style="font-size:40px ;color:#d6d6d6"></i></div>
                      </div>
                    </div>
                    <div class="w-layout-grid grid-192">
                      <div class="w-layout-grid grid-198">
                        <div id="w-node-cdf5edcf1cc4-736df41c" class="w-embed"><i class="fas fa-grip-horizontal" style="font-size:36px ; color: #d6d6d6"></i></div>
                      </div>
                      <div class="w-layout-grid grid-198"></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <h3 class="heading-3">GET MORE DONE</h3>
        <p class="paragraph-5">Sign Up and the minute you click submit, your project is instantly assigned to a Task-helper.</p>
      </div>
    </div>
  </div>
  <div class="section-13">
    <div class="div-block-11">
      <h1 class="heading-26">Claim your $400 credit now </h1>
    </div>
    <div class="w-row">
      <div class="w-col w-col-5">
        <h1 class="heading-23">8</h1>
      </div>
      <div class="w-col w-col-3">
        <h1 class="heading-24">free</h1>
      </div>
      <div class="w-col w-col-4">
        <h1 class="heading-25">task</h1>
      </div>
    </div>
    <div class="div-block-20">
      <h1 class="heading-34">When you choose Plan number 9 and save $400.</h1>
    </div>
  </div>

       
<div class="row">
    


  <div class="columnP">
 <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)">
         <div class= ""><button style="background: #fff; color: #fff; cursor:pointer" type="button" class="customClass0">STARTER</button>
       </div> 
    <div class="card">
        <div>Plan</div>
        <div>1</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge1_url ?>" method="POST">
        
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="5000/100"
    data-name="TASK.HELP"
    data-description="Payment for $50"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
   <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[0].style.display = 'none';
    </script>
    <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>

  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">1</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$50</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">0</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">0</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$50</div>
       
       
       
       </div>
       
   </div>  
       
  </div>
  
  <div class="columnP">
   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)">
          <div class= ""><button style="background: orange; color: #fff; cursor:pointer" type="button" class="customClass1">STARTER</button>
       </div> 
    <div class="card">
        <div>Plan</div>
        <div>2</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge2_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="45000/100"
    data-name="TASK.HELP"
    data-description="Payment for $450"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
     <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[1].style.display = 'none';
    </script>
        <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">10</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$500</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">1</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$50</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$450</div>
       
       
       
       </div>
       
   </div>  
        
      </div>
  
  <div class="columnP">
   
   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
      <div class= ""><button style="background: orange; color: #fff; cursor:pointer" type="button" class="customClass1">STARTER</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>3</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge3_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="140000/100"
    data-name="TASK.HELP"
    data-description="Payment for $1400"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
    
     <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[2].style.display = 'none';
    </script>
       <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">30</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$1500</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">2</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$100</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$1400</div>
       
       
       
       </div>
       
   </div>  
  </div>
  
  
    <div class="columnP">
   
   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
       <div class= ""><button style="background: #0000FF; color: #fff; cursor:pointer" type="button" class="customClass2">BASIC</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>4</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge4_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="245000/100"
    data-name="TASK.HELP"
    data-description="Payment for $2450"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
      
     <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[3].style.display = 'none';
    </script>
       <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">52</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$2600 </div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">3</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$150 </div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$2450</div>
       
       
       
       </div>
       
   </div>  
 
  </div>

  <div class="columnP">
  
   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
       <div class= ""><button style="background: #0000FF; color: #fff; cursor:pointer" type="button" class="customClass2">BASIC</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>5</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge5_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="360000/100"
    data-name="TASK.HELP"
    data-description="Payment for $3600"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
        
     <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[4].style.display = 'none';
    </script>
       <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">76</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$3800</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">4</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$200</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$3600</div>
       
       
       
       </div>
       
   </div>  
 
  </div>
  
  <div class="columnP">
 
   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
          <div class= ""><button style="background: #871F78; color: #fff; cursor:pointer" type="button" class="customClass3">BUSINESS</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>6</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge6_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="475000/100"
    data-name="TASK.HELP"
    data-description="Payment for  	
$4750"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
          
     <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[5].style.display = 'none';
    </script>
    <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">100</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$5000</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">5</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$250</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$4750</div>
       
       
       
       </div>
       
   </div>  
  </div>
  
  <div class="columnP">

   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
          <div class= ""><button style="background: #871F78; color: #fff; cursor:pointer" type="button" class="customClass3">BUSINESS</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>7</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge7_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="610000/100"
    data-name="TASK.HELP"
    data-description="Payment for $6100"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
       <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[6].style.display = 'none';
    </script>
    <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">128</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$6400</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">6</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$300</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$6100</div>
       
       
       
       </div>
       
   </div>  
  
  </div>
  
    <div class="columnP">

   <div style="border: 1px solid rgb(204,204,204, .7);  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
             <div class= ""><button style="background: #9ACD32; color: #fff; cursor:pointer" type="button" class="customClass4">ENTERPRISE</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>8</div>
        </div>
        
        
       <div class="grid-container-buyNow" >
           
           <div>
               
        <form action="<?php echo $charge8_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="760000/100"
    data-name="TASK.HELP"
    data-description="Payment for $7600"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
         <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[7].style.display = 'none';
    </script>
    <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
</form>
               
           </div>
           
          
           
       </div> 
        
        
    <div  class="grid-container11">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">159</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$7950</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">7</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$350</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$7600</div>
       
       
       
       </div>
       
   </div>  
  </div>
  
  <div class="columnP">

   <div style="border: 1px solid #12e88b;  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2)"> 
             <div class= ""><button style="background: #9ACD32; color: #fff; cursor:pointer" type="button" class="customClass4">ENTERPRISE</button>
       </div>
    <div class="card">
        <div>Plan</div>
        <div>9</div>
        </div>
        
        
       <div class="grid-container-buyNow9" >
           
           <div>
               
        <form action="<?php echo $charge9_url ?>" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="940000/100"
    data-name="TASK.HELP"
    data-description="Payment for $9400"
    data-label="Buy Now"
    data-image="https://www.task.help/img/thgo2.JPG"
    data-locale="auto"
    data-allowRememberMe = "false">
  </script>
  
  
  
           <script>
        // Hide default stripe button, be careful there if you
        // have more than 1 button of that class
        document.getElementsByClassName("stripe-button-el")[8].style.display = 'none';
    </script>
    <button style="background: #1abc9c; color: #fff" type="submit" class="customClass">Buy Now</button>


  
  
  
</form>
               
           </div>
        <div class="grid-itemR">Recommended</div>   
          
           
       </div> 
        
        
    <div  class="grid-container9">
    <div class="grid-item00">Number of Tasks in plan</div>
     <div class="grid-item11">196</div>
     <div class="grid-item00">Regular Price</div>
     <div class="grid-item11">$9800</div>
     <div class="grid-item00">Number of FREE Tasks included in Plan</div>
     <div class="grid-item11">8</div>
     <div class="grid-item00">Savings</div>
     <div class="grid-item11">$400</div>
     <div class="grid-item00">Discount Price</div>
     <div class="grid-item12">$9400</div>
       
       
       
       </div>
       
   </div>  

  </div>
  
  
</div>
        



  <div></div>
  <div>
    <div class="columns-8 w-row">
      <div class="w-col w-col-6">
        <p class="paragraph-22">Need it on financing...</p>
      </div>
      <div class="w-col w-col-6">
        <a href="https://www.yourfinancingnow.com/task-help/" target="_blank" class="button-161 w-button">here you go</a>
      </div>
    </div>
  </div>
  <div id="features" class="section grey">
    <div class="w-container">
      <h2 class="section-title">How it works </h2>
    </div>
    <div class="w-container">
      <p class="section-subtitle">Task.help uses workflow automation and optimization techniques to help you get a lot of projects done in a short period of time for very little cost.</p>
    </div>
    <div class="div-block-4">
      <div class="columns-5 w-row">
        <div class="column-15 w-col w-col-4">
          <div class="circle">
            <div class="number">1</div>
            <div class="w-layout-grid grid-28">
              <a id="w-node-fd7ce7c9c610-736df41c" href="#" class="button-10 w-button">TASK</a>
            </div>
          </div>
        </div>
        <div class="column-16 w-col w-col-4">
          <div class="circle">
            <div class="number">2</div><img src="images/Screenshot-from-2020-02-17-16-07-18.png" width="130" alt="" class="frames">
          </div>
        </div>
        <div class="column-17 w-col w-col-4">
          <div class="circle">
            <div class="number">3</div>
            <div class="w-layout-grid grid-29">
              <a id="w-node-389f0563b186-736df41c" href="#" class="button-11 w-button">HELP</a>
            </div>
          </div>
        </div>
      </div>
      <div class="columns-5 w-row">
        <div class="w-col w-col-4">
          <h3 class="heading-15">Submit your projects and tasks</h3>
          <p class="paragraph-13">You submit projects and tasks.</p>
        </div>
        <div class="w-col w-col-4">
          <h3 class="heading-16">Task-helpers work on your projects</h3>
          <p class="paragraph-14">The task is automatically assigned to a task-helper.</p>
        </div>
        <div class="w-col w-col-4">
          <h3 class="heading-17">Success! your projects are completed</h3>
          <p class="paragraph-15">You receive a notification to approve completed tasks.</p>
        </div>
      </div>
    </div>
  </div>
  <div>
    <a href="https://task.help/taskAdmin/schedules_deadlines/" target="_blank" class="w-inline-block">
      <div>
        <div class="columns-6 w-row">
          <div class="column-23 w-col w-col-3">
            <p class="paragraph-20">MEET</p>
            <p class="paragraph-21">TaskAdmin</p>
          </div>
          <div class="column-22 w-col w-col-2"><img src="images/taskadmin.png" loading="lazy" sizes="(max-width: 767px) 100vw, 17vw" srcset="images/taskadmin-p-500.png 500w, images/taskadmin-p-800.png 800w, images/taskadmin-p-1080.png 1080w, images/taskadmin.png 1364w" alt="" class="image-10"></div>
          <div class="w-col w-col-7">
            <p class="paragraph-19">TaskAdmin is an automated service level agreement(SLA) oriented tool that drives all projects/tasks and sends notifications to both Task-owners and Task-helpers on all projects/tasks activities and progress.</p>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div>
    <div class="div-block-7">
      <div class="html-embed-24 w-embed">
        <div class="rowPheader">
          <div class="columnPheader">
            <div class="cardPheader">
              <h3 style="color:#1abc9c">Task help's performance metrics</h3>
              <p>This metrics will show millions of projects, all completed within a matter of 2 to 8 blocks of 72 hours.</p>
              <p><span style="padding:5px; background: #000; color: #ffffff; border-radius: 3px">Go ahead</span><i style="color:purple; font-weight:900"> put us to the task</i></p>
            </div>
          </div>
        </div>
        <div style="height:10px"></div>
        <div class="rowPPP">
          <div class="columnPPP">
            <div class="cardPPP">
              <h3 style="color:#8B8378">Total projects submitted</h3>
              <p style="color:#474747"><?php echo $projectssubmitted  ?></p>
            </div>
          </div>
          <div class="columnPPP">
            <div class="cardPPP">
              <h3 style="color:#8B8378">Total tasks in project</h3>
              <p style="color:#474747"><?php echo $tasksinproject  ?></p>
            </div>
          </div>
          <div class="columnPPP">
            <div class="cardPPP">
              <h3 style="color:#8B8378">Total projects completed </h3>
              <p style="color:#474747"><?php echo $projectscompleted  ?></p>
            </div>
          </div>
          <div class="columnPPP">
            <div style="padding: 5px" class="cardPPP">
              <h3 style="color:#8B8378">Average time of project completion</h3>
              <p style="color:#474747"><?php echo $timeofprojectcompletion  ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section centered">
    <div class="w-container">
      <h2 class="section-title">Employers love Task.help... for making work fun!</h2>
      <p class="section-subtitle">It took just a few tasks and bam another successful project.</p>
    </div>
    <div class="div-block">
      <div class="w-row">
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-brush_19-icon2-brush.png" width="25" alt=""></div>
          <h3 class="heading-11">Creativity</h3>
          <p>Get more done without breaking a sweat. It makes it a breeze to have multiple projects simultaneously worked on.</p>
        </div>
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-chat_19-icon2-chat.png" width="25" alt=""></div>
          <h3 class="heading-10">Chat</h3>
          <p>It is possible to initiate and accept a live session with a task-helper.   In fact a task-helper can remote desktop, share screen and video conference with you.</p>
        </div>
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-drops_19-icon2-drops.png" width="25" alt=""></div>
          <h3 class="heading-9">Brilliance</h3>
          <p> Taskflow-suggest is brilliant.  It&#x27;s a list of tasks a task-helper plans to do to  complete a project.</p>
        </div>
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-eye_19-icon2-eye.png" width="25" alt=""></div>
          <h3 class="heading-8">See</h3>
          <p>See minute by minute activities that are happening on your task.   A real time status logs all events happening on you task.</p>
        </div>
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-phone_19-icon2-phone.png" width="25" alt=""></div>
          <h3 class="heading-7">Responsive</h3>
          <p>You get notifications on your mobile every time a task is completed so that you can approve.  </p>
        </div>
        <div class="w-col w-col-2">
          <div class="icons"><img src="images/9-icon2-video_19-icon2-video.png" width="25" alt=""></div>
          <h3 class="heading-14">Forward</h3>
          <p>It has revolutionize the way we work.  You can skip straight pass job boards and freelancers board. No need to look for someone to hire and no need to negotiate prices. </p>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="div-block-15">
      <a href="#" class="button-162 w-button">Projects Task-helpers have already completed... you can always enter the taskID in  &quot;how to do it <em>search</em>&quot; and get more details on the project.</a>
    </div>
    <div class="div-block-19">
      <div class="html-embed-29 w-embed w-script">
      

        <div class="slideshow-container">
          <div class="mySlides">
            <table align="center" class="tableClass" cellpadding="5px" cellspacing="4px">
              <thead>
                <tr>
                  <th style="display:none">Id</th>
                  <th width="20%" class="headerStyle">Task-helper</th>
                  <th width="10%" class="headerStyle">Profile</th>
                  <th width="35%" class="headerStyle">Project Requirements</th>
                  <th width="10%" class="headerStyle">Task ID</th>
                  <th width="25%" class="headerStyle">Reviews</th>
                </tr>
              </thead>
              <tbody id="content">
                <?php
  $sqlQuery = "SELECT id, name, age, address, skills, designation
	FROM developers ORDER BY RAND() LIMIT 5";  
  $result = mysqli_query($conn, $sqlQuery); 
  while ($row = mysqli_fetch_assoc($result)) {
            $taskSubject = $row["address"];
            $reviews = $row["designation"];
            $taskID = $row["skills"];
    $project_description_link = "https://task.help/project_descriptions?tnum=$taskID";
    $review_link = "https://task.help/project_reviews?tnum=$taskID";
  $limited_taskSubject = substr($taskSubject, 0, 25);
   $limited_reviews = substr($reviews, 0, 25); 
   
      
  echo   "<tr class='trHover' ><td  style='display:none' class='tdClass'>" .  $row["id"] . "</td><td  class='tdClass'>". $row["name"] . "</td><td  class='tdClass'><img src=". $row["age"] . "></td><td class='tdClass'><a href="  . $project_description_link . "> ". $limited_taskSubject. "</a> </td><td class='tdClass'>". $row["skills"] . "</td><td class='tdClass'><a href="  . $review_link . "> ". $limited_reviews . "</a> </td></tr>";
    
       
      
      
  }
echo '</tbody></table>';  
  ?>
          </div>
          <div class="mySlides">
            <table align="center" class="tableClass" cellpadding="5px" cellspacing="4px">
              <thead>
                <tr>
                  <th style="display:none">Id</th>
                  <th width="20%" class="headerStyle">Task-helper</th>
                  <th width="10%" class="headerStyle">Profile</th>
                  <th width="35%" class="headerStyle">Project Requirements</th>
                  <th width="10%" class="headerStyle">Task ID</th>
                  <th width="25%" class="headerStyle">Reviews</th>
                </tr>
              </thead>
              <tbody id="content">
                <?php
  $sqlQuery = "SELECT id, name, age, address, skills, designation
	FROM developers ORDER BY RAND() LIMIT 5";  
  $result = mysqli_query($conn, $sqlQuery); 
  while ($row = mysqli_fetch_assoc($result)) {
            $taskSubject = $row["address"];
            $reviews = $row["designation"];
            $taskID = $row["skills"];
    $project_description_link = "https://task.help/project_descriptions?tnum=$taskID";
    $review_link = "https://task.help/project_reviews?tnum=$taskID";
  $limited_taskSubject = substr($taskSubject, 0, 25);
   $limited_reviews = substr($reviews, 0, 25); 
   
      
  echo   "<tr class='trHover' ><td  style='display:none' class='tdClass'>" .  $row["id"] . "</td><td  class='tdClass'>". $row["name"] . "</td><td  class='tdClass'><img src=". $row["age"] . "></td><td class='tdClass'><a href="  . $project_description_link . "> ". $limited_taskSubject. "</a> </td><td class='tdClass'>". $row["skills"] . "</td><td class='tdClass'><a href="  . $review_link . "> ". $limited_reviews . "</a> </td></tr>";
    
  
 
  }
echo '</tbody></table>';  
  ?>
          </div>
          <div class="mySlides">
            <table align="center" class="tableClass" cellpadding="5px" cellspacing="4px">
              <thead>
                <tr>
                  <th style="display:none">Id</th>
                  <th width="20%" class="headerStyle">Task-helper</th>
                  <th width="10%" class="headerStyle">Profile</th>
                  <th width="35%" class="headerStyle">Project Requirements</th>
                  <th width="10%" class="headerStyle">Task ID</th>
                  <th width="25%" class="headerStyle">Reviews</th>
                </tr>
              </thead>
              <tbody id="content">
                <?php
  $sqlQuery = "SELECT id, name, age, address, skills, designation
	FROM developers ORDER BY RAND() LIMIT 5";  
  $result = mysqli_query($conn, $sqlQuery); 
  while ($row = mysqli_fetch_assoc($result)) {
            $taskSubject = $row["address"];
            $reviews = $row["designation"];
            $taskID = $row["skills"];
    $project_description_link = "https://task.help/project_descriptions?tnum=$taskID";
    $review_link = "https://task.help/project_reviews?tnum=$taskID";
  $limited_taskSubject = substr($taskSubject, 0, 25);
   $limited_reviews = substr($reviews, 0, 25); 
   
   
      
  echo   "<tr class='trHover' ><td  style='display:none' class='tdClass'>" .  $row["id"] . "</td><td  class='tdClass'>". $row["name"] . "</td><td  class='tdClass'><img src=". $row["age"] . "></td><td class='tdClass'><a href="  . $project_description_link . "> ". $limited_taskSubject. "</a> </td><td class='tdClass'>". $row["skills"] . "</td><td class='tdClass'><a href="  . $review_link . "> ". $limited_reviews . "</a> </td></tr>";
    
  
  }
echo '</tbody></table>';  
  ?>
          </div>
          <div class="mySlides">
            <table align="center" class="tableClass" cellpadding="5px" cellspacing="4px">
              <thead>
                <tr>
                  <th style="display:none">Id</th>
                  <th width="20%" class="headerStyle">Task-helper</th>
                  <th width="10%" class="headerStyle">Profile</th>
                  <th width="35%" class="headerStyle">Project Requirements</th>
                  <th width="10%" class="headerStyle">Task ID</th>
                  <th width="25%" class="headerStyle">Reviews</th>
                </tr>
              </thead>
              <tbody id="content">
                <?php
  $sqlQuery = "SELECT id, name, age, address, skills, designation
	FROM developers ORDER BY RAND() LIMIT 5";  
  $result = mysqli_query($conn, $sqlQuery); 
  while ($row = mysqli_fetch_assoc($result)) {
            $taskSubject = $row["address"];
            $reviews = $row["designation"];
            $taskID = $row["skills"];
    $project_description_link = "https://task.help/project_descriptions?tnum=$taskID";
    $review_link = "https://task.help/project_reviews?tnum=$taskID";
  $limited_taskSubject = substr($taskSubject, 0, 25);
   $limited_reviews = substr($reviews, 0, 25); 
   
   
      
  echo   "<tr class='trHover' ><td  style='display:none' class='tdClass'>" .  $row["id"] . "</td><td  class='tdClass'>". $row["name"] . "</td><td  class='tdClass'><img src=". $row["age"] . "></td><td class='tdClass'><a href="  . $project_description_link . "> ". $limited_taskSubject. "</a> </td><td class='tdClass'>". $row["skills"] . "</td><td class='tdClass'><a href="  . $review_link . "> ". $limited_reviews . "</a> </td></tr>";
    
  
 
  }
echo '</tbody></table>';  
  ?>
          </div>
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
      </div>
    </div>
  </div>
  <div class="section-10">
    <div class="div-block-12">
      <div class="w-row">
        <div class="w-col w-col-5">
          <h1 class="heading-27">Integrate</h1>
        </div>
        <div class="column-18 w-col w-col-2">
          <div class="div-block-13">
            <div class="html-embed-28 w-embed"><i class="fa fa-plus-circle" style="font-size:65px;color:green"></i></div>
          </div>
        </div>
        <div class="w-col w-col-5">
          <h1 class="heading-28">Implement</h1>
        </div>
      </div>
    </div>
    <div>
      <h4 class="heading-29">Technologies we Integrate and implement </h4>
    </div>
    <div class="div-block-3"></div>
    <div class="html-embed-13 w-embed">
        
     
<div style="" class="row">
    
  <div class="column" >
   
    <div class="grid-item">
        

        
        <div class="tooltip007">Java
  <span class="tooltiptext007">Java is a simple, object-oriented, distributed, interpreted, robust, secure, architecture neutral, portable, multithreaded, and dynamic.  Because of Java's robustness, ease of use, cross-platform capabilities and security features, it has become a language of choice for providing worldwide Internet solutions.</span>
</div>
        
        
        
        </div>
  </div>
  <div class="column" >
   
     <div class="grid-item">
         
         
          <div >Spring Boot
  
</div>
         
         
         </div>
  </div>
    <div class="column" >
 
     <div class="grid-item" >Restful API</div>
  </div>
  
     <div class="column" >
  
     <div class="grid-item">Microservices</div>
  </div>
    <div class="column" >
 
     <div class="grid-item">Spring</div>
  </div>
    <div class="column" >
 
     <div class="grid-item">Hibernate</div>
  </div>
  
  
      <div class="column" >
   
    <div class="grid-item">J2EE</div>
  </div>

  
     <div class="column" >
   
    <div class="grid-item">Core Java</div>
  </div>


      <div class="column" >
   
    <div class="grid-item">Jenkins</div>
  </div>

  
     <div class="column" >
   
    <div class="grid-item">Java 8</div>
  </div>





</div>


<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">NodeJS</div>
  </div>
   <div class="column" >

     <div class="grid-item">AngularJS</div>
  </div>
    <div class="column" >
 
     <div class="grid-item">React</div>
  </div>
  
     <div class="column" >
  
     <div class="grid-item">Kafka</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">MongoDB</div>
  </div>
   <div class="column" >

     <div class="grid-item">LEMP</div>
  </div>
  
      <div class="column" >
   
    <div class="grid-item">AWS</div>
  </div>

     <div class="column" >
   
    <div class="grid-item">Apache</div>
  </div>

  
     <div class="column" >
   
    <div class="grid-item">MongoDB</div>
  </div>

      <div class="column" >
   
    <div class="grid-item">Postgresql</div>
  </div>

 

 
 
 
</div>



<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Python</div>
  </div>
    <div class="column" >

     <div class="grid-item">Oracle</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">CI/CD</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">JavaScript</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Nginx</div>
  </div>
    <div class="column" >

     <div class="grid-item">Elasticsearch</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">HTML</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Kubernetes</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Docker</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">MVC</div>
  </div>
  
  

 
</div>






<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">MySQL</div>
  </div>
    <div class="column" >

     <div class="grid-item">Spring IO</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">PHP</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Cloud</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Lambda</div>
  </div>
    <div class="column" >

     <div class="grid-item">Agile</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Openshift</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">JBehave</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Magento</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">DevOps</div>
  </div>
  
  

 
</div>







<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">CSS</div>
  </div>
    <div class="column" >

     <div class="grid-item">TDD</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">CMS</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">RabbitMQ</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">XML</div>
  </div>
    <div class="column" >

     <div class="grid-item">NoSQL</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Salesforce</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">jQuery</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">DDL</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">IOS</div>
  </div>
  
  

 
</div>




<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Mobile</div>
  </div>
    <div class="column" >

     <div class="grid-item">Maven</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">C/C++</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Swift</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">SQL</div>
  </div>
    <div class="column" >

     <div class="grid-item">Linux</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">UI/UX</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">YAML</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Go</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Ubuntu</div>
  </div>
  
  

 
</div>



<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Webdriver</div>
  </div>
    <div class="column" >

     <div class="grid-item">Eclipse</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Vue.js</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Unit Testing</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Scrum</div>
  </div>
    <div class="column" >

     <div class="grid-item">SDET</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Android</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Unix</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Azure</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Shell script</div>
  </div>
  
  

 
</div>



<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Selenium</div>
  </div>
    <div class="column" >

     <div class="grid-item">ASP.NET</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Hadoop</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">C#</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">LAMP</div>
  </div>
    <div class="column" >

     <div class="grid-item">Spark</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Django</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">IntelliJ</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">DHCP</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">OpenLDAP</div>
  </div>
  
  

 
</div>





<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Web Services</div>
  </div>
    <div class="column" >

     <div class="grid-item">Web Content</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Ruby on Rails</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Active Directory</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Machine Learning</div>
  </div>
    <div class="column" >

     <div class="grid-item">Test Automation</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">System Admin</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Active Directory</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Google Cloud</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Virtual Machines</div>
  </div>
  
  

 
</div>




<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Erlang</div>
  </div>
    <div class="column" >

     <div class="grid-item">MATLAB</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">AI</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Tableau</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">DNS</div>
  </div>
    <div class="column" >

     <div class="grid-item">BI</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Kotlin</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">PL/SQL</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">TFS</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Groovy</div>
  </div>
  
  

 
</div>





<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">SQL Server</div>
  </div>
    <div class="column" >

     <div class="grid-item">SDLC</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">JSON</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">Struts</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">DOM</div>
  </div>
    <div class="column" >

     <div class="grid-item">AJAX</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">SOAP</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">OOP</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">HTTP/HTTPS</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">OAuth</div>
  </div>
  
  

 
</div>






<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">JIRA</div>
  </div>
    <div class="column" >

     <div class="grid-item">InDesign</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Game</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">AUTODESK</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Dropbox</div>
  </div>
    <div class="column" >

     <div class="grid-item">G-suite</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Designer</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Front-End</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">AutoCAD</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Architect</div>
  </div>
  
  

 
</div>






<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">TCP/IP</div>
  </div>
    <div class="column" >

     <div class="grid-item">Web APIs</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Typescript</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">ETL</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">RDBMS</div>
  </div>
    <div class="column" >

     <div class="grid-item">NPM</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">ES6</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">DB2</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Websphere</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Apex</div>
  </div>
  
  

 
</div>





<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Express.js</div>
  </div>
    <div class="column" >

     <div class="grid-item">SAP</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Bootstrap</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">JSPs</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Illustrator</div>
  </div>
    <div class="column" >

     <div class="grid-item">DOM</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Agile</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">JMS</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">Shopify</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Graphics</div>
  </div>
  
  

 
</div>





<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Perl</div>
  </div>
    <div class="column" >

     <div class="grid-item">SEO</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">PowerShell</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">COBOL</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Objective-C</div>
  </div>
    <div class="column" >

     <div class="grid-item">SOAP</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">SVN</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">XML</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">3D Modeling</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Xcode</div>
  </div>
  
  

 
</div>





<div class="row">
    
    <div class="column" >
  
     <div class="grid-item">Confluence</div>
  </div>
    <div class="column" >

     <div class="grid-item">UI Designer</div>
  </div>
   <div class="column" >
 
     <div class="grid-item">Scala</div>
  </div>
  
    <div class="column" >
  
     <div class="grid-item">WordPress</div>
  </div>
   <div class="column" >
  
     <div class="grid-item">Visualforce</div>
  </div>
    <div class="column" >

     <div class="grid-item">jQuery</div>
  </div>
  
  
     <div class="column" >
   
    <div class="grid-item">Flask</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">Scrum</div>
  </div>
  
       <div class="column" >
   
    <div class="grid-item">SSO</div>
  </div>


     <div class="column" >
   
    <div class="grid-item">CouchDB</div>
  </div>
  
  

 
</div>

        
  
        
        </div>
    <div class="div-block-14">
      <div class="w-layout-grid grid-213">
        <div id="w-node-4ce375461d0e-736df41c" class="html-embed-14 w-embed"><i class="fa fa-quote-left" style="font-size:28px;color:#EDEDED;transform: rotate(5deg);"></i></div>
        <a id="w-node-bcca47e208b1-736df41c" href="https://task.help/technologies_we_integrate_and_implement" target="_blank" class="button-157 w-button"> MORE TECHNOLOGIES...</a>
        <div id="w-node-426675641773-736df41c" class="w-embed"><i style="font-size:40px;color:white" class="fa">&#xf054;</i></div>
        <div id="w-node-cffc77d69dfe-736df41c" class="w-embed"><i style="font-size:40px;color:black" class="fa">&#xf054;</i></div>
        <div id="w-node-4ee370f59973-736df41c" class="w-embed"><i style="font-size:40px;color:green" class="fa">&#xf054;</i></div>
      </div>
    </div>
  </div>
  <div class="section-12">
    <div class="div-block-9">
      <div class="text-block-3">Invitation</div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-147">
          <a href="https://task-help-open-recruitment-summit.com" target="_blank" class="button-114 w-button">THORS: task-help-open-recruitment-summit.com</a>
          <a href="https://task-help-open-recruitment-summit.com" class="button-115 w-button">Some people say that TASK HELP&#x27;s &quot;THORS&quot; is a celebration. Others say it&#x27;s like a window, a gateway to the future of technology..</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-148">
          <a href="https://sales-technology-consultants-enterprise-level.com" target="_blank" class="button-116 w-button">sales-technology-consultants-enterprise-level.com (stcel)</a>
          <a href="https://sales-technology-consultants-enterprise-level.com" target="_blank" class="button-117 w-button">STCEL offers a Unique growth opportunity with freedom and plenty of incentives &amp; development...<br></a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-149">
          <a href="https://from-one-recruiter-to-another.com" target="_blank" class="button-118 w-button">from-one-recruiter-to-another.com</a>
          <a href="https://from-one-recruiter-to-another.com" target="_blank" class="button-119 w-button">From the heart of a recruiter who has truly found something worthy of sharing. I am a recruiter just like you and I want my recruiters dashboard...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-150">
          <a href="https://recruiters-dashboard.com" target="_blank" class="button-120 w-button">recruiters-dashboard.com<br></a>
          <a href="https://recruiters-dashboard.com" target="_blank" class="button-121 w-button">Recruiters dashboard automates all recruiting tasks. It keeps the consultants working on IT projects for you...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-19">
    <div>
      <div class="text-block-2">Workshops</div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-151">
          <a href="https://recruiters-dashboard.com/workshops/" target="_blank" class="button-122 w-button">Workshops for recruiters</a>
          <a href="https://recruiters-dashboard.com/workshops/" target="_blank" class="button-123 w-button">How to sign up for recruiters dashboard. How to use recruiters dashboard...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-153">
          <a href="https://task.help/workshops-task-helpers/" target="_blank" class="button-124 w-button">Workshops for Task-helpers</a>
          <a href="#" class="button-125 w-button">How to sign up as a Task-helper. How to become a successful Task-helper...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-154">
          <a href="https://task.help/workshops-task-owners/" target="_blank" class="button-126 w-button">Workshops for Task-Owners</a>
          <a href="#" class="button-127 w-button">How to sign up as a Task-owner. How to become a successful Task-owner...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-155">
          <a href="https://sales-technology-consultants-enterprise-level.com/workshops" target="_blank" class="button-128 w-button">Workshops for Sales-consultants</a>
          <a href="https://sales-technology-consultants-enterprise-level.com/workshops" target="_blank" class="button-129 w-button">How to sign up as a Sales technology consultant enterprise level...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-20">
    <div>
      <div class="text-block-4">Tools</div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-152">
          <a href="https://task.help/taskflow_suggest/sample/" target="_blank" class="button-110 w-button">Taskflow-suggest</a>
          <a href="https://task.help/taskflow_suggest/sample/" target="_blank" class="button-111 w-button">What is Taskflow-suggest. How do I use Taskflow-suggest. When is Taskflow-suggest due...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-156">
          <a href="https://task.help/propose_tfs/sample/" target="_blank" class="button-130 w-button">Propose-Tfs</a>
          <a href="https://task.help/propose_tfs/sample/" target="_blank" class="button-131 w-button">What is Propose-tfs. How do I use Propose-tfs. Is Propose-tfs mandatory or optional...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-157">
          <a href="https://task.help/taskAdmin/schedules_deadlines/" target="_blank" class="button-132 w-button">TaskAdmin</a>
          <a href="https://task.help/taskAdmin/schedules_deadlines/" target="_blank" class="button-133 w-button">TaskAdmin is a service level agreement (SLA) oriented tool that drives all projects/tasks...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-158">
          <a href="https://task.help/how_to_do_it_search/sample/" target="_blank" class="button-134 w-button">How to do it <em>Search</em></a>
          <a href="https://task.help/how_to_do_it_search/sample/" target="_blank" class="button-135 w-button">YES, &quot;I can search How to do it search for solutions&quot;. YES, I can contribute solutions...</a>
        </div>
      </div>
    </div>
    <div class="w-row">
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-152">
          <a href="https://task.help/taskowners_dashboard/sample/" target="_blank" class="button-110 w-button">Task-owners dashboard</a>
          <a href="https://task.help/taskowners_dashboard/sample/" target="_blank" class="button-111 w-button">How do I use my Task-owners dashboard. What functions are available on my Task-owners dashboard...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-156">
          <a href="https://task.help/taskhelpers_dashboard/sample/" target="_blank" class="button-130 w-button">Task-helpers dashboard</a>
          <a href="https://task.help/taskhelpers_dashboard/sample/" target="_blank" class="button-131 w-button">How do I use my Task-helpers dashboard. What functions are available on my Task-helpers dashboard...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-157">
          <a href="https://task.help/myMoney_recruiters/sample/" target="_blank" class="button-132 w-button">myMoney for recruiters</a>
          <a href="https://task.help/myMoney_recruiters/sample/" target="_blank" class="button-133 w-button">See your balance, request payment and see your payment history. Update your bank information...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-158">
          <a href="https://task.help/myMoney_taskhelpers/sample/" target="_blank" class="button-134 w-button">myMoney for Task-helpers</a>
          <a href="https://task.help/myMoney_taskhelpers/sample/" target="_blank" class="button-135 w-button">See your balance, request payment and see your payment history. Update your bank information...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-21">
    <div>
      <div class="text-block-5">Support</div>
    </div>
    <div class="columns-4 w-row">
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-159">
          <a href="https://task.help/contact_support/" target="_blank" class="button-136 w-button">Open a ticket</a>
          <a href="https://task.help/contact_support/" target="_blank" class="button-137 w-button">Open a ticket, review responses on your tickets, post replies and management your requests...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-160">
          <a href="#" target="_blank" class="button-140 w-button">Live chat/Video conferencing</a>
          <a href="#" target="_blank" class="button-141 w-button">You can request and initiate a chat/video conferencing with you Task-helpers...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-161">
          <a href="#" target="_blank" class="button-144 w-button">Instant and secure messaging</a>
          <a href="#" target="_blank" class="button-145 w-button">Every task or project has messaging where Task-helpers and Task-owners can  exchange information...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="w-layout-grid grid-162">
          <a href="#" target="_blank" class="button-148 w-button">Remote desktop</a>
          <a href="#" target="_blank" class="button-149 w-button">A Task-helper can use remote desktop to remotely connect to your terminal and provide assistance...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-22">
    <div class="w-row">
      <div class="w-col w-col-3">
        <div class="text-block-6">For Task-owners</div>
        <div class="w-layout-grid grid-163">
          <a href="https://task.help/sample_onboarding_taskowners/0/" target="_blank" class="button-138 w-button">Task-owners Onboarding<br></a>
          <a href="https://task.help/sample_onboarding_taskowners/0/" target="_blank" class="button-139 w-button">What do I need to know to get the most out of my projects  as a Task-owner. A Step-by-Step must know information before starting...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="text-block-7">For Task-helpers</div>
        <div class="w-layout-grid grid-164">
          <a href="https://task.help/sample_onboarding_taskhelpers/0/" target="_blank" class="button-142 w-button">Task-helpers Onboarding</a>
          <a href="https://task.help/sample_onboarding_taskhelpers/0/" target="_blank" class="button-143 w-button">What do I need to know to perform well as a Task-helper. A Step-by-Step must know information before starting...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="text-block-8">For Developers</div>
        <div class="w-layout-grid grid-165">
          <a href="https://developers-bootcamp-connect.com" target="_blank" class="button-146 w-button">developers-bootcamp-connect.com</a>
          <a href="https://developers-bootcamp-connect.com" target="_blank" class="button-147 w-button">Learn a new programming language, connect with other developers across the world...</a>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div class="text-block-9">For Youth</div>
        <div class="w-layout-grid grid-166">
          <a href="https://youth-n-tech.com/" target="_blank" class="button-150 w-button">youth-n-tech.com</a>
          <a href="https://youth-n-tech.com/" target="_blank" class="button-151 w-button">youth-n-tech is a non-profit organization that gives youth direct access to learning technology through fun bootcamps...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-17">
    <div class="html-embed-15 w-embed">
      <div style="background: #0A141F; " class="rowf">
        <div class="column2f">
          <div class="card1f">
            <div style="padding-top: 5px; color: #b5c731">Task.help</div>
            <div style="padding-top: 10px; color: #0BB5FF">833-229-0726</div>
            <div style=" color: #BDFCC9">For press and media contact please use media@task.help</div>
          </div>
        </div>
        <div class="column1f">
          <div class="card1f">
            <h3 style="color:white">CONNECT</h3>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Youtube</h3>
            <div>
              <a href="https://www.youtube.com/channel/UCdDp9eW0Xhz9tW44W2MZVsQ">
                <img src="https://task.help/img/youtube.png" alt="Youtube" style="width:31px;height:31px;">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Twitter</h3>
            <div>
              <a href="https://twitter.com/taskhelp">
                <img src="https://task.help/img/twitter.png" alt="Twitter" style="width:31px;height:30px;">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Google+</h3>
            <div>
              <a href="https://g.page/task-help/review?gm">
                <img src="https://task.help/img/googlePlus.png" alt="Google" style="width:30px;height:30px; border-radius: 3px">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Linkedin</h3>
            <div>
              <a href="https://www.linkedin.com/in/adspacesocial/">
                <img src="https://task.help/img/linkedin.png" alt="Linkedin" style="width:31px;height:31px;">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Facebook</h3>
            <div>
              <a href="https://www.facebook.com/TASK-Help-109608317045887">
                <img src="https://task.help/img/facebook-icon.svg" alt="Facebook" style="width:31px;height:31px;">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Instagram</h3>
            <div>
              <a href="https://www.instagram.com/task.help/">
                <img src="https://task.help/img/instagram.png" alt="Instagram" style="width:31px;height:31px; border-radius:3px">
              </a>
            </div>
          </div>
        </div>
        <div class="column1f">
          <div class="card_icon">
            <h3 class="h3Font">Email</h3>
            <div class="email_icon_center">
              <div class="email_icon">
                <a href="https://task.help/contact_support/" target="_blank">
                  <img src="https://task.help/img/unnamed6.png" alt="Email" style="width:20px;height:20px;">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="div-block-10">
      <div class="w-row">
        <div class="w-col w-col-3">
          <div class="html-embed-25 w-embed">
            <div style="color: #fff" id="mail-status"></div>
            <form id="frmContact1" action="#" method="post">
              <div style="display: grid; grid-template-columns: 250px 75px; border: 1px solid #ccc">
                <div><input style="padding-top: 15px; padding-bottom: 15px; font-size: 16px; width: 250px" id="s1" name="name2" placeholder="Subscribe" type="email" required="">
                </div>
                <div><input class="" style="font-size: 16px; width: 100px; padding-top: 15px; padding-bottom: 15px; cursor: pointer" id="" type="submit" value="Submit"></div>
              </div>
            </form>
          </div>
        </div>
        <div class="w-col w-col-5">
          <div class="w-layout-grid grid-211">
            <a href="#" class="button-153 w-button"></a>
            <div class="w-embed">
              <div>
                <a href="https://www.trustpilot.com/review/task.help">
                  <img src="https://task.help/img/trustPilot.png" alt="Linkedin" style="width:100px;height:41px;">
                </a>
              </div>
            </div>
            <a href="https://task.help/news_blogs" target="_blank" class="button-155 w-button">News &amp; Blogs</a>
          </div>
        </div>
        <div class="w-col w-col-2">
          <div class="html-embed-26 w-embed">
            <div class="column_icon">
              <div class="card_icon">
                <div class="store_icon_center">
                  <div class="store_icon">
                    <a href="default.asp">
                      <img src="https://task.help/img/smallios.png" alt="Google Play" style="width:100;height:29px;">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-2">
          <div class="w-embed">
            <div class="column_icon">
              <div class="card_icon">
                <div class="store_icon_center">
                  <div class="store_icon">
                    <a href="default.asp">
                      <img src="https://task.help/img/googlePlay.png" alt="Google Play" style="width:100;height:29px;">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="w-embed w-script">
      <!--  Start of taskhelpsupport Zendesk Widget script  -->
      <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=c7816b90-95af-408c-9001-96b494df2c0d"> </script>
      <!--  End of taskhelpsupport Zendesk Widget script  -->
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e350e1b9615a236bf6df41e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
