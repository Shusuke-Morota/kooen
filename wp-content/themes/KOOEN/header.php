<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOOEN</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="headerContents">
        <div class="navigationWrapper">
          <div class="visibilityNavigation">
            <h1 class="logo">
              <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/Vector.svg" alt="logo">
              </a>
            </h1>
            <div class="drawer">
              <button class="toggle js-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </button>
            </div>
          </div>
          <nav class="hiddenNavigation">
            <ul class="list">
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top.svg" alt="TOP">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/statement.svg" alt="STATEMENT">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/service.svg" alt="SERVICE">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/Q＆A.svg" alt="Q&A">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/package.svg" alt="PACKAGE">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/company.svg" alt="COMPANY">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/recruit.svg" alt="RECRUIT">
                </a>
              </li>
              <li class="item">
                <a href="#" class="itemImage">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/contact.svg" alt="CONTACT">
                </a>
              </li>
            </ul>
            <div class="service">
              <p class="serviceLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/serviceLogo.svg" alt="copyright">
              </p>
              <div class="copyright">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/all-right-reserved.svg" alt="copyright">
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>