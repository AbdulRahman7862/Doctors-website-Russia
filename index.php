<?php
  require "mail.php";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect POST data
    $date = $_POST["date"];
    // $year = $_POST["year"];
    $fio = $_POST["fio"];
    $birthdate = $_POST["birthdate"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $wrist = $_POST["wrist"];
    $hips = $_POST["hips"];
    $waist = $_POST["waist"];
    $secondpara = $_POST["secondpara"];
    $secondTextArea = $_POST["secondTextArea"];

    $question1_detail = $_POST["question1_detail"];
    $question2_detail = $_POST["question2_detail"];
    $question3_detail = $_POST["question3_detail"];
    $question4_detail = $_POST["question4_detail"];
    $question5_detail = $_POST["question5_detail"];
    $question6_detail = $_POST["question6_detail"];
    $question7_detail = $_POST["question7_detail"];
    $question8_detail = $_POST["question8_detail"];
    $question9_detail = $_POST["question9_detail"];
    $question10_detail = $_POST["question10_detail"];
    $question11_detail = $_POST["question11_detail"];
    $question12_detail = $_POST["question12_detail"];
    $question13_detail = $_POST["question13_detail"];
    $question14_detail = $_POST["question14_detail"];
    $question15_detail = $_POST["question15_detail"];
    $question16_detail = $_POST["question16_detail"];
    $question17_detail = $_POST["question17_detail"];
    $question18_detail = $_POST["question18_detail"];
    $question19_detail = $_POST["question19_detail"];
    $question20_detail = $_POST["question20_detail"];
    $question21_detail = $_POST["question21_detail"];
    $question22_detail = $_POST["question22_detail"];
    $question23_detail = $_POST["question23_detail"];
    $question24_detail = $_POST["question24_detail"];
    $question25_detail = $_POST["question25_detail"];
    $question26_detail = $_POST["question26_detail"];
    $question27_detail = $_POST["question27_detail"];
    $question28_detail = $_POST["question28_detail"];
    $question29_detail = $_POST["question29_detail"];
    $question30_detail = $_POST["question30_detail"];
    $question31_detail = $_POST['question31_detail'];
    $question32_detail = $_POST['question32_detail'];
    $question33_detail = $_POST['question33_detail'];
    $question34_detail = $_POST['question34_detail'];
    $question35_detail = $_POST['question35_detail'];
    $question36_detail = $_POST['question36_detail'];
    $question37_detail = $_POST['question37_detail'];
    $question38_detail = $_POST['question38_detail'];
    $question39_detail = $_POST['question39_detail'];
    $question40_detail = $_POST['question40_detail'];
    $medication_permanent = $_POST['medication_permanent'];
    $medication_seasonal = $_POST['medication_seasonal'];
    $medication_episodic = $_POST['medication_episodic'];
    $medication_acute = $_POST['medication_acute'];
    $vitamin_mineral_permanent = $_POST['vitamin_mineral_permanent'];
    $vitamin_mineral_seasonal = $_POST['vitamin_mineral_seasonal'];
    $vitamin_mineral_none = $_POST['vitamin_mineral_none'];
    $supplement_name = $_POST['supplement_name'];
    $supplement_none1 = $_POST['supplement_none1'];
    $supplement_none2 = $_POST['supplement_none2'];
    $additional_information = $_POST['additional_information'];
    $weight_experience = $_POST['weight_experience'];
    $psychological_factors = $_POST['psychological_factors'];
    // $fifthPara = $_POST['fifthPara'];


    //medicine data

    $medicalData1 = $_POST['medicalData1'];
    $medicalData2 = $_POST['medicalData2'];
    $medicalData3 = $_POST['medicalData3'];
    $medicalData4 = $_POST['medicalData4'];
    $medicalData5 = $_POST['medicalData5'];
    $medicalData6 = $_POST['medicalData6'];
    $medicalData7 = $_POST['medicalData7'];
    $medicalData8 = $_POST['medicalData8'];
    $medicalData9 = $_POST['medicalData9'];
    $medicalData10 = $_POST['medicalData10'];
    $medicalData11 = $_POST['medicalData11'];
    $medicalData12 = $_POST['medicalData12'];

    $medicalData13 = $_POST['medicalData13'];
    $medicalData131 = $_POST['medicalData131'];
    $medicalData14 = $_POST['medicalData14'];
    $medicalData15 = $_POST['medicalData15'];
    $medicalData16 = $_POST['medicalData16'];
    $medicalData17 = $_POST['medicalData17'];
    $medicalDataa = $_POST['medicalDataa'];
    
    $table1 = $_POST['table1'];
    $table2 = $_POST['table2'];
    $table3 = $_POST['table3'];
    $table4 = $_POST['table4'];
    $table5 = $_POST['table5'];
    $table6 = $_POST['table6'];
    $table7 = $_POST['table7'];
    $table8 = $_POST['table8'];
    $table9 = $_POST['table9'];
    $table10 = $_POST['table10'];
    $table11 = $_POST['table11'];
    $table12 = $_POST['table12'];
    $table13 = $_POST['table13'];
    $table14 = $_POST['table14'];
    $table15 = $_POST['table15'];
    $table16 = $_POST['table16'];
    $table17 = $_POST['table17'];
    $table18 = $_POST['table18'];
    $table19 = $_POST['table19'];
    $table20 = $_POST['table20'];
    $table21 = $_POST['table21'];
    $table22 = $_POST['table22'];
    $table23 = $_POST['table23'];
    $table24 = $_POST['table24'];
    $table25 = $_POST['table25'];
    $table26 = $_POST['table26'];
    $table27 = $_POST['table27'];
    $table28 = $_POST['table28'];
    $table29 = $_POST['table29'];
    $table30 = $_POST['table30'];
    $table31 = $_POST['table31'];
    $table32 = $_POST['table32'];
    $table33 = $_POST['table33'];
    $table34 = $_POST['table34'];
    $table35 = $_POST['table35'];
    $table36 = $_POST['table36'];
    $table37 = $_POST['table37'];
    $table38 = $_POST['table38'];
    $table39 = $_POST['table39'];
    $table40 = $_POST['table40'];
    $newtextarea = $_POST["newtextarea"];
    $medicalData141 = $_POST["medicalData141"];
    $medicalData151 = $_POST["medicalData151"];
    $medicalData161 = $_POST["medicalData161"];
    $medicalData171 = $_POST["medicalData171"];


    if (isset($_POST["submit"])) {
      $uploadedFile = $_FILES["file"]; // Use the same name as in the form
      
      if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
          // File uploaded successfully
          $fileData = file_get_contents($uploadedFile['tmp_name']);
      } else {
          echo "File upload failed with error code: " . $uploadedFile['error'];
          exit;
      }
  }
  

    if (isset($_POST["submit"])) {
      $uploadedImage = $_FILES["image"];
      
      if ($uploadedImage['error'] === UPLOAD_ERR_OK) {
          // Image uploaded successfully
          $imageData = file_get_contents($uploadedImage['tmp_name']);
      } else {
          echo "Image upload failed with error code: " . $uploadedImage['error'];
          exit;
      }
    }

      




    $obj = new mail(
      $date, $fio, $birthdate, $city, $phone, $email, $height, $weight, $wrist, $hips, $waist,
      $secondpara, $secondTextArea, $question1_detail, $question2_detail, $question3_detail, $question4_detail, $question5_detail,
      $question6_detail, $question7_detail, $question8_detail, $question9_detail, $question10_detail,
      $question11_detail, $question12_detail, $question13_detail, $question14_detail, $question15_detail,
      $question16_detail, $question17_detail, $question18_detail, $question19_detail, $question20_detail,
      $question21_detail, $question22_detail, $question23_detail, $question24_detail, $question25_detail,
      $question26_detail, $question27_detail, $question28_detail, $question29_detail, $question30_detail,
      $question31_detail, $question32_detail, $question33_detail, $question34_detail, $question35_detail,
      $question36_detail, $question37_detail, $question38_detail, $question39_detail, $question40_detail,

      $medication_permanent, $medication_seasonal, $medication_episodic, $medication_acute,
      $vitamin_mineral_permanent, $vitamin_mineral_seasonal, $vitamin_mineral_none,
      $supplement_name, $supplement_none1, $supplement_none2, $additional_information,
      $weight_experience, $psychological_factors, $fifthPara,
      $medicalData1, $medicalData2, $medicalData3, $medicalData4, $medicalData5, $medicalData6,
      $medicalData7, $medicalData8, $medicalData9, $medicalData10, $medicalData11, $medicalData12,
      $medicalData13, $medicalData14, $medicalData15, $medicalData16, $medicalData17, $medicalDataa,
      $table1, $table2, $table3, $table4, $table5, $table6, $table7, $table8, $table9, $table10,$table11,$table12,$table13,$table14,$table15,
      $table16,$table17,$table18,$table19,$table20,$table21,$table22,$table23,$table24,$table25,$table26,$table27,$table28,
      $table29,$table30,$table31,$table32,$table33,$table34,$table35,$table36,$table37,$table38,$table39,$table40,$uploadedImage,
      $fileData ,$newtextarea,$medicalData131,$medicalData141, $medicalData151,$medicalData161,$medicalData171,
    );
    
  $mailSent = $obj->sendMail();
  // $obj->printd();

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Marina Kimpitskana</title>
  <link rel="stylesheet" href="./style.css" />
  <style>
    * {
      /* margin: 0;
    padding: 0; */
      box-sizing: border-box;
    }



    table,
    th,
    td {
      border: 1px solid rgb(251, 251, 251);
      border-collapse: collapse;
    }

    h1 {
      color: red;
      text-align: center;
    }

    .header {
      display: flex;
      justify-content: space-around;
    }

    .rightSideData {
      margin-top: 0.5rem;
    }

    .bar {
      background-color: rgb(177, 148, 110);
      width: 176%;
      height: 1rem;
      margin-left: -95px;
    }

    input {
      background-color: #fca311;
      width: 30%;
      color: white;
    }



    .firstPara {
      margin-top: 1rem;
      display: block;
      margin: 0 auto;
      /* margin-left: 10%; */
      border: 1px solid rgb(255, 255, 255);
      border-radius: 2px;
      padding: 1rem;
      width: 50%;
    }

    .form-row {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 1rem;
    }


    .second-para-heading {
      font-weight: bold;
      text-align: center;
    }

    .centered-table {
      width: 70%;
      margin: 0 auto;
    }

    .para-center {
      text-align: center;
      color: red;
    }


    #secondpara,
    #secondTextArea {
      width: 52%;
      height: 8rem;
      border-radius: 1rem;
      padding: 1rem;
    }




    #thirdPara {
      width: 20%;
      height: 8rem;
      border-radius: 1rem;
      padding: 1rem;
    }

    #fourthPara {
      width: 20%;
      height: 8rem;
      border-radius: 1rem;
      padding: 1rem;
    }

    #fifthPara {
      width: 20%;
      height: 8rem;
      border-radius: 1rem;
      padding: 1rem;
    }

    .second-para {
      text-align: center;
    }

    .center-label {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .second-para-heading {
      font-weight: bold;
    }

    .medicaldataone {
      width: 100%;
      height: 4rem;
      border-radius: 1rem;
      padding: 1rem;
    }

    .question {
      width: 100%;
      border: none;
    }

    .question:focus {
      outline: none;
    }

    html {
      background-color: #fca311;
    }

    .dateandyear {
      width: 20%;
      margin-right: 1rem;
    }

    .datediv {
      display: flex;
      justify-content: center;
      margin: 1rem;

    }

    .logo {
      border: 1px white;
      border-radius: 17rem;
      margin-top: 0.5rem;
    }

    .firstPara {
      text-align: center;
      display: block;
      margin: 0 auto;
    }

    .firstPara label {
      display: block;
      text-align: left;
    }

    .firstPara input,
    .medical input,
    .medicineTaking input {
      width: 100%;
      height: 40px;
      border-radius: 1rem;
      border: 1px solid white;
      padding: 1rem;
    }

    textarea {
      background-color: #fca311;
      border: 1px solid white;
      border-radius: 1rem;
      color: white;
    }
    #textarea{
      width: 100%;
      padding: 1rem;
    }


    .medical,
    .experienceofweightloss {
      border: 1px solid white;
      width: 50%;
      padding: 1rem;
      display: block;
      margin: 0 auto;
    }

    .experienceofweightloss textarea {
      width: 100%;
    }

    .medicineTaking {
      border: 1px solid white;
      width: 50%;
      padding: 1rem;
      display: block;
      margin: 0 auto;
      margin-top: 1rem;
    }

    .foodDiary,
    .analysis,
    .photos {
      border: 1px solid white;
      width: 70%;
      padding: 1rem;
      display: block;
      margin: 0 auto;
      margin-top: 1rem;
    }

    #fifthPara {
      width: 100%;
    }

    .btn {
      background-color: black;
      color: #ede7e7;
      border: 2px solid rgb(210, 222, 76);
      border-radius: 0px;
      padding: 18px 36px;
      display: inline-block;
      font-family: "Lucida Console", Monaco, monospace;
      font-size: 14px;
      letter-spacing: 1px;
      cursor: pointer;
      box-shadow: inset 0 0 0 0 #fca311;
      -webkit-transition: ease-out 0.4s;
      -moz-transition: ease-out 0.4s;
      transition: ease-out 0.4s;
      display: block;
      margin: 0 auto;
      margin-top: 1rem;
    }

    .btn:hover {
      box-shadow: inset 0 100px 0 0 #fca311;
    }

    .datediv label {
      margin-top: 0.5rem;
      padding-right: 1rem;
    }

    .datediv input {
      width: 23%;
      height: 20px;
      border-radius: 1rem;
      border: 1px solid white;
      padding: 1rem;
    }

    .questions {
      display: flex;
      justify-content: center;
    }

    .questions input {
      margin-top: -0.1rem;
      width: 38px;
      height: 18px;

    }

    .yes {
      width: 10%;
    }



    @media (min-width: 320px) and (max-width: 479px) {

      .firstPara,
      #secondpara,
      #secondTextArea,
      .medical,
      .experienceofweightloss,
      .foodDiary,
      .analysis,
      .photos {
        width: 100%;
      }

      .centered-table {
        width: 100%;
      }

      .logo {
        border: 1px white;
        border-radius: 17rem;
        margin-top: 0.5rem;
        width: 100px;
        height: 100px;
        padding: 0.4rem;
      }

      #medical {
        width: 100%;
      }
    }


    @media (min-width:480px) and (max-width: 599px) {

      .firstPara,
      #secondpara,
      #secondTextArea,
      .medical,
      .experienceofweightloss,
      .foodDiary,
      .analysis,
      .photos {
        width: 100%;
      }

      .centered-table {
        width: 100%;
      }

      .logo {
        border: 1px white;
        border-radius: 17rem;
        margin-top: 0.5rem;
        width: 100px;
        height: 100px;
        padding: 0.4rem;
      }

      #medical {
        width: 100%;
      }
    }

    @media (min-width:600px) and (max-width:767px) {

      .firstPara,
      #secondpara,
      #secondTextArea,
      .medical,
      .experienceofweightloss,
      .foodDiary,
      .analysis,
      .photos {
        width: 100%;
      }

      .centered-table {
        width: 100%;
      }

      .logo {
        border: 1px white;
        border-radius: 17rem;
        margin-top: 0.5rem;
        width: 100px;
        height: 100px;
        padding: 0.4rem;
      }

      #medical {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="header">
      <img src="./logo.jpg" alt="logo" width="150" height="150" class="logo" />
      <div class="rightSideData">
        <p>Персональные данные, представленные Вами,</p>
        <p>являются строго конфиденциальными. Информация</p>
        <p>не подлежит передаче и разглашению третьим лицам.</p>
        <div class="bar"></div>
      </div>
    </div>

    <form action="index.php" method="post" enctype="multipart/form-data">
      <div class="datediv">
        <label>Дата:</label>
        <input type="date" name="date" class="dateandyear" />

      </div>
  </header>
  <br /><br />


  <div class="firstPara">
    <!-- <div class="form-row"> -->
    <label for="fio">ФИО</label><br>
    <input type="text" id="fio" required name="fio" /><br>
    <!-- </div> -->
    <br>
    <!-- <div class="form-row"> -->
    <label for="birthdate">Дата рождения</label><br>
    <input type="date" id="birthdate" required name="birthdate" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="city">Город/Страна</label><br>
    <input type="text" id="city" required name="city" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="phone">Телефон</label><br>
    <input type="text" id="phone" required name="phone" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="email">Е-mail</label><br>
    <input type="text" id="email" required name="email" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="height">Рост</label><br>
    <input type="text" id="height" required name="height" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="weight">Вес</label><br>
    <input type="text" id="weight" required name="weight" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="wrist">Обхват запястья</label><br>
    <input type="text" id="wrist" required name="wrist" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="hips">Обхват бедер</label><br>
    <input type="text" id="hips" required name="hips" /><br>
    <!-- </div> -->
    <br />
    <!-- <div class="form-row"> -->
    <label for="waist">Обхват талии (измеряется на уровне подмышечных впадин по наиболее
      выступающим точкам груди)</label><br>
    <input type="text" id="waist" required name="waist" /><br>
    <!-- </div> -->
    <br />
  </div>
  <br />


  <div class="second-para">
    <label class="second-para-heading" for="secondpara">
      Что послужило поводом для обращения? Начните с проблемы, которая
      наиболее сильно ухудшает качество Вашей жизни.
    </label>
    <br /><br /><br />
    <textarea id="secondpara" name="secondpara" rows="4" cols="50"></textarea>
  </div>
  <br><br>
  <div class="center-label">
    <label class="second-para-heading">
      Что Вас беспокоит (жалобы и симптомы)? Когда произошло ухудшение самочувствие или состояния? <br> В чем оно
      проявилось? Опишите самые незначительные, на первый взгляд неважные,<br> болезненные или дискомфортные состояния и
      ощущения за последний год или больше.
    </label><br><br>
    <textarea id="secondTextArea" name="secondTextArea" rows="4" cols="50"> </textarea>
  </div>

  <br />

  <h1>1. МЕДИЦИНСКИЕ ДАННЫЕ</h1>
  <div class="firstPara">
    <label><u>Подробно</u> перечислите выявленные заболевания:</label><br /><br>


    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData1"> </textarea> -->
    <br>
    <p>
      Заболевания желудочно-кишечного тракта (колит, гастроэзофагеальная
      рефлюксная болезнь, изжога, язва, гастрит и т.д.)
    </p><br>
    <div class="questions">
      <label for="medicalDataayes">Yes</label>
      <input type="radio" name="medicalDataa" id="medicalDataayes" value="yes">
      <label for="medicalDataano">No</label>
      <input type="radio" name="medicalDataa" id="medicalDataano" value="no">
    </div>


    <p>Заболевания печени (геаптоз, гепатит и т.д.)</p><br>
    <div class="questions">
      <label for="medicalDataa2yes">Yes</label>
      <input type="radio" name="medicalData2" id="medicalData2ayes" value="yes">
      <label for="medicalDataa2no">No</label>
      <input type="radio" name="medicalData2" id="medicalData2ano" value="no">
    </div>


    <p>
      Заболевания желчного пузыря (дискинезия желчевыводящих путей,
      желчекаменная болезнь, холецистит и т.д.)
    </p><br>
    <div class="questions">
      <label for="medicalDataa3yes">Yes</label>
      <input type="radio" name="medicalData3" id="medicalData3ayes" value="yes">
      <label for="medicalDataa3no">No</label>
      <input type="radio" name="medicalData3" id="medicalData3ano" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData3"> </textarea> -->

    <p>
      Заболевания поджелудочной железы (камни, кальцификаты, панкреатит, киста
      и т.д.)
    </p><br>
    <div class="questions">
      <label for="medicalData4">Yes</label>
      <input type="radio" name="medicalData4" id="medicalData4" value="yes">
      <label for="medicalData42">No</label>
      <input type="radio" name="medicalData4" id="medicalData42" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData4"> </textarea> -->

    <p>
      Заболевания мочеполовой системы (заболевания почек, ураты, цистит,
      мочекаменная болезнь, пиелонефрит и т.д.)
    </p><br>
    <div class="questions">
      <label for="medicalData5">Yes</label>
      <input type="radio" name="medicalData5" id="medicalData5" value="yes">
      <label for="medicalData52">No</label>
      <input type="radio" name="medicalData5" id="medicalData52" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData5"> </textarea> -->

    <p>
      Заболевания опорно-двигательного аппарата (артрит, артроз, остеохондроз,
      подагра, дистрофия мышц, ревматизм и т.д.)
    </p><br>
    <div class="questions">
      <label for="medicalData6">Yes</label>
      <input type="radio" name="medicalData6" id="medicalData6" value="yes">
      <label for="medicalData62">No</label>
      <input type="radio" name="medicalData6" id="medicalData62" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData6"> </textarea> -->

    <p>Сердечнососудистые заболевания</p>
    <div class="questions">
      <label for="medicalData7">Yes</label>
      <input type="radio" name="medicalData7" id="medicalData7" value="yes">
      <label for="medicalData72">No</label>
      <input type="radio" name="medicalData7" id="medicalData72" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData7"> </textarea> -->

    <p>Артериальное давление (повышенное/ пониженное)</p>
    <div class="questions">
      <label for="medicalData8">Yes</label>
      <input type="radio" name="medicalData8" id="medicalData8" value="yes">
      <label for="medicalData82">No</label>
      <input type="radio" name="medicalData8" id="medicalData82" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData8"> </textarea> -->

    <p>Заболевание венозной системы (варикозное расширение вен и т.д.)</p>
    <div class="questions">
      <label for="medicalData9">Yes</label>
      <input type="radio" name="medicalData9" id="medicalData9" value="yes">
      <label for="medicalData92">No</label>
      <input type="radio" name="medicalData9" id="medicalData92" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData9"> </textarea> -->

    <p>Болезни системы крови (анемия и т.д.)</p>
    <div class="questions">
      <label for="medicalData10">Yes</label>
      <input type="radio" name="medicalData10" id="medicalData10" value="yes">
      <label for="medicalData101">No</label>
      <input type="radio" name="medicalData10" id="medicalData101" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData10"> </textarea> -->

    <p>
      Эндокринные заболевания (заболевания щитовидной железы, надпочечников,
      сахарный диабет 1 и 2 типа и т.д.)
    </p>
    <div class="questions">
      <label for="medicalData11">Yes</label>
      <input type="radio" name="medicalData11" id="medicalData11" value="yes">
      <label for="medicalData111">No</label>
      <input type="radio" name="medicalData11" id="medicalData111" value="no">
    </div>

    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData11"> </textarea> -->

    <p>Заболевания ЛОР-органов</p>
    <div class="questions">
      <label for="medicalData12">Yes</label>
      <input type="radio" name="medicalData12" id="medicalData12" value="yes">
      <label for="medicalData122">No</label>
      <input type="radio" name="medicalData12" id="medicalData122" value="no">
    </div>
    <!-- <textarea class="medicaldataone" rows="4" cols="50" name="medicalData12"> </textarea> -->
    <br>

    <!-- from here add the name in php  -->
    <p>
      Укажите другие настоящие или перенесенные заболевания Хронические (с
      какого года, остаточные проявления)
    </p>
    <div class="questions">
      <label for="medicalData13">Yes</label>
      <input type="radio" name="medicalData131" id="medicalData13" value="yes">
      <label for="medicalData133">No</label>
      <input type="radio" name="medicalData131" id="medicalData13" value="no">
    </div><br>
    <textarea class="medicaldataone" rows="4" cols="50" name="medicalData13"> </textarea>

    <p>Острые (с какого года, проявления)</p>
    <div class="questions">
      <label for="medicalData14">Yes</label>
      <input type="radio" name="medicalData141" id="medicalData14" value="yes">
      <label for="medicalData141">No</label>
      <input type="radio" name="medicalData141" id="medicalData141" value="no">
    </div><br>
    <textarea class="medicaldataone" rows="4" cols="50" name="medicalData14"> </textarea>

    <p>
      Операции (дата проведения, плановая/экстренная, осложнения,
      реабилитация)
    </p>
    <div class="questions">
      <label for="medicalData15">Yes</label>
      <input type="radio" name="medicalData151" id="medicalData15" value="yes">
      <label for="medicalData151">No</label>
      <input type="radio" name="medicalData151" id="medicalData151" value="no">
    </div><br>
    <textarea class="medicaldataone" rows="4" cols="50" name="medicalData15"> </textarea>

    <p>
      Семейная история болезней и наследственности (родители, дедушки и
      бабушки, братья и сестры, тети и дяди и т.д.)
    </p>
    <p>Мама и родственники по материнской линии</p>
    <div class="questions">
      <label for="medicalData16">Yes</label>
      <input type="radio" name="medicalData161" id="medicalData16" value="yes">
      <label for="medicalData161">No</label>
      <input type="radio" name="medicalData161" id="medicalData161" value="no">
    </div><br>
    <textarea class="medicaldataone" rows="4" cols="50" name="medicalData16"> </textarea>

    <p>Отец и родственники по отцовской линии</p>
    <div class="questions">
      <label for="medicalData17">Yes</label>
      <input type="radio" name="medicalData171" id="medicalData17" value="yes">
      <label for="medicalData171">No</label>
      <input type="radio" name="medicalData171" id="medicalData171" value="no">
    </div><br>
    <textarea class="medicaldataone" rows="4" cols="50" name="medicalData17"> </textarea>
  </div>



  <div>
    <h1>2. АНКЕТА</h1>
    <br />
    <!-- <h3>Вопросы</h3> -->
    <table class="centered-table">
      <tr>
        <th>№</th>
        <th>Вопросы </th>
        <th class="yes">ДА </th>
        <th class="yes">НЕТ</th>
        <th style="width: 20%;">Подробно:</th>
      </tr>
      <tr>
        <td>1</td>
        <td>
          Бывает ли у Вас повышенная раздражительность, ощущение
          агрессивности, раздражения по пустякам, уныние?
        </td>
        <td><input type="radio" name="table1" value="yes"></td>
        <td><input type="radio" name="table1" value="no"></td>
        <td><input type="text" name="question1_detail" class="question" /></td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          Часты ли случаи нервозности (внутреннего напряжения, суетливости,
          беспокойства и т.д.)
        </td>
        <td><input type="radio" name="table2" value="yes"></td>
        <td><input type="radio" name="table2" value="no"></td>
        <td><input type="text" name="question2_detail" class="question" /></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Тревожность (приступы паники, навязчивые мысли и т.д.)</td>
        <td><input type="radio" name="table3" value="yes"></td>
        <td><input type="radio" name="table3" value="no"></td>
        <td><input type="text" name="question3_detail" class="question" /></td>
      </tr>
      <tr>
        <td>4</td>
        <td>
          Чувствуете ли вы физическое истощение / упадок жизненных сил
          /опустошение (общее снижение работоспособности, пониженная
          активность, отсутствие интереса к хобби, сниженная самооценка,
          неудовлетворенность сделанным, достигнутым, необходимость заставлять
          себя проявлять активность и т.д.)
        </td>
        <td><input type="radio" name="table4" value="yes"></td>
        <td><input type="radio" name="table4" value="no"></td>
        <td><input type="text" name="question4_detail" class="question" /></td>
      </tr>
      <tr>
        <td>5</td>
        <td>
          Замечаете ли Вы частое сниженное настроение, апатию (чувство
          подавленности, грусти, отсутствие стимулов, колебания настроения,
          чувство бесполезности)
        </td>
        <td><input type="radio" name="table5" value="yes"></td>
        <td><input type="radio" name="table5" value="no"></td>
        <td><input type="text" name="question5_detail" class="question" /></td>
      </tr>
      <tr>
        <td>6</td>
        <td>
          Наблюдаете ли Вы у себя непереносимость даже легких стрессов? Бывает
          ли тремор во время стрессовых ситуаций?
        </td>
        <td><input type="radio" name="table6" value="yes"></td>
        <td><input type="radio" name="table6" value="no"></td>
        <td><input type="text" name="question6_detail" class="question" /></td>
      </tr>
      <tr>
        <td>7</td>
        <td>
          Есть ли у Вас уменьшение роста волос, бровей, ресниц? Алопеция?
          (облысение, выпадение волос) Если да, то с какого года?
        </td>
        <td><input type="radio" name="table7" value="yes"></td>
        <td><input type="radio" name="table7" value="no"></td>
        <td><input type="text" name="question7_detail" class="question" /></td>
      </tr>
      <tr>
        <td>8</td>
        <td>Бывают ли у Вас головокружения или обмороки?</td>
        <td><input type="radio" name="table8" value="yes"></td>
        <td><input type="radio" name="table8" value="no"></td>
        <td><input type="text" name="question8_detail" class="question" /></td>
      </tr>
      <tr>
        <td>9</td>
        <td>Бывает ли у Вас субфебрильная температура?</td>
        <td><input type="radio" name="table9" value="yes"></td>
        <td><input type="radio" name="table9" value="no"></td>
        <td><input type="text" name="question9_detail" class="question" /></td>
      </tr>
      <tr>
        <td>10</td>
        <td>Аппетит (хороший, избирательный, сниженный, постоянный голод)</td>
        <td><input type="radio" name="table10" value="yes"></td>
        <td><input type="radio" name="table10" value="no"></td>
        <td><input type="text" name="question10_detail" class="question" /></td>
      </tr>
      <tr>
        <td>11</td>
        <td>
          Есть ли у вас налет на языке? (укажите расположение: боковые
          части/корень/центр и цвет налета)
        </td>
        <td><input type="radio" name="table11" value="yes"></td>
        <td><input type="radio" name="table11" value="no"></td>
        <td><input type="text" name="question11_detail" class="question" /></td>
      </tr>
      <tr>
        <td>12</td>
        <td>Аллергические реакции на пищевые продукты</td>
        <td><input type="radio" name="table12" value="yes"></td>
        <td><input type="radio" name="table12" value="no"></td>
        <td><input type="text" name="question12_detail" class="question" /></td>
      </tr>
      <tr>
        <td>13</td>
        <td>
          Как часто за последний год Вы болели простудными заболеваниями?
        </td>
        <td><input type="radio" name="table13" value="yes"></td>
        <td><input type="radio" name="table13" value="no"></td>
        <td><input type="text" name="question13_detail" class="question" /></td>
      </tr>
      <tr>
        <td>14</td>
        <td>Принимали ли антибиотики за последний год?</td>
        <td><input type="radio" name="table14" value="yes"></td>
        <td><input type="radio" name="table14" value="no"></td>
        <td><input type="text" name="question14_detail" class="question" /></td>
      </tr>
      <tr>
        <td>15</td>
        <td>
          Вы придерживаетесь определенной системы питания? (вегетарианство,
          религиозные диеты, палео, и т.д.)
        </td>
        <td><input type="radio" name="table15" value="yes"></td>
        <td><input type="radio" name="table15" value="no"></td>
        <td><input type="text" name="question15_detail" class="question" /></td>
      </tr>
      <tr>
        <td>16</td>
        <td>
          Газообразование, вздутие, тяжесть после приема пищи/конкретных
          продуктов
        </td>
        <td><input type="radio" name="table16" value="yes"></td>
        <td><input type="radio" name="table16" value="no"></td>
        <td><input type="text" name="question16_detail" class="question" /></td>
      </tr>
      <tr>
        <td>17</td>
        <td>Бывает ли тошнота/рвота? Отрыжки? Частая икота? Изжога?</td>
        <td><input type="radio" name="table17" value="yes"></td>
        <td><input type="radio" name="table17" value="no"></td>
        <td><input type="text" name="question17_detail" class="question" /></td>
      </tr>
      <tr>
        <td>18</td>
        <td>Любимые продукты, блюда</td>
        <td><input type="radio" name="table18" value="yes"></td>
        <td><input type="radio" name="table18" value="no"></td>
        <td><input type="text" name="question18_detail" class="question" /></td>
      </tr>
      <tr>
        <td>19</td>
        <td>Нелюбимые продукты, блюда</td>
        <td><input type="radio" name="table19" value="yes"></td>
        <td><input type="radio" name="table19" value="no"></td>
        <td><input type="text" name="question19_detail" class="question" /></td>
      </tr>
      <tr>
        <td>20</td>
        <td>
          Есть ли тяга или отвращение к сладкому/соленому/мясу и субпродуктам?
        </td>
        <td><input type="radio" name="table20" value="yes"></td>
        <td><input type="radio" name="table20" value="no"></td>
        <td><input type="text" name="question20_detail" class="question" /></td>
      </tr>
      <tr>
        <td>21</td>
        <td>Сколько часов в день Вы спите?</td>
        <td><input type="radio" name="table21" value="yes"></td>
        <td><input type="radio" name="table21" value="no"></td>
        <td><input type="text" name="question21_detail" class="question" /></td>
      </tr>
      <tr>
        <td>22</td>
        <td>В какое время чаще всего просыпаетесь?</td>
        <td><input type="radio" name="table22" value="yes"></td>
        <td><input type="radio" name="table22" value="no"></td>
        <td><input type="text" name="question22_detail" class="question" /></td>
      </tr>
      <tr>
        <td>23</td>
        <td>В какое время Вы чаще всего ложитесь спать?</td>
        <td><input type="radio" name="table23" value="yes"></td>
        <td><input type="radio" name="table23" value="no"></td>
        <td><input type="text" name="question23_detail" class="question" /></td>
      </tr>
      <tr>
        <td>24</td>
        <td>
          Проблемы со сном (трудности с засыпанием, на протяжении сна, с
          ранним пробуждением, чувство усталости, плохой сон, бессонница и
          т.д.)?
        </td>
        <td><input type="radio" name="table24" value="yes"></td>
        <td><input type="radio" name="table24" value="no"></td>
        <td><input type="text" name="question24_detail" class="question" /></td>
      </tr>
      <tr>
        <td>25</td>
        <td>
          Есть ли сонливость, повышенная потребность во сне, частое ощущение
          усталости?
        </td>
        <td><input type="radio" name="table25" value="yes"></td>
        <td><input type="radio" name="table25" value="no"></td>
        <td><input type="text" name="question25_detail" class="question" /></td>
      </tr>
      <tr>
        <td>26</td>
        <td>
          Есть ли у Вас двигательная активность в течение дня (прогулки
          пешком, активный физический труд и т.д.)
        </td>
        <td><input type="radio" name="table26" value="yes"></td>
        <td><input type="radio" name="table26" value="no"></td>
        <td><input type="text" name="question26_detail" class="question" /></td>
      </tr>
      <tr>
        <td>27</td>
        <td>
          Занимаетесь ли Вы спортом или другими видами физической активности?
          (вид тренировок, стаж, количество тренировок в неделю)
        </td>
        <td><input type="radio" name="table27" value="yes"></td>
        <td><input type="radio" name="table27" value="no"></td>
        <td><input type="text" name="question27_detail" class="question" /></td>
      </tr>
      <tr>
        <td>28</td>
        <td>
          Есть ли боли в суставах и мышечные боли (боли в нижней части спины,
          боли в суставах, боли в пояснице, боли по всей спине и т.д.)
        </td>
        <td><input type="radio" name="table28" value="yes"></td>
        <td><input type="radio" name="table28" value="no"></td>
        <td><input type="text" name="question28_detail" class="question" /></td>
      </tr>
      <tr>
        <td>29</td>
        <td>
          Вы ощущаете снижение мышечной силы? (ощущение слабости, не связанные
          с занятиями спортом)
        </td>
        <td><input type="radio" name="table29" value="yes"></td>
        <td><input type="radio" name="table29" value="no"></td>
        <td><input type="text" name="question29_detail" class="question" /></td>
      </tr>
      <tr>
        <td>30</td>
        <td>
          Есть ли у Вас бородавки, папилломы, большое количество родинок,
          красные сосудистые звездочки?
        </td>
        <td><input type="radio" name="table30" value="yes"></td>
        <td><input type="radio" name="table30" value="no"></td>
        <td><input type="text" name="question30_detail" class="question" /></td>
      </tr>
      <tr>
        <td>31</td>
        <td>
          Есть ли у Вас следы от зубов по бокам языка, сухость кожи, отеки?
        </td>
        <td><input type="radio" name="table31" value="yes"></td>
        <td><input type="radio" name="table31" value="no"></td>
        <td><input type="text" name="question31_detail" class="question" /></td>
      </tr>
      <tr>
        <td>32</td>
        <td>Есть ли у Вас круги под глазами (красные/синие/черно-синие)</td>
        <td><input type="radio" name="table32" value="yes"></td>
        <td><input type="radio" name="table32" value="no"></td>
        <td><input type="text" name="question32_detail" class="question" /></td>
      </tr>
      <tr>
        <td>33</td>
        <td>
          Опишите Ваши ногти и лунку на них. Есть ли продольные полосы на
          подушечках пальцев? Облезает ли кожа на пальцах?
        </td>
        <td><input type="radio" name="table33" value="yes"></td>
        <td><input type="radio" name="table33" value="no"></td>
        <td><input type="text" name="question33_detail" class="question" /></td>
      </tr>
      <tr>
        <td>34</td>
        <td>
          Присутствует ли повышенная потливость (неожиданные/внезапные периоды
          повышенного потоотделения, приливы жара, независимые от степени
          напряжения)? Мокрая голова во сне? Едкий запах пота?
        </td>
        <td><input type="radio" name="table34" value="yes"></td>
        <td><input type="radio" name="table34" value="no"></td>
        <td><input type="text" name="question34_detail" class="question" /></td>
      </tr>
      <tr>
        <td>35</td>
        <td>
          Беспокоит ли Вас частое дневное мочеиспускание? Бывают ли у Вас
          затруднения при мочеиспускании?
        </td>
        <td><input type="radio" name="table35" value="yes"></td>
        <td><input type="radio" name="table35" value="no"></td>
        <td><input type="text" name="question35_detail" class="question" /></td>
      </tr>
      <tr>
        <td>36</td>
        <td>
          Как часто у Вас стул? (ежедневно/раз в 2 дня и т.д.) Поносы/запоры
        </td>
        <td><input type="radio" name="table36" value="yes"></td>
        <td><input type="radio" name="table36" value="no"></td>
        <td><input type="text" name="question36_detail" class="question" /></td>
      </tr>
      <tr>
        <td>37</td>
        <td>Есть ли у Вас дети? (укажите год рождения)</td>
        <td><input type="radio" name="table37" value="yes"></td>
        <td><input type="radio" name="table37" value="no"></td>
        <td><input type="text" name="question37_detail" class="question" /></td>
      </tr>
      <tr>
        <td>38</td>
        <td>Есть ли у Вас домашнее животное?</td>
        <td><input type="radio" name="table38" value="yes"></td>
        <td><input type="radio" name="table38" value="no"></td>
        <td><input type="text" name="question38_detail" class="question" /></td>
      </tr>
      <tr>
        <td>39</td>
        <td>Вы курите?</td>
        <td><input type="radio" name="table39" value="yes"></td>
        <td><input type="radio" name="table39" value="no"></td>
        <td><input type="text" name="question39_detail" class="question" /></td>
      </tr>
      <tr>
        <td>40</td>
        <td>Как часто и какие алкогольные напитки Вы употребляете?</td>
        <td><input type="radio" name="table40" value="yes"></td>
        <td><input type="radio" name="table40" value="no"></td>
        <td><input type="text" name="question40_detail" class="question" /></td>
      </tr>
    </table>
    <br /><br />
    <div class="medical" id="medical">
      <p class="second-para-heading">
        Лекарственные средства, которые Вы принимаете:
      </p>
      <br />
      <label for="medication_permanent">На постоянной основе </label><br>
      <input type="text" name="medication_permanent"><br />

      <label for="medication_seasonal">Сезонно</label><br>
      <input type="text" name="medication_seasonal"><br />

      <label for="medication_episodic">Эпизодически</label><br>
      <input type="text" name="medication_episodic"><br />

      <label for="medication_acute">По факту обострения</label><br>
      <input type="text" name="medication_acute"><br />

      <p class="second-para-heading">
        Витаминно-минеральные комплексы, которые Вы принимаете:
      </p>
      <br />
      <label for="vitamin_mineral_permanent">На постоянной основе </label><br>
      <input type="text" name="vitamin_mineral_permanent"><br />

      <label for="vitamin_mineral_seasonal">Сезонно</label><br>
      <input type="text" name="vitamin_mineral_seasonal"><br />

      <label for="vitamin_mineral_none">Не принимаете </label><br>
      <input type="text" name="vitamin_mineral_none"><br />

      <p class="second-para-heading">БАДы, которые Вы принимаете:</p>
      <br />
      <label for="supplement_name">Наименование</label><br>
      <input type="text" name="supplement_name"><br />

      <label for="supplement_none1">Не принимаете</label><br>
      <input type="text" name="supplement_none1"><br />

      <label for="supplement_none2">Не принимаете</label><br>
      <input type="text" name="supplement_none2"><br /><br />

      <p class="second-para-heading">
        Если ли еще информация, которую бы Вы хотели рассказать в связи с обращением?
      </p>
      <input type="text" name="additional_information">
    </div>
    <br /><br />
    <h1>3. ОПЫТ ПОХУДЕНИЯ/НАБОРА ВЕСА</h1>
    <div class="experienceofweightloss">

      <p class="para-center">
        (заполняется, только в случае если перед вами стоит цель снизить/набрать вес)
      </p>
      <br />

      <label for="weight_experience">Максимально подробно расскажите о Вашем опыте похудения/набора веса.
        Сколько времени Вы пытаетесь похудеть/набрать вес? Какие способы пробовали? Прибегали ли к помощи специалистов.
        Если ответ «да», то какой тактики придерживались?</label><br><br>
      <textarea id="weight_experience" name="weight_experience" rows="4" cols="50"> </textarea><br><br>

      <label for="psychological_factors">Считаете ли Вы, что в Вашем случае проблема с лишним весом/дефицитом веса
        частично или полностью имеет психологические причины? Заедаете ли Вы стресс или наоборот едите еще меньше?
        Компенсируете ли Вы едой какие-то эмоции или чувства? Испытываете ли Вы чувство вины?</label><br><br>
      <textarea id="psychological_factors" name="psychological_factors" rows="4" cols="50"> </textarea><br><br>
    </div>

    <br /><br />


    <br /><br />
    <h1>4. ДНЕВНИК ПИТАНИЯ</h1>
    <div class="foodDiary">

      <br />
      <p>
        Подробно опишите Ваш рацион за 3 дня (2 будних дня и 1 выходной день):
      </p>
      <p>
        Еда. Указывается любой, даже незначительный прием пищи (например,
        жвачка, 2 ореха и т.д.).
      </p>
      <p>
        Питьевой режим. Указывается любая жидкость (вода, кофе, сок и т.д.).
      </p>
      <p>Время приема пищи, воды или любой другой жидкости.</p>
      <p>
        Объем порции. Указывается в граммах с помощью кухонных весов. Если
        такой возможности нет, то в столовых и чайных ложках или способом
        «объем порции по руке», изображенной ниже
      </p>
      <img src="" alt="" />
      <p>
        Если после приема пищи у Вас случается всплеск эмоций или апатия,
        опишите их.
      </p>
      <p>
        Если после приема пищи Вы испытывает дискомфортные, необычные или
        болезненные ощущения, опишите их.
      </p>


      <div>
        <textarea name="newtextarea" id="textarea" cols="30" rows="10"></textarea>
        <!-- <p>Пример:</p>
        <ol>
          <li><strong>7.15</strong> пробуждение</li>
          <li><strong>7.50</strong> стакан воды 200 мл</li>
          <li>
            <strong>8.05</strong> завтрак около 100 грамм: овсянка, столовая
            ложка арахисовой пасты, две столовые ложки йогурта с черникой, чай с
            2 чайными ложками сахара
          </li>
          <li>
            <strong>9.15</strong> стакан воды. Заболело в правом подреберье
          </li>
          <li><strong>9.55</strong> стакан воды 200 мл</li>
          <li>
            <strong>10.05</strong> кофе с черным хлебом 70 грамм, творожным
            сыром и огурцом.
          </li>
          <li><strong>11.30</strong> стакан воды 100 мл</li>
          <li>
            <strong>12.10</strong>
            <ul>
              <li>груша (спустя 30 минут случилась истерика)</li>
              <li>жареная куриная ножка с луком 130 грамм</li>
              <li>жаренная картошка 50 грамм</li>
              <li>помидоры 60 грамм</li>
              <li>огурцы соленые 40 грамм</li>
            </ul>
          </li>
          <li><strong>15.25</strong> стакан воды</li>
          <li>
            <strong>16.10</strong> стакан сока Мультифрукт и 1 средний банан
          </li>
          <li><strong>16.50</strong> стакан воды 100 мл</li>
          <li><strong>17.00</strong> шоколадка Милка 180 грамм</li>
          <li>
            <strong>21.10</strong> Ужин около 200 грамм:
            <ul>
              <li>макароны 95 грамм</li>
            </ul>
          </li>
          <li>
            <strong>22.30</strong>
            <ul>
              <li>жареные котлеты 70 грамм</li>
              <li>огурец 30 грамм</li>
            </ul>
          </li>
          <li><strong>22.30</strong> Чай 150 мл с 3 конфетами</li>
        </ol> -->
      </div>
    </div>
    <br /><br />
    <h1>5. АНАЛИЗЫ и МЕД. ОБСЛЕДОВАНИЯ</h1>
    <div class="analysis">

      <br />
      <p>
        Вы можете приложить результаты Ваших анализов, расшифровки результатов
        УЗИ и т.д., давностью не более 3 месяцев. Вы можете приложить наиболее
        важные результаты анализов, которые выходили за референсные значения
        за все время (не в период ОРЗ, ОРВИ и гриппа).
      </p><br><br>
      <input type="file" name="file" id="file">



    </div><br>
    <h1>6. ФОТОГРАФИИ</h1>
    <div class="photos">

      <p>
        Фотографии позволяют отслеживать положительную динамику.
        Предоставляется при желании или необходимости (например, кожные
        заболевания, фото «до» похудения/набора веса).
      </p>
      <input type="file" accept="image/*" value="Select Image" name="image">


    </div>
  </div>
  <button class="btn">Submit</button>
  </form>
</body>

</html>