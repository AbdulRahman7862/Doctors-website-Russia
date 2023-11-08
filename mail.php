<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Mail
{
    private $date;
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
    private $contenttoSend;
    private $medicalData1;
    private $medicalData2;
    private $medicalData3;
    private $medicalData4;
    private $medicalData5;
    private $medicalData6;
    private $medicalData7;
    private $medicalData8;
    private $medicalData9;
    private $medicalData10;
    private $medicalData11;
    private $medicalData12;
    private $pmedicalData13;
    private $medicalData14;
    private $medicalData15;
    private $medicalData16;
    private $medicalData17;
    // private $medicalData18;
    // private $medicalData19;
    // private $medicalData20;
    // private $medicalData21;
    // private $medicalData22;
    // private $medicalData23;
    // private $medicalData24;
    // private $medicalData25;
    // private $medicalData26;
    // private $medicalData27;
    // private $medicalData28;
    // private $medicalData29;
    // private $medicalData30;
    // private $medicalData31;
    // private $medicalData32;
    // private $medicalData33;
    // private $medicalData34;
    // private $medicalData35;
    private $medicalDataa;

    private $table1;
    private $table2;
    private $table3;
    private $table4;
    private $table5;
    private $table6;
    private $table7;
    private $table8;
    private $table9;
    private $table10;
    private $table11;
    private $table12;
    private $table13;
    private $table14;
    private $table15;
    private $table16;
    private $table17;
    private $table18;
    private $table19;
    private $table20;
    private $table21;
    private $table22;
    private $table23;
    private $table24;
    private $table25;
    private $table26;
    private $table27;
    private $table28;
    private $table29;
    private $table30;
    private $table31;
    private $table32;
    private $table33;
    private $table34;
    private $table35;
    private $table36;
    private $table37;
    private $table38;
    private $table39;
    private $table40;
    private $image;
    private $newtextarea;
    private $fileData = '';
    private $medicalData131;
    private $medicalData141; 
    private $medicalData151;
    private $medicalData161;
    private $medicalData171;

        public function __construct(
            $date = '',
            $fio = '',
            $birthdate = '',
            $city = '',
            $phone = '',
            $email = '',
            $height = '',
            $weight = '',
            $wrist = '',
            $hips = '',
            $waist = '',
            $secondpara = '',
            $secondTextArea = '',
            $question1_detail = '',
            $question2_detail = '',
            $question3_detail = '',
            $question4_detail = '',
            $question5_detail = '',
            $question6_detail = '',
            $question7_detail = '',
            $question8_detail = '',
            $question9_detail = '',
            $question10_detail = '',
            $question11_detail = '',
            $question12_detail = '',
            $question13_detail = '',
            $question14_detail = '',
            $question15_detail = '',
            $question16_detail = '',
            $question17_detail = '',
            $question18_detail = '',
            $question19_detail = '',
            $question20_detail = '',
            $question21_detail = '',
            $question22_detail = '',
            $question23_detail = '',
            $question24_detail = '',
            $question25_detail = '',
            $question26_detail = '',
            $question27_detail = '',
            $question28_detail = '',
            $question29_detail = '',
            $question30_detail = '',
            $question31_detail = '',
            $question32_detail = '',
            $question33_detail = '',
            $question34_detail = '',
            $question35_detail = '',
            $question36_detail = '',
            $question37_detail = '',
            $question38_detail = '',
            $question39_detail = '',
            $question40_detail = '',
            $medication_permanent = '',
            $medication_seasonal = '',
            $medication_episodic = '',
            $medication_acute = '',
            $vitamin_mineral_permanent = '',
            $vitamin_mineral_seasonal = '',
            $vitamin_mineral_none = '',
            $supplement_name = '',
            $supplement_none1 = '',
            $supplement_none2 = '',
            $additional_information = '',
            $weight_experience = '',
            $psychological_factors = '',
            $fifthPara = '',
            $medicalData1 = '',
            $medicalData2 = '',
            $medicalData3 = '',
            $medicalData4 = '',
            $medicalData5 = '',
            $medicalData6 = '',
            $medicalData7 = '',
            $medicalData8 = '',
            $medicalData9 = '',
            $medicalData10 = '',
            $medicalData11 = '',
            $medicalData12 = '',
            $medicalData13 = '',
            $medicalData14 = '',
            $medicalData15 = '',
            $medicalData16 = '',
            $medicalData17 = '',
            $medicalDataa = '',
            $table1 = '',
            $table2 = '',
            $table3 = '',
            $table4 = '',
            $table5 = '',
            $table6 = '',
            $table7 = '',
            $table8 = '',
            $table9 = '',
            $table10 = '',
            $table11 = '',
            $table12 = '',
            $table13 = '',
            $table14 = '',
            $table15 = '',
            $table16 = '',
            $table17 = '',
            $table18 = '',
            $table19 = '',
            $table20 = '',
            $table21 = '',
            $table22 = '',
            $table23 = '',
            $table24 = '',
            $table25 = '',
            $table26 = '',
            $table27 = '',
            $table28 = '',
            $table29 = '',
            $table30 = '',
            $table31 = '',
            $table32 = '',
            $table33 = '',
            $table34 = '',
            $table35 = '',
            $table36 = '',
            $table37 = '',
            $table38 = '',
            $table39 = '',
            $table40 = '',
            $image = '',
            $fileData = '',
            $newtextarea = '',
            $medicalData131= '',
            $medicalData141 = '',
            $medicalData151 = '',
            $medicalData161 = '',
            $medicalData171 = '',
        ) {
            $this->date = $date;
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
            $this->fifthPara = $fifthPara;
            $this->medicalData1 = $medicalData1;
            $this->medicalData2 = $medicalData2;
            $this->medicalData3 = $medicalData3;
            $this->medicalData4 = $medicalData4;
            $this->medicalData5 = $medicalData5;
            $this->medicalData6 = $medicalData6;
            $this->medicalData7 = $medicalData7;
            $this->medicalData8 = $medicalData8;
            $this->medicalData9 = $medicalData9;
            $this->medicalData10 = $medicalData10;
            $this->medicalData11 = $medicalData11;
            $this->medicalData12 = $medicalData12;
            $this->medicalData13 = $medicalData13;
            $this->medicalData14 = $medicalData14;
            $this->medicalData15 = $medicalData15;
            $this->medicalData16 = $medicalData16;
            $this->medicalData17 = $medicalData17;
            $this->medicalDataa = $medicalDataa;
            $this->table1 = $table1;
            $this->table2 = $table2;
            $this->table3 = $table3;
            $this->table4 = $table4;
            $this->table5 = $table5;
            $this->table6 = $table6;
            $this->table7 = $table7;
            $this->table8 = $table8;
            $this->table9 = $table9;
            $this->table10 = $table10;
            $this->table11 = $table11;
            $this->table12 = $table12;
            $this->table13 = $table13;
            $this->table14 = $table14;
            $this->table15 = $table15;
            $this->table16 = $table16;
            $this->table17 = $table17;
            $this->table18 = $table18;
            $this->table19 = $table19;
            $this->table20 = $table20;
            $this->table21 = $table21;
            $this->table22 = $table22;
            $this->table23 = $table23;
            $this->table24 = $table24;
            $this->table25 = $table25;
            $this->table26 = $table26;
            $this->table27 = $table27;
            $this->table28 = $table28;
            $this->table29 = $table29;
            $this->table30 = $table30;
            $this->table31 = $table31;
            $this->table32 = $table32;
            $this->table33 = $table33;
            $this->table34 = $table34;
            $this->table35 = $table35;
            $this->table36 = $table36;
            $this->table37 = $table37;
            $this->table38 = $table38;
            $this->table39 = $table39;
            $this->table40 = $table40;
            $this->image = $image;
            $this->fileData = $fileData;
            $this->newtextarea = $newtextarea;
            $this->medicalData131 = $medicalData131;
            $this->$medicalData141 = $$medicalData141;
            $this->$medicalData151 = $$medicalData151;
            $this->$medicalData161 = $medicalData161;
            $this->$medicalData171 = $medicalData171;
        }

    public function sendMail()
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();

        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "nigarmajidova92@gmail.com";
        $mail->Password = "w w u u v k s m d p t w i t n x";
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = "text/html";


        $mail->IsHTML(true);
        $mail->addAddress("asadovaelmaz@gmail.com", "asadovaelmaz");
        $mail->setFrom("nigarmajidova92@gmail.com", "nigarmajidova92");
        $mail->Subject = "Data from the client";

        // if (isset($_FILES['image']['tmp_name'])) {
        //     $image = $_FILES['image']['tmp_name'];
        //     $imageData = file_get_contents($image);
        //     $imageExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        //     $mimeType = mime_content_type($image);
        
        //     $mail->addStringAttachment($imageData, 'image.' . $imageExtension, 'base64', $mimeType);
        // }

        // if (isset($_FILES['file']['tmp_name'])) {
        //     $file = $_FILES['file']['tmp_name'];
        //     $fileData = file_get_contents($file);
        //     $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        //     $mimeType = mime_content_type($file);
        
        //     $mail->addStringAttachment($fileData, 'file.' . $fileExtension, 'base64', $mimeType);
        // }
        
        if (isset($_FILES['image']['tmp_name'])) {
            $image = $_FILES['image']['tmp_name'];
            $imageData = file_get_contents($image);
            $imageExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $mimeType = mime_content_type($image);
            
            $mail->addStringAttachment($imageData, 'image.' . $imageExtension, 'base64', $mimeType);
        }
        
        if (isset($_FILES['file']['tmp_name'])) {
            $file = $_FILES['file']['tmp_name'];
            $fileData = file_get_contents($file);
            $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $mimeType = mime_content_type($file);
    
            // Add the file as an attachment
            $mail->addStringAttachment($fileData, 'file.' . $fileExtension, 'base64', $mimeType);
        }
        
       

        $contenttoSend = "<h1>Form Data</h1><br>";
        $contenttoSend .= "<br>Дата: " . $this->date;
        $contenttoSend .= "<br>ФИО: " . $this->fio;

        $contenttoSend .= "<br>Дата рождения: " . $this->birthdate;
        $contenttoSend .= "<br>Город/Страна: " . $this->city;
        $contenttoSend .= "<br>Телефон: " . $this->phone;
        $contenttoSend .= "<br>E-mail: " . $this->email;
        $contenttoSend .= "<br>Рост: " . $this->height;
        $contenttoSend .= "<br>Вес: " . $this->weight;
        $contenttoSend .= "<br>Обхват запястья: " . $this->wrist;
        $contenttoSend .= "<br>Обхват бедер: " . $this->hips;
        $contenttoSend .= "<br>Обхват талии (измеряется на уровне подмышечных впадин по наиболее выступающим точкам груди): " . $this->waist;

        $contenttoSend .= "Что послужило поводом для обращения? Начните с проблемы, которая наиболее сильно ухудшает качество Вашей жизни. " . $this->secondpara;

        $contenttoSend .= "
        Что Вас беспокоит (жалобы и симптомы)? Когда произошло ухудшение самочувствие или состояния?
        В чем оно проявилось? Опишите самые незначительные, на первый взгляд неважные,
        болезненные или дискомфортные состояния и ощущения за последний год или больше: " . $this->secondTextArea;

        $contenttoSend .= "<h1>1. МЕДИЦИНСКИЕ ДАННЫЕ</h1><br>";

        $contenttoSend .= "Подробно перечислите выявленные заболевания: ";

        $contenttoSend .= "Заболевания желудочно-кишечного тракта (колит, гастроэзофагеальная рефлюксная болезнь, изжога, язва, гастрит и т.д.):  " . $this->medicalDataa;


        $contenttoSend .= "Заболевания печени (геаптоз, гепатит и т.д.):  " . $this->medicalData2;

        $contenttoSend .= "Заболевания желчного пузыря (дискинезия желчевыводящих путей, желчекаменная болезнь, холецистит и т.д.):
            " . $this->medicalData3;

        $contenttoSend .= "Заболевания поджелудочной железы (камни, кальцификаты, панкреатит, киста и т.д.): 
            " . $this->medicalData4;

        $contenttoSend .= "Заболевания мочеполовой системы (заболевания почек, ураты, цистит, мочекаменная болезнь, пиелонефрит и т.д.): 
            " . $this->medicalData5;

        $contenttoSend .= "Заболевания опорно-двигательного аппарата (артрит, артроз, остеохондроз, подагра, дистрофия мышц, ревматизм и т.д.): " . $this->medicalData6;

        $contenttoSend .= "Сердечнососудистые заболевания: " . $this->medicalData7;

        $contenttoSend .= "<br>Артериальное давление (повышенное/ пониженное): " . $this->medicalData8;

        $contenttoSend .= "<br>Заболевание венозной системы (варикозное расширение вен и т.д.): " . $this->medicalData9;

        $contenttoSend .= "<br> Болезни системы крови (анемия и т.д.): " . $this->question11_detail;

        $contenttoSend .= "<br> Эндокринные заболевания (заболевания щитовидной железы, надпочечников, сахарный диабет 1 и 2 типа и т.д.):  " . $this->medicalData10;

        $contenttoSend .= "<br>Эндокринные заболевания (заболевания щитовидной железы, надпочечников, сахарный диабет 1 и 2 типа и т.д.): " . $this->medicalData11;

        $contenttoSend .= "<br> Заболевания ЛОР-органов: " . $this->medicalData12;

        $contenttoSend .= "<br> Укажите другие настоящие или перенесенные заболевания Хронические (с какого года, остаточные проявления): " . $this->medicalData131 . "подробности " . $this->medicalData13;

        $contenttoSend .= "<br> Острые (с какого года, проявления): " . $this->medicalData141 . " <br>подробности " . $this->medicalData14;

        $contenttoSend .= "<br> Операции (дата проведения, плановая/экстренная, осложнения, реабилитация): 
            " . $this->medicalData151 . "<br> подробности " . $this->medicalData15;

        $contenttoSend .= "<br> Семейная история болезней и наследственности (родители, дедушки и бабушки, братья и сестры, тети и дяди и т.д.)

        Мама и родственники по материнской линии: " . $this->medicalData161 . "<br> подробности " . $this->medicalData16;

        $contenttoSend .= "<br>Отец и родственники по отцовской линии</br><br>" . $this->medicalData171 . "<br> подробности " . $this->medicalData17;




        $contenttoSend .= "<h1>2. АНКЕТА</h1><br>";

        $contenttoSend .= "<br>	Бывает ли у Вас повышенная раздражительность, ощущение агрессивности, раздражения по пустякам, уныние? " . $this->table1 . "<br> подробности " . $this->question1_detail;

        $contenttoSend .= "<br>	Часты ли случаи нервозности (внутреннего напряжения, суетливости, беспокойства и т.д.) " . $this->table2 . " подробности " . $this->question2_detail;
        $contenttoSend .= "<br>	Тревожность (приступы паники, навязчивые мысли и т.д.) " . $this->table3 . " подробности " . $this->question3_detail;
        $contenttoSend .= "<br>	Чувствуете ли вы физическое истощение / упадок жизненных сил /опустошение (общее снижение работоспособности, пониженная активность, отсутствие интереса к хобби, сниженная самооценка, неудовлетворенность сделанным, достигнутым, необходимость заставлять себя проявлять активность и т.д.) " . $this->table4 . "<br> подробности " . $this->question4_detail;
        $contenttoSend .= "<br>	Замечаете ли Вы частое сниженное настроение, апатию (чувство подавленности, грусти, отсутствие стимулов, колебания настроения, чувство бесполезности) " . $this->table5 . " подробности " . $this->question5_detail;
        $contenttoSend .= "<br>	Наблюдаете ли Вы у себя непереносимость даже легких стрессов? Бывает ли тремор во время стрессовых ситуаций? " . $this->table6 . " подробности " . $this->question6_detail;
        $contenttoSend .= "<br>	Есть ли у Вас уменьшение роста волос, бровей, ресниц? Алопеция? (облысение, выпадение волос) Если да, то с какого года? " . $this->table7 . "подробности " . $this->question7_detail;
        $contenttoSend .= "<br>	Бывают ли у Вас головокружения или обмороки? " . $this->table8 . " подробности " . $this->question8_detail;
        $contenttoSend .= "<br>	Бывает ли у Вас субфебрильная температура? " . $this->table9 . " подробности " . $this->question9_detail;
        $contenttoSend .= "<br>Аппетит (хороший, избирательный, сниженный, постоянный голод)" . $this->table10 . " подробности " . $this->question10_detail;
        $contenttoSend .= "<br>	Есть ли у вас налет на языке? (укажите расположение: боковые части/корень/центр и цвет налета) " . $this->table11 . " подробности " . $this->question11_detail;
        $contenttoSend .= "<br>Аллергические реакции на пищевые продукты " . $this->table12 . " подробности " . $this->question12_detail;
        $contenttoSend .= "<br>Как часто за последний год Вы болели простудными заболеваниями? " . $this->table13 . "подробности " . $this->question13_detail;
        $contenttoSend .= "<br>	Принимали ли антибиотики за последний год? " . $this->table14 . " подробности " . $this->question14_detail;
        $contenttoSend .= "<br>Вы придерживаетесь определенной системы питания? (вегетарианство, религиозные диеты, палео, и т.д.) " . $this->table15 . " подробности " . $this->question15_detail;
        $contenttoSend .= "<br>	Газообразование, вздутие, тяжесть после приема пищи/конкретных продуктов" . $this->table16 . " подробности " . $this->question16_detail;
        $contenttoSend .= "<br>Бывает ли тошнота/рвота? Отрыжки? Частая икота? Изжога?" . $this->table17 . " подробности " . $this->question17_detail;
        $contenttoSend .= "<br>	Любимые продукты, блюда" . $this->table18 . " подробности " . $this->question18_detail;
        $contenttoSend .= "<br>	Нелюбимые продукты, блюда " . $this->table19 . " подробности " . $this->question19_detail;
        $contenttoSend .= "<br>	Есть ли тяга или отвращение к сладкому/соленому/мясу и субпродуктам?" . $this->table20 . " подробности " . $this->question20_detail;

        $contenttoSend .= "<br>	Сколько часов в день Вы спите? " . $this->table21 . " подробности " . $this->question21_detail;
        $contenttoSend .= "<br>	В какое время чаще всего просыпаетесь? " . $this->table22 . "подробности " . $this->question22_detail;
        $contenttoSend .= "<br>	В какое время Вы чаще всего ложитесь спать? " . $this->table23 . "подробности " . $this->question23_detail;
        $contenttoSend .= "<br>	Проблемы со сном (трудности с засыпанием, на протяжении сна, с ранним пробуждением, чувство усталости, плохой сон, бессонница и т.д.)? " . $this->table24 . " подробности " . $this->question24_detail;
        $contenttoSend .= "<br>	Есть ли сонливость, повышенная потребность во сне, частое ощущение усталости? ".$this->table25." подробности " . $this->question25_detail;
        $contenttoSend .= "<br>	Есть ли у Вас двигательная активность в течение дня (прогулки пешком, активный физический труд и т.д.) ".$this->table26." подробности  " . $this->question26_detail;
        $contenttoSend .= "<br>	Занимаетесь ли Вы спортом или другими видами физической активности? (вид тренировок, стаж, количество тренировок в неделю) " . $this->table27 . " подробности " . $this->question27_detail;
        $contenttoSend .= "<br>	Есть ли боли в суставах и мышечные боли (боли в нижней части спины, боли в суставах, боли в пояснице, боли по всей спине и т.д.) " . $this->table28 . " подробности " . $this->question28_detail;
        $contenttoSend .= "<br>	Вы ощущаете снижение мышечной силы? (ощущение слабости, не связанные с занятиями спортом) " . $this->table29 . " подробности " . $this->question29_detail;
        $contenttoSend .= "<br>	Есть ли у Вас бородавки, папилломы, большое количество родинок, красные сосудистые звездочки? " . $this->table30 . " подробности " . $this->question30_detail;
        $contenttoSend .= "<br>	Есть ли у Вас следы от зубов по бокам языка, сухость кожи, отеки? " . $this->table31 . "подробности " . $this->question31_detail;
        $contenttoSend .= "<br>	Есть ли у Вас круги под глазами (красные/синие/черно-синие) " . $this->table32 . " подробности " . $this->question32_detail;
        $contenttoSend .= "<br>	Опишите Ваши ногти и лунку на них. Есть ли продольные полосы на подушечках пальцев? Облезает ли кожа на пальцах? " . $this->table33 . " подробности " . $this->question33_detail;
        $contenttoSend .= "<br>	Присутствует ли повышенная потливость (неожиданные/внезапные периоды повышенного потоотделения, приливы жара, независимые от степени напряжения)? Мокрая голова во сне? Едкий запах пота? " . $this->table34 . " подробности " . $this->question34_detail;
        $contenttoSend .= "<br> Беспокоит ли Вас частое дневное мочеиспускание? Бывают ли у Вас затруднения при мочеиспускании? " . $this->table35 . " подробности " . $this->question35_detail;
        $contenttoSend .= "<br>	Как часто у Вас стул? (ежедневно/раз в 2 дня и т.д.) Поносы/запоры " . $this->table36 . "подробности " . $this->question36_detail;
        $contenttoSend .= "<br> Есть ли у Вас дети? (укажите год рождения) " . $this->table37 . " подробности " . $this->question37_detail;
        $contenttoSend .= "<br> Есть ли у Вас домашнее животное? " . $this->table39 . "подробности " . $this->question38_detail;
        $contenttoSend .= "<br> Вы курите? " . $this->table39 . "подробности " . $this->question39_detail;
        $contenttoSend .= "<br> Как часто и какие алкогольные напитки Вы употребляете? " . $this->table40 . " подробности " . $this->question40_detail;


        $contenttoSend .= "<h2>Лекарственные средства, которые Вы принимаете: </h2><br>";

        $contenttoSend .= "<br>На постоянной основе: " . $this->medication_permanent;
        $contenttoSend .= "<br>Сезонно: " . $this->medication_seasonal;
        $contenttoSend .= "<br>Эпизодически: " . $this->medication_episodic;
        $contenttoSend .= "<br> По факту обострения: " . $this->medication_acute;

        $contenttoSend .= "<h2>Витаминно-минеральные комплексы, которые Вы принимаете:
            </h2><br>";

        $contenttoSend .= "<br>На постоянной основе : " . $this->vitamin_mineral_permanent;
        $contenttoSend .= "<br>Сезонно: " . $this->vitamin_mineral_seasonal;
        $contenttoSend .= "<br> Не принимаете: " . $this->vitamin_mineral_none;

        $contenttoSend .= "<h2>БАДы, которые Вы принимаете:</h2><br>";


        $contenttoSend .= "<br> Наименование: " . $this->supplement_name;
        $contenttoSend .= "<br> Не принимаете: " . $this->supplement_none1;
        $contenttoSend .= "<br>Не принимаете " . $this->supplement_none2;

        $contenttoSend .= "<br>Если ли еще информация, которую бы Вы хотели рассказать в связи с обращением? " . $this->additional_information;

        $contenttoSend .= "<h2>3. ОПЫТ ПОХУДЕНИЯ/НАБОРА ВЕСА</h2><br>";

        $contenttoSend .= "<br>Максимально подробно расскажите о Вашем опыте похудения/набора веса. Сколько времени Вы пытаетесь похудеть/набрать вес? Какие способы пробовали? Прибегали ли к помощи специалистов. Если ответ «да», то какой тактики придерживались? " . $this->weight_experience;

        $contenttoSend .= "<br>Считаете ли Вы, что в Вашем случае проблема с лишним весом/дефицитом веса частично или полностью имеет психологические причины? Заедаете ли Вы стресс или наоборот едите еще меньше? Компенсируете ли Вы едой какие-то эмоции или чувства? Испытываете ли Вы чувство вины?" . $this->psychological_factors;

        $contenttoSend .= "<h2>4. 4. ДНЕВНИК ПИТАНИЯ

            </h2><br>";

        $contenttoSend .= "Пользовательский ввод дневника питания: " . $this->newtextarea;



        $contenttoSend .= "<h2>5. АНАЛИЗЫ и МЕД. ОБСЛЕДОВАНИЯ

            </h2><br>";

        $contenttoSend .= "<br>Вы можете приложить результаты Ваших анализов, расшифровки результатов УЗИ и т.д., давностью не более 3 месяцев. Вы можете приложить наиболее важные результаты анализов, которые выходили за референсные значения за все время (не в период ОРЗ, ОРВИ и гриппа).

            " . $this->fifthPara;

        $contenttoSend .= "Image: " . $this->image;

      
        // Attach the image file if it's not empty and it's a valid image type (jpg or png)
        if (!empty($this->image)) {
            $imageExtension = pathinfo($this->image, PATHINFO_EXTENSION);
            if ($imageExtension === 'jpg' || $imageExtension === 'jpeg' || $imageExtension === 'png') {
                $mimeType = ($imageExtension === 'png') ? "image/png" : "image/jpeg";
                $mail->addStringAttachment(base64_decode($this->image), "image.$imageExtension", "base64", $mimeType);
            } else {
                // Handle invalid image type
                echo "Invalid image file type. Allowed file types are jpg, jpeg, or png.";
            }
        }

        // Attach the text file if it's not empty and it's a valid file type (txt, pdf, xls, csv, docx, or xlsx)
        if (!empty($this->fifthPara)) {
            $fileExtension = pathinfo($this->file, PATHINFO_EXTENSION);
            $allowedExtensions = ['txt', 'pdf', 'xls', 'csv', 'docx', 'xlsx'];
            
            if (in_array($fileExtension, $allowedExtensions)) {
                $mimeType = '';
                switch ($fileExtension) {
                    case 'txt':
                        $mimeType = "text/plain";
                        break;
                    case 'pdf':
                        $mimeType = "application/pdf";
                        break;
                    case 'xls':
                    case 'xlsx':
                        $mimeType = "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet";
                        break;
                    case 'csv':
                    case 'docx':
                        $mimeType = "application/msword";
                        break;
                }
                
                $mail->addStringAttachment(base64_decode($this->fifthPara), "file.$fileExtension", "base64", $mimeType);
            } else {
                // Handle invalid file type
                echo "Invalid file type. Allowed file types are txt, pdf, xls, csv, docx, or xlsx.";
            }
        }


        $mail->MsgHTML($contenttoSend);

        if (!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "<script>alert('Email sent successfully');</script>";
        }

    }
}

?>