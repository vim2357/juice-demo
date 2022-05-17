<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>demo juice</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
/>
<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo"><img src="logo.png" class="logo"></a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">О нас</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="about-page">Почему мы?</a>
          </li>
          <li class="navbar__item">
            <a href="#fr" class="navbar__links" id="services-page">
              Франшиза</a>
          </li>
          <li class="navbar__btn">
            <a href="#foot" class="button" id="signup">Контакты</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="hero" id="home">
      <div class="hero__container">
        
        <h1 class="hero__heading">Быстро! Вкусно! <span>Полезно!</span></h1>
       
        <button class="main__btn"><a href="#about">Вперёд!</a></button>
      </div>
    </div>
    <div class="main" id="about">
      <div class="main__container">
        <div class="main__img--container">
          <div class="main__img--card"><img src="cups.png" class="cups"></div>
        </div>
        <div class="main__content">
          <h1>Что мы делаем?</h1>
          <h2>Мы обеспечиваем лучший образ жизни с помощью интеллектуальных торговых технологий</h2>
          <br>
          <p style="color:black">Компания C-Juice основана в 2020 году и является дистрибьютером вендинговых аппаратов по выжимке апельсинового сока. Наши вендинговые аппараты- это инновационные бесконтактные оборудования, сертифицированные лабораторией The Controlled Environment Laboratory (CELab).

            С помощью интеллектуальных торговых технологий и решений, мы хотим внедрить доступный и полезный продукт, по конкурирующей цене. Аппарат оснащен наличной и безналичной оплатой такими как Apple Pay, Visa, MasterCard, American Express, NFC card payments.</p>
         
        </div>
      </div>
    </div>

    <div class="services" id="services">
      <h1>Наши преимущества</h1>
      <div class="services__wrapper">
        <div class="services__card">
          <div class="clock"><img src="juice_updated.png" class="juice--img"></div>
          <h2 class="h2_1">Полезно</h2>
          <p>Стакан апельсинового сока содержит суточную норму витамина С, более 25% суточной нормы.</p>
          
        </div>
        <div class="services__card">
          <div class="clock"><img src="neworange_updated.png" class="orange--img"></div>
          <h2 class="h2_2">Натурально</h2>
          <p>Используем самые свежие и натуральные апельсины.</p>
         
        </div>
        <div class="services__card">
          <div class="clock"><img src="signal_updatedd.png" class="card--img"></div>
          <h2 class="h2_3">Круглосуточно</h2>
          <p>Аппарат работает 24/7, не требует круглосуточной проверки.s</p>
          
        </div>
        <div class="services__card">
          <div class="clock"><img src="spray_updated.png" class="ozone--img"></div>
          <h2 class="h2_4">Дезинфекция</h2>
          <p>Озон уничтожает все известные микроорганизмы: вирусы, бактерии, грибки, водоросли, и их споры.</p>
       
        </div>
      </div>
    </div>

    <section class="fr" id="fr">
      <h3 class="title">Условия франшизы</h3>
       <ul class="grid">
        <li>
          <img src="one.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        <li>
          <img src="two.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        <li>
          <img src="three.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        <li>
          <img src="four.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        <li>
          <img src="five.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        <li>
          <img src="six.png">
          <h4>Lorem ipsum</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id felis et ipsum bibendum ultrices vitae pulvinar velit.</p>
        </li>
        </ul>
      </div>
    </section>
    
    <div class="footer__container" id="foot">
      <div class="cont">
        <div class="form">
          <div class="contact-info">
            <div class="info">
              <div class="information">
                <p> г.Нур-Султан, пр-т. Мангилик Ел. 55/8, блок С4.6</p>
              </div>
              <div class="information">
                <p>c.juicekz@yandex.ru</p>
              </div>
              <div class="information">
              
                <p>+7 (777) 777 7777</p>
              </div>
            </div>
  
            <div class="social-media">
              <div class="social-icons">
                <a href="#">
                  <i class="fab fa-telegram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            
  
          <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form id="myForm">
              <h3 class="title">Свяжитесь с нами</h3>
              <div class="input-container">
                <input type="text" id="name" name="name" class="input" placeholder="Ваше имя" />
                
                <span>Ваше имя</span>
              </div>
              <div class="input-container">
                <input type="email" id="email" name="email" class="input" placeholder="Email" />
                
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" id="phone" name="phone" class="input" placeholder="Номер телефона"/>
                
                <span>Номер телефона</span>
              </div>
              <button type="button" class="btnFeedbackButton btn" >Отправить</button>
              <h4 class="notification"></h4>
            </form>
          </div>
        </div>
      </div>
     </div>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        const btnFeedbackButton = document.querySelector('.btnFeedbackButton')
        btnFeedbackButton.addEventListener('click', (event) => {
          event.preventDefault();
            let name = $("#name");
            let email = $("#email");
            let phone = $("#phone");
            $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        phone: phone.val()
                    }, success: function(response) {
                        alert(JSON.stringify(response));
                    }
                })
        })
     
    </script>
</body>
</html>