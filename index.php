<!DOCTYPE html>
<html>
<head>
  <title>The Queens Speech | English • Portuguese • Translation</title>
  <!-- estilos -->
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <!-- metatags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div  id="body-id" onClick="turnOffModal()"></div><!-- body-overlay -->
  <header>
    <div class="logo">
      <img id="tqs-logo" src="images/Grouplogo.png" />
    </div><!-- logo -->
    <div id="lang-selector">
      <i onClick="clicou('eng')" class="fas fa-clock icon"></i>
      <i onClick="clicou('port')" class="fas fa-futbol icon"></i>
    </div>
    <div id="lang-text">
      -
    </div>
  </header>

  <div id="modal">
      <div class="line"></div><!-- line --><!-- the red line -->
      <div class="main-area">
        <div class="modal-content">
          <div class="staff-line">
            <div class="staff-container">
              <img src="images/david.jpeg" class="staff-img" /> 
              <div class="staff-data">
                <h3>David Tidburry</h3>
                <h4>English Teacher - Native from UK</h4>
              </div><!-- staff-data -->  
            </div><!-- staff-container -->
            <div class="staff-container">
              <img src="images/danilo.jpg" class="staff-img" /> 
              <div class="staff-data">
                <h3>Danilo Miranda</h3>
                <h4>Teacher - Web Developer</h4>
              </div><!-- staff-data -->
            </div><!-- staff-container -->
          </div><!-- staff-line -->
          <div class="staff-line">
            <div class="staff-container">
              <img src="images/adele.jpg" class="staff-img" /> 
              <div class="staff-data">
                <h3>Adele Rebouças</h3>
                <h4>Official Translator</h4>
              </div><!-- staff-data -->
            </div><!-- staff-container -->
            <div class="staff-container">
              <img src="images/luciene.jpg" class="staff-img" /> 
              <div class="staff-data">
                <h3>Luciene Aquino</h3>
                <h4>2nd Translator</h4>
              </div><!-- staff-data -->
            </div><!-- staff-container -->
          </div><!-- staff-line -->
          <div class="modal-overlay"></div><!-- modal-overlay -->
        </div><!-- modal-content -->       
      </div><!-- main-area -->
      <div class="line"></div><!-- line -->
    </div><!-- modal -->
  <div class="banner"><!-- banner -->
    <div class="overlay"></div><!-- overlay -->
    <div class="banner-content center">
      <div class="teacher-photo left">
        <img id="avatar" src="images/QRed.png" />
      </div><!-- teach-photo -->
      <div class="banner-text left">
        <h1 id="comp-title">The Quee's Speech Company</h1>
        <h2 id="comp-intro">Let us introduce ourselves</h2>
        <p id="comp-hist">Here at The Queen's Speech, we have a methodology that is 'taylor made' for every individual whether this be in a business aspect or leisure, basic or advanced, we have something to suit everyone. We treat everyone of our students individually and set a programme to his/her needs. All lessons are up to date and deal with situations that we face in our daily lives. Times and locations are set by our students. If locations are not within reach, then we offer can Skype classes. The professors at The Queen's Speech are not given books to teach from as we feel that people should not be treated like a school student but should be treated uniquely with needs that are different to everyone. We evaluate each individual and then devise lessons based on what we learn from him/her. Translations are also offered by request at very competitive prices more details are available upon request. We offer a choice of 2 teaching and translating languages i.e.  British/American English and Portuguese (for foreigners) at prices which are, again, very competitive and can also provide receipts (Nota Fiscal), discounts are available depending on hours and number of students. We work from 7am until 9.30pm Monday until Friday (Saturday on a per request basis). We can also teach children. </p>
        <button onClick="showModal()"><i class="fas fa-handshake icon"><span>  Meet the team</span></i></button>
      </div><!-- banner-text -->
      <div class="clear"></div><!-- clear -->
    </div><!-- banner-content -->
  </div><!-- banner -->

  <div class="main-wrapper">
    <section class="services">
      <h2>What services do we offer?</h2>
      <div class="services translation">
       <i class="far fa-copy icon center"></i>
       <h3>Translations</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.  * This translations are non official *</p>
       <br/>
       <h3>Some companies we had the pleasure to work with</h3>
       <div class="companies">
        <img src="images/usp-1.svg" class="comp" />
        <img src="images/arcadis.svg" class="comp" />
        <img src="images/banco-safra.svg" class="comp"/>
       </div>
      </div>
      <div class="classes">
        <h3>English Classes</h3>
        <h4>We offer classes for anyone wanting to speak English, in three main options, as follows</h4>
        <div class="w33 left service">
          <i class="fas fa-building icon"></i>
          <h3>Corporate</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros. </p>
        </div><!-- w33 -->
        <div class="w33 left service">
            <i class="fab fa-skype icon"></i>
            <h3>Skype</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros. </p>
        </div><!-- w33 -->
        <div class="w33 left service">
            <i class="fas fa-user icon"></i>
            <h3>Individual</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros. </p>
        </div><!-- w33 -->
      </div>
      <div class="clear"></div><!-- clear -->
    </section><!-- services -->

    <section class="testimonials center">
      <h2>Testimonials</h2>
      <div class="testimonial">
        <div class="depoiment left">
          <p>"David is an excellent teacher, his way of teaching, always focused on his students, is very efficient and productive... I always thought learning English was boring, not this time. David will teach you with a lot of laughs lol"</p>
        </div><!-- depoiment -->
        <div class="author right">
          <p>Rodrigo Santini</p>
        </div><!-- author -->
      </div><!-- testimonial -->
      <div class="testimonial">
          <div class="depoiment left">
            <p>"The professor of The Queen's Speech is very dynamic and has an excelente method of learning. I have been learning not only with books and grammar but also incorporates things within the environment that they teach. What makes it most convenient is that the company is able to fit round my busy schedule and is also able to teach at my place of work."</p>
          </div><!-- depoiment -->
          <div class="author right">
            <p>Carolina Bernardo </p>
          </div><!-- author -->
      </div><!-- testimonial -->
      <div class="testimonial">
          <div class="depoiment left">
            <p>"I have been studying with David for more than 2 years. I just have good things to say about him. He´s very responsible, his classes are innovative and very joyful!
            With him, it´s 100% British English, which I prefer and like very much!!.
            My level has improved a lot and now studying English is a hobby!
            I really recommend the Queen´s Speech for those who want a new experience learning English."</p>
          </div><!-- depoiment -->
          <div class="author right">
            <p>Thaís Minante Bueso</p>
          </div><!-- author -->
          <div class="clear"></div>
      </div><!-- testimonial -->
    </section><!-- testimonials -->

    <div class="email-form center">
      <form method="post" action="index.php">
        <h2>Ok, I loved it! What's next?</h2>
        <h3>Just leave your email down below and I’ll send you the next details, and more in deph details</h3>
        <input type="text" name="name" placeholder="Your name..." /><br />
        <input type="email" class="email-field" name="email" placeholder="Your best email..." /><br />
        <input type="submit" class="button" name="Submit" value="Send me now!" />
      </form>
    </div><!-- email-form -->

    <footer class="center">
      <h2>And make sure to follow us on other media</h2>
      <a href="https://www.facebook.com/TheQueensSpeech/?ref=br_rs" target="_blank">
        <i class="fab fa-facebook-square icon"></i>
      </a>
      <a href="https://medium.com/the-queens-speech" target="_blank">
        <i class="fab fa-medium icon"></i>
      </a>
    </footer>
  </div><!-- main-wrapper -->
  <script>
    function showModal() {
      var modal = document.querySelector('div[id=modal]');
      var body = document.querySelector('div[id=body-id]');
      console.log(modal);
      console.log(body);
      modal.classList.add('modal-visible');
      body.classList.add('body-overlay');
    }

    function turnOffModal() {
      var modal = document.querySelector('div[id=modal]');
      var body = document.querySelector('div[id=body-id]');
      modal.classList.remove('modal-visible');
      body.classList.remove('body-overlay');  
    }  

    function clicou(opt) {
      xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
          // document.getElementById("comp-hist").innerHTML = xmlhttp.responseText;
          var valor = JSON.parse(xmlhttp.responseText);
          document.getElementById('comp-hist').innerHTML = valor[0];
          document.getElementById('comp-title').innerHTML = valor[1];
          document.getElementById('comp-intro').innerHTML = valor[2];
          // console.log(valor);
          // console.log('passou');
        }
      };
      xmlhttp.open("GET", "langrequest.php?q="+opt, true);
      xmlhttp.send();
    }
  </script>
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $userMail = $_POST['email'];

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = '#####';                 // SMTP username
      $mail->Password = '#####';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('tqsmedium@gmail.com');
      $mail->addAddress($userMail);     // Add a recipient

      //Attachments
      $mail->addAttachment('docs/terms.docx');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Therms and Conditions';
      $mail->Body    = "<html>
      <head>
        <style>
          p {color: #000;}
        </style>
      </head>
      <body>
      <p>Good evening $name,</p>
      <br />
      <p>Muito obrigado por entrar em contato com a The Queen's Speech.</P
      <br />
      <p>Como dissemos, temos uma metodologia personalizada para cada estudante, pois entendemos que cada estudante é único. Isso significa que as aulas são preparadas baseadas nas necessidade de cada um, portanto não seguimos livros didáticos, mas oferecemos todo o material necessário para as aulas: gramática, vocabulário, áudios, vídeos, etc.</p>
      <br />
      <p>As aulas tem a duração de 1 hora(normalmente), e cobramos R$100,00/hora, mas descontos são oferecidos de acordo com o número de aulas por semana e número de estudantes(em caso de grupos).
      Para as aulas via Skype, cobramos R$70,00/hora.</p>
      <br />
      <p>Os horários e locais das aulas são acordados com os professores, mas geralmente os professores vão até os alunos.</p>
      <br />
      <p>Atenciosamente,</p>
      <p>David Tidbury</p>
      <p>Company Director, The Queen's Speech.</p>
      <a>11 998689213</a>
      </body>
      </html>
      " ;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      
      // if email is sent, then save name and email to database

      date_default_timezone_set('America/Sao_Paulo');
      $sub_time = date('Y-m-d'); // the time when the user submits its email
      $pdo = new PDO('mysql:host=localhost;dbname=TQS_Leads', 'root', 'root');
      $sql = $pdo -> prepare("INSERT INTO `Subscribers` VALUES(null,?,?,?)");
      $sql -> execute(array($name,$userMail,$sub_time));

  } catch (Exception $e) {
      // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
}
?>
