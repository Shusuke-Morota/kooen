<?php get_header(); ?>
<main>
  <div class="topPage">
    <section class="firstView">
      <div class="inner">
        <h1 class="logo">
          <video class="logoVideo" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/videos/fv_animation.mp4" autoplay muted playsinline></video>
        </h1>
        <ul class="arrows">
          <li class="arrow">
            <svg width="54" height="22" viewBox="0 0 54 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="topArrowAnimation" d="M1.00002 2L26.9808 20L52.9615 2" stroke="#01D480" stroke-opacity="0.2" stroke-width="3">
              </path>
            </svg>
          </li>
          <li class="arrow">
            <svg width="54" height="22" viewBox="0 0 54 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="middleArrowAnimation" d="M1.00002 2L26.9808 20L52.9615 2" stroke="#01C18D" stroke-opacity="0.5" stroke-width="3"></path>
            </svg>
          </li>
          <li class="arrow">
            <svg width="54" height="22" viewBox="0 0 54 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="bottomArrowAnimation" d="M1.00002 2L26.9808 20L52.9615 2" stroke="#01AB9D" stroke-width="3"></path>
              </path>
            </svg>
          </li>
        </ul>
      </div>
    </section>
    <section class="statement">
      <div class="inner">
        <div class="block">
          <div class="label">
            <h2 class="blockTitle js-animate fadeDown is-show">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_statement.svg" alt="statement">
            </h2>
            <div class="statementLine statementLineColor"></div>
          </div>
          <div class="contents js-animate fadeUp is-show">
            <h3 class="heading">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_heading.svg" alt="すべてのクリエイティブ企業を後方から支援します">
            </h3>
            <p class="text">
              コーエンはさまざまな業態のクリエイティブ企業へのバックアップを行う会社です。<br>
              <span>
                常に顧客企業の皆様の効率向上を探求し、デジタルを駆使し、最善のサポートを模索し、より良い業務支援に取り組んでいきます。
              </span>
            </p>
          </div>
        </div>
        <div class="block">
          <div class="label">
            <h2 class="blockTitle js-animate fadeDown is-show">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_origin.svg" alt="origin">
            </h2>
            <div class="originLine originLineColor"></div>
          </div>
          <div class="contents js-animate fadeUp is-show">
            <ul class="originList">
              <li class="originItem">
                <img class="pcDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-01.svg" alt="クリエイティブ企業に対する”後方支援”">
                <img class="spDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-01_sp.svg" alt="クリエイティブ企業に対する”後方支援”">
              </li>
              <li class="originItem">
                <img class="pcDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-02.svg" alt="経営に尽力している”経営陣の方々への応援”">
                <img class="spDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-02_sp.svg" alt="経営に尽力している”経営陣の方々への応援”">
              </li>
              <li class="originItem">
                <img class="pcDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-03.svg" alt="後々までの縁を築きたいという”後縁”">
                <img class="spDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-03_sp.svg" alt="後々までの縁を築きたいという”後縁”">
              </li>
              <li class="originItem">
                <img class="pcDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-04.svg" alt="安らぎを求めて様々な人が集まる”公園”">
                <img class="spDisplay" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/statement_list-04_sp.svg" alt="安らぎを求めて様々な人が集まる”公園”">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="topLogo">
      <div class="inner">
        <p class="bcgLogo"></p>
      </div>
    </section>
    <section class="consulting">
      <div class="inner">
        <div class="sectionHeading js-animate fadeUp is-show">
          <h2 class="sectionTitle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/consulting_heading.svg" alt="consulting">
          </h2>
          <p class="sectionSubTitle">
            企業を成長させるには経営管理体制の強化が必要不可欠です<br>
            KOOENはクリエイティブ企業を特化したバックオフィス構築と運用をパッケージ化し提供いたします。
          </p>
        </div>
        <div class="consultingImage js-animate fadeUp is-show">
          <img class="pcConsultingFrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/consulting_flow.svg" alt="01ツール導入 02業務フロー確認 03業務フローの設計 04トライ＆エラー">
          <img class="spConsultingFrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/consulting_flow_sp.svg" alt="01ツール導入 02業務フロー確認 03業務フローの設計 04トライ＆エラー">
        </div>
      </div>
    </section>
  </div>
</main>
