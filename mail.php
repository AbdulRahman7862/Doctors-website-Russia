<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    
    class Mail {
        private $content;
        private $date;
        private $year;
        private $fio;
        private $birthdate;
        private $city;
        private $phone;
        private $email;
        private $height;
        private $weight;
        private $wrist;
        private $hips;
        private $waist;
        private $secondpara;
        private $secondTextArea;
        private $question1_detail;
        private $question2_detail;
        private $question3_detail;
        private $question4_detail;
        private $question5_detail;
        private $question6_detail;
        private $question7_detail;
        private $question8_detail;
        private $question9_detail;
        private $question10_detail;
        private $question11_detail;
        private $question12_detail;
        private $question13_detail;
        private $question14_detail;
        private $question15_detail;
        private $question16_detail;
        private $question17_detail;
        private $question18_detail;
        private $question19_detail;
        private $question20_detail;
        private $question21_detail;
        private $question22_detail;
        private $question23_detail;
        private $question24_detail;
        private $question25_detail;
        private $question26_detail;
        private $question27_detail;
        private $question28_detail;
        private $question29_detail;
        private $question30_detail;
        private $question31_detail;
        private $question32_detail;
        private $question33_detail;
        private $question34_detail;
        private $question35_detail;
        private $question36_detail;
        private $question37_detail;
        private $question38_detail;
        private $question39_detail;
        private $question40_detail;
        private $medication_permanent;
        private $medication_seasonal;
        private $medication_episodic;
        private $medication_acute;
        private $vitamin_mineral_permanent;
        private $vitamin_mineral_seasonal;
        private $vitamin_mineral_none;
        private $supplement_name;
        private $supplement_none1;
        private $supplement_none2;
        private $additional_information;
        private $weight_experience;
        private $psychological_factors;
        private $thirdPara;
        private $fourthPara;
        private $fifthPara;

        
    
        public function __construct($date = '', $year = '', $fio = '', $birthdate = '', $city = '', $phone = '', $email = '', $height = '', $weight = '', $wrist = '', $hips = '', $waist = '', $secondpara = '', $secondTextArea = '', $question1_detail = '', $question2_detail = '', $question3_detail = '', $question4_detail = '', $question5_detail = '', $question6_detail = '', $question7_detail = '', $question8_detail = '', $question9_detail = '', $question10_detail = '', $question11_detail = '', $question12_detail = '', $question13_detail = '', $question14_detail = '', $question15_detail = '', $question16_detail = '', $question17_detail = '', $question18_detail = '', $question19_detail = '', $question20_detail = '', $question21_detail = '', $question22_detail = '', $question23_detail = '', $question24_detail = '', $question25_detail = '', $question26_detail = '', $question27_detail = '', $question28_detail = '', $question29_detail = '', $question30_detail = '', $question31_detail = '', $question32_detail = '', $question33_detail = '', $question34_detail = '', $question35_detail = '', $question36_detail = '', $question37_detail = '', $question38_detail = '', $question39_detail = '', $question40_detail = '', $medication_permanent = '', $medication_seasonal = '', $medication_episodic = '', $medication_acute = '', $vitamin_mineral_permanent = '', $vitamin_mineral_seasonal = '', $vitamin_mineral_none = '', $supplement_name = '', $supplement_none1 = '', $supplement_none2 = '', $additional_information = '', $weight_experience = '', $psychological_factors = '', $thirdPara = '', $fourthPara = '', $fifthPara = '') {
            $this->date = $date;
            $this->year = $year;
            $this->fio = $fio;
            $this->birthdate = $birthdate;
            $this->city = $city;
            $this->phone = $phone;
            $this->email = $email;
            $this->height = $height;
            $this->weight = $weight;
            $this->wrist = $wrist;
            $this->hips = $hips;
            $this->waist = $waist;
            $this->secondpara = $secondpara;
            $this->secondTextArea = $secondTextArea;
            $this->question1_detail = $question1_detail;
            $this->question2_detail = $question2_detail;
            $this->question3_detail = $question3_detail;
            $this->question4_detail = $question4_detail;
            $this->question5_detail = $question5_detail;
            $this->question6_detail = $question6_detail;
            $this->question7_detail = $question7_detail;
            $this->question8_detail = $question8_detail;
            $this->question9_detail = $question9_detail;
            $this->question10_detail = $question10_detail;
            $this->question11_detail = $question11_detail;
            $this->question12_detail = $question12_detail;
            $this->question13_detail = $question13_detail;
            $this->question14_detail = $question14_detail;
            $this->question15_detail = $question15_detail;
            $this->question16_detail = $question16_detail;
            $this->question17_detail = $question17_detail;
            $this->question18_detail = $question18_detail;
            $this->question19_detail = $question19_detail;
            $this->question20_detail = $question20_detail;
            $this->question21_detail = $question21_detail;
            $this->question22_detail = $question22_detail;
            $this->question23_detail = $question23_detail;
            $this->question24_detail = $question24_detail;
            $this->question25_detail = $question25_detail;
            $this->question26_detail = $question26_detail;
            $this->question27_detail = $question27_detail;
            $this->question28_detail = $question28_detail;
            $this->question29_detail = $question29_detail;
            $this->question30_detail = $question30_detail;
            $this->question31_detail = $question31_detail;
            $this->question32_detail = $question32_detail;
            $this->question33_detail = $question33_detail;
            $this->question34_detail = $question34_detail;
            $this->question35_detail = $question35_detail;
            $this->question36_detail = $question36_detail;
            $this->question37_detail = $question37_detail;
            $this->question38_detail = $question38_detail;
            $this->question39_detail = $question39_detail;
            $this->question40_detail = $question40_detail;
            $this->medication_permanent = $medication_permanent;
            $this->medication_seasonal = $medication_seasonal;
            $this->medication_episodic = $medication_episodic;
            $this->medication_acute = $medication_acute;
            $this->vitamin_mineral_permanent = $vitamin_mineral_permanent;
            $this->vitamin_mineral_seasonal = $vitamin_mineral_seasonal;
            $this->vitamin_mineral_none = $vitamin_mineral_none;
            $this->supplement_name = $supplement_name;
            $this->supplement_none1 = $supplement_none1;
            $this->supplement_none2 = $supplement_none2;
            $this->additional_information = $additional_information;
            $this->weight_experience = $weight_experience;
            $this->psychological_factors = $psychological_factors;
            $this->thirdPara = $thirdPara;
            $this->fourthPara = $fourthPara;
            $this->fifthPara = $fifthPara;
        }
    
        public function sendMail() {
            $mail = new PHPMailer();
            $mail->IsSMTP();
        
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "huzaifasadaqat22@gmail.com";
            $mail->Password = "wfrj ywtd emir ozyg";
            $mail->CharSet = 'UTF-8';

            $mail->IsHTML(true);
            $mail->addAddress("techedge558@gmail.com", "TechEdge");
            $mail->setFrom("huzaifasadaqat22@gmail.com", "Huzaifa");
            $mail->Subject = "Data from the client";

            $contenttoSend .= "<br>Дата: " . $this->date;
            $contenttoSend .= "<br>год: " . $this->year;
            $contenttoSend .= "<br>ФИО: " . $this->fio;

            $contenttoSend .= "<br>Дата рождения: " . $this->birthdate;
            $contenttoSend .= "<br>Дата рождения: " . $this->city;
            $contenttoSend .= "<br>Дата рождения: " . $this->phone;
            $contenttoSend .= "<br>Email: " . $this->email;
            $contenttoSend .= "<br>Рост: " . $this->height;
            $contenttoSend .= "<br>Вес: " . $this->weight;
            $contenttoSend .= "<br>Обхват запястья: " . $this->wrist;
            $contenttoSend .= "<br>Обхват бедер: " . $this->hips;
            $contenttoSend .= "<br>Обхват талии: " . $this->waist;
            $contenttoSend .= "<br>Обхват груди (измеряется на уровне 
            подмышечных впадин по 
            наиболее выступающим точкам 
            груди): " . $this->secondpara;
            $contenttoSend .= "<br>Что послужило поводом для обращения? Начните с проблемы, которая наиболее 
            сильно ухудшает качество Вашей жизни.
            : " . $this->secondTextArea;

        
            $contenttoSend .= "<br>Что Вас беспокоит (жалобы и симптомы)? Когда произошло ухудшение 
самочувствие или состояния? В чем оно проявилось?
Опишите самые незначительные, на первый взгляд неважные, болезненные или 
дискомфортные состояния и ощущения за последний год или больше.  " . $this->question1_detail;

            $contenttoSend .= "<h1>1. МЕДИЦИНСКИЕ ДАННЫЕ</h1><br>Подробно перечислите выявленные заболевания:
            o Кожные заболевания и другие высыпания на коже (псориаз, атопический 
            дерматит, экзема, витилиго и т.д.) " . $this->question2_detail;


            $contenttoSend .= "<br>Заболевания желудочно-кишечного тракта (колит, гастроэзофагеальная 
            рефлюксная болезнь, изжога, язва, гастрит и т.д.): " . $this->question3_detail;

            $contenttoSend .= "<br> Заболевания печени (геаптоз, гепатит и т.д.)
            " . $this->question4_detail;

            $contenttoSend .= "<br>Заболевания желчного пузыря (дискинезия желчевыводящих путей, 
желчекаменная болезнь, холецистит и т.д.)
" . $this->question5_detail;

            $contenttoSend .= "<br>Заболевания поджелудочной железы (камни, кальцификаты, панкреатит, киста и 
            т.д.)
            " . $this->question6_detail;

            $contenttoSend .= "<br>Заболевания мочеполовой системы (заболевания почек, ураты, цистит, 
            мочекаменная болезнь, пиелонефрит и т.д.)" . $this->question7_detail;

            $contenttoSend .= "<br>Заболевания опорно-двигательного аппарата (артрит, артроз, остеохондроз, 
            подагра, дистрофия мышц, ревматизм и т.д.)" . $this->question8_detail;

            $contenttoSend .= "<br> Сердечнососудистые заболевания" . $this->question9_detail;

            $contenttoSend .= "<br>Question 10 Detail: " . $this->question10_detail;

            $contenttoSend .= "<br> Сердечнососудистые заболевания " . $this->question11_detail;
            $contenttoSend .= "<br> Заболевание венозной системы (варикозное расширение вен и т.д.)  " . $this->question12_detail;
            $contenttoSend .= "<br>Болезни системы крови (анемия и т.д.) " . $this->question13_detail;

            $contenttoSend .= "<br> Эндокринные заболевания (заболевания щитовидной железы, надпочечников, 
сахарный диабет 1 и 2 типа и т.д.)" . $this->question14_detail;

            $contenttoSend .= "<br> Заболевания ЛОР-органов" . $this->question15_detail;

            $contenttoSend .= "<br> Укажите другие настоящие или перенесенные заболевания 
            Хронические (с какого года, остаточные проявления)" . $this->question16_detail;

            $contenttoSend .= "<br>Острые (с какого года, проявления)
            " . $this->question17_detail;

            $contenttoSend .= "<br> Операции (дата проведения, плановая/экстренная, осложнения, реабилитация)" . $this->question18_detail;

            $contenttoSend .= "<h1> Операции (дата проведения, плановая/экстренная, осложнения, реабилитация)</h1><br>";

            $contenttoSend .= "<br>Мама и родственники по материнской линии " . $this->question19_detail;

            $contenttoSend .= "<br> Отец и родственники по отцовской линии" . $this->question20_detail;

            $contenttoSend .= "<br>Question 21 Detail: " . $this->question21_detail;
            
            $contenttoSend .= "<br>Question 22 Detail: " . $this->question22_detail;
            $contenttoSend .= "<br>Question 23 Detail: " . $this->question23_detail;
            $contenttoSend .= "<br>Question 24 Detail: " . $this->question24_detail;
            $contenttoSend .= "<br>Question 25 Detail: " . $this->question25_detail;
            $contenttoSend .= "<br>Question 26 Detail: " . $this->question26_detail;
            $contenttoSend .= "<br>Question 27 Detail: " . $this->question27_detail;
            $contenttoSend .= "<br>Question 28 Detail: " . $this->question28_detail;
            $contenttoSend .= "<br>Question 29 Detail: " . $this->question29_detail;
            $contenttoSend .= "<br>Question 30 Detail: " . $this->question30_detail;
            $contenttoSend .= "<br>Question 31 Detail: " . $this->question31_detail;
            $contenttoSend .= "<br>Question 32 Detail: " . $this->question32_detail;
            $contenttoSend .= "<br>Question 33 Detail: " . $this->question33_detail;
            $contenttoSend .= "<br>Question 34 Detail: " . $this->question34_detail;
            $contenttoSend .= "<br>Question 35 Detail: " . $this->question35_detail;
            $contenttoSend .= "<br>Question 36 Detail: " . $this->question36_detail;
            $contenttoSend .= "<br>Question 37 Detail: " . $this->question37_detail;
            $contenttoSend .= "<br>Question 38 Detail: " . $this->question38_detail;
            $contenttoSend .= "<br>Question 39 Detail: " . $this->question39_detail;
            $contenttoSend .= "<br>Question 40 Detail: " . $this->question40_detail;
        
            $contenttoSend .= "<h2>Лекарственные средства, которые Вы принимаете: </h2><br>";

            $contenttoSend .= "<br>На постоянной основе: " . $this->medication_permanent;
            $contenttoSend .= "<br>Сезонно : " . $this->medication_seasonal;
            $contenttoSend .= "<br>Эпизодически: " . $this->medication_episodic;
            $contenttoSend .= "<br> По факту обострения: " . $this->medication_acute;

            $contenttoSend .= "<h2>Витаминно-минеральные комплексы, которые Вы принимаете:
            </h2><br>";
        
            $contenttoSend .= "<br>На постоянной основе : " . $this->vitamin_mineral_permanent;
            $contenttoSend .= "<br> Сезонно: " . $this->vitamin_mineral_seasonal;
            $contenttoSend .= "<br> Не принимаете: " . $this->vitamin_mineral_none;

            $contenttoSend .= "<h2>БАДы, которые Вы принимаете:</h2><br>";

        
            $contenttoSend .= "<br> Наименование: " . $this->supplement_name;
            $contenttoSend .= "<br> Не принимаете: " . $this->supplement_none1;
            $contenttoSend .= "<br>Не принимаете " . $this->supplement_none2;

            $contenttoSend .= "<br>Если ли еще информация, которую бы Вы хотели рассказать в связи с 
обращением? " . $this->additional_information;

            $contenttoSend .= "<h2>ОПЫТ ПОХУДЕНИЯ/НАБОРА ВЕСА
            (заполняется, только в случае если перед вами стоит цель 
            снизить/набрать вес)</h2><br>";

            $contenttoSend .= "<br>Максимально подробно расскажите о Вашем опыте похудения/набора веса. 
Сколько времени Вы пытаетесь похудеть/набрать вес? Какие способы 
пробовали? Прибегали ли к помощи специалистов. Если ответ «да», то какой 
тактики придерживались? " . $this->weight_experience;

            $contenttoSend .= "<br>Считаете ли Вы, что в Вашем случае проблема с лишним весом/ дефицитом веса 
            частично или полностью имеет психологические причины? Заедаете ли Вы 
            стресс или наоборот едите еще меньше? Компенсируете ли Вы едой какие-то 
            эмоции или чувства? Испытываете ли Вы чувство вины?" . $this->psychological_factors;
            //check this variable..
            $contenttoSend .= "<br>Third Paragraph: " . $this->thirdPara;

            $contenttoSend .= "<h2>5. АНАЛИЗЫ и МЕД. ОБСЛЕДОВАНИЯ
            </h2><br>";

            $contenttoSend .= "<br>Вы можете приложить результаты Ваших анализов, расшифровки результатов 
            УЗИ и т.д., давностью не более 3 месяцев. 
            Вы можете приложить наиболее важные результаты анализов, которые 
            выходили за референсные значения за все время (не в период ОРЗ, ОРВИ и 
            гриппа)." . $this->fourthPara;

            //check this one as well.
            $contenttoSend .= "<br>Fifth Paragraph: " . $this->fifthPara;
        
            $mail->MsgHTML($contenttoSend);
        
            if (!$mail->Send()) {
                echo "Error while sending Email.";
                var_dump($mail);
            } else {
                echo "Email sent successfully";
            }
        }
    }    
          
?>