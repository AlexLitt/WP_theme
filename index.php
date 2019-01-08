<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,600&amp;subset=latin-ext" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <div class="header__block">
      <div class="header__wrapper">
        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="header__logo" alt="MatchUp" width="200" height="40"></a>
        <ul class="header__nav">
          <li class="nav__item"><a href="#student">Start</a></li>
          <li class="nav__item"><a href="#">Usługa</a></li>
          <li class="nav__item"><a href="#">Kontakt</a></li>
        </ul>
      </div>


    </div>
    <div class="header__back">
      <div class="header__img--block">
        <img src="<?php echo get_template_directory_uri(); ?>/img/background.png" alt="" class="header__img" width="550" height="550">
      </div>
      <div class="header__container">
        <h2 class="header__main">Najprostszy sposób na znalezenie pracy</h2>
        <p class="header__motto">Określ swoje potrzeby dotyczące nowej pracy w krótkiej rozmowie z chatbotem. Otrzymaj dopasowane oferty szybko i bez stresu.</p>
        <a href="https://landbot.io/u/H-92183-AB8F3APMG9Y0JDKH/index.html" class="header__link button">Start kariery</a>
      </div>
    </div>

    <div class="header__arrow">
      <a href="#anchor"><img  class="header__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon__arrow.png" alt="" width="5" height="5"></a>
    </div>
  </header>

  <main>
    <div class="main__wrapper">
      <div class="student__wrapper">
        <h1 class="main__headline">Tutaj będzie headline </h1>

        <div class="student__advantages" id="student">
          <div class="student-advantages__container">
            <div class="advantages__block advantages__block--student">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_time.png" alt="" class="advantages__image" width="100" height="90"/>
              <p class="advantages__item">Świeżość</p>
              <p class="advantages__text"> Matchup to nie jest kolejna strona z ogłoszeniami Zmieniamy zasady. Mówisz czego potrzebujesz, a potem czekasz na oferty od pracodawców, którzy zapoznali się już z Twoim profilem  i wiedzą jaki masz potencjał. Nie ma złych odpowiedzi</p>
            </div>

            <div class="advantages__block advantages__block--student">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_accuracy.png" alt="" class="advantages__image" width="100" height="90"/>
              <p class="advantages__item">Kolejny formularz?</p>
              <p class="advantages__text">Nie. Czas formularzy przemija. O wszystkie informacje, których potrzebujemy zapyta Cię nasz chatbot  - musisz jedynie podążać za jego instrukcjami i wpisać swoje odpowiedzi w okno konwersacji.</p>
            </div>

            <div class="advantages__block advantages__block--student">
              <img src="<?php echo get_template_directory_uri(); ?>/img/icon_security.png" alt="" class="advantages__image" width="100" height="90"/>
              <p class="advantages__item">Dopasuj się</p>
              <p class="advantages__text">Najważniejszym elementem jest nasz system dopasowania. Określ swoje wymagania i umiejętności a my zadbamy o to, żebyś otrzymał oferty pracy dopasowane do Twoich oczekiwań.</p>
            </div>
          </div>
        </div>
      </div>

          <div class="student__headline">
            <p class=" student__headline">Wymarzona praca w 4 krokach</p>
          </div>

        <div class="student__block" id="anchor">
          <div class="student-img__container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bot.png" alt="" class="student__img" width="800" height="1000">
          </div>


            <div class="student-text__container">
              <p class="student__text student__text--begin">Kliknij przycisk „start kariery” </p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="student__arrow" width="100" height="80">
              <p class="student__text">Porozmawiaj z naszym botem</p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="student__arrow" width="100" height="80">
              <p class="student__text student__text--third">Opowiedz nam o swoich oczekiwaniach i umiejętnościach</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" class="student__arrow" width="100" height="80">
                <p class="student__text student__text--end">Otrzymaj dopasowane oferty pracy</p>
                <a href="bot.html" class="student__button button">Start kariery</a>
            </div>
          </div>
        </div>


        <div class="life__container">
          <div class="life__wrapper">
            <h2 class="life__headline">zasochłonne przeszukiwanie ogłosze i hurtowe rozsyłanie CV? Omiń te kroki z Matchup!</h2>
            <a href="bot.html" class="life__button button">Start kariery</a>
          </div>
          <div class="life-container__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="" class="life__img" width="693" height="524" />
         </div>
       </div>

        <div class="faq-wrapper">
          <div class="faq-header">Najczęściej zadawane pytania </div>
          <div class="faq-content">
            <div class="faq-question">
              <input id="q1" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q1" class="panel-title">Czym zajmuje  się MatchUp?</label>
              <div class="panel-content">MatchUP jest nową platformą internetową łączącą w przejrzysty sposób
                pracodawców i pracowników. Dzięki niej znajdziesz pracę, która będzie dostosowana
                do twoich potrzeb.</div>
            </div>

            <div class="faq-question">
              <input id="q2" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q2" class="panel-title">Czy korzystanie z MatchUp jest bezpieczne?</label>
              <div class="panel-content">Oczywiście! Działamy zgodnie z zasadami polityki ochrony danych osobowych.
                Twoje dane osobowe trafiają bezpośrednio do pracodawcy.</div>
            </div>

            <div class="faq-question">
              <input id="q3" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q3" class="panel-title">Czy MatchUp jest bezpłatny?</label>
              <div class="panel-content">Tak. Nie ponosisz żadnych kosztów za korzystanie z naszej platformy.</div>
            </div>

            <div class="faq-question">
              <input id="q4" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q4" class="panel-title">Czy moje wynagrodzenie nie będzie niższe przez korzystanie z usług MatchUpu?</label>
              <div class="panel-content">Twoje wynagrodzenie będzie dokładnie takie samo, jak gdybyś sam znalazł tę ofertę.</div>
            </div>

            <div class="faq-question">
              <input id="q5" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q5" class="panel-title">Nie mam doświadczenia zawodowego. Czy mogę korzystać z platformy?</label>
              <div class="panel-content">Tak. Pomagamy studentom w znalezieniu pierwszej pracy!</div>
            </div>

            <div class="faq-question">
              <input id="q6" type="checkbox" class="panel">
              <div class="plus">+</div>
              <label for="q6" class="panel-title">Czy mogę skorzystać z MatchUpu jeżeli obecnie nie szukam pracy?</label>
              <div class="panel-content">Możesz zostawić swoje dane na naszej platformie i być na bieżąco z najlepszymi
                ofertami pracy.</div>
            </div>
          </div>
        </div>

          <div class="student__headline">
            <p class=" student__headline">Masz pytania? Napisz do nas</p>
          </div>

        <div class="form__container"  id="contact">
          <form action="https://formspree.io/alexlitvinovskiy@gmail.com" method="POST" />
            <input name="name" type="text" class="feedback-input" placeholder="Imię i nazwisko" />
            <input name="email" type="text" class="feedback-input" placeholder="E-mail" />
            <textarea name="name" class="feedback-input" placeholder="Wiadomość"></textarea>
            <input type="submit" value="WYŚLIJ"/>
         </div>

  </main>

  <div class="footer">
    <div class="footer__container">
      <p class="footer__copyright">© Match-UP.me</p>
      <a href="#" class="footer__policy">Polityka prywatności</a>
      <li class="footer__list">
        <a href="" class="footer_link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_fb.png" alt="" class="footer__icon" width="40" height="40" ></a>
        <a href="" class="footer_link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_insta.png" alt="" class="footer__icon" width="40" height="40" ></a>
        <a href="" class="footer_link"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_link.png" alt="" class="footer__icon" width="40" height="40"></a>
      </li>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
