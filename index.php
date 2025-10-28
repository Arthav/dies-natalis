<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Dies Natalis Bhakta 2025</title>

    <link
      rel="stylesheet"
      href="https://iik.ac.id/assets/bootstrap/css/bootstrap.css"
    />

    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-PHLZQ8J");
    </script>
    <!-- End Google Tag Manager -->

    <style>
      /* =========================================================================
         0) GLOBAL RESETS & DEFAULTS
      ========================================================================= */

      :root {
        --hero-pink-1: #22174d;
        --hero-pink-2: #b14bd0;
        --hero-height-mobile: 580px;
        --hero-height-desktop: 660px;
      }

      /* Debugging */
      /* * {
        outline: 1px dashed rgba(255, 0, 0, 0.2);
      } */

      html {
        scroll-behavior: smooth;
        /* Hide scrollbar for IE, Edge and Firefox */
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
      /* Hide scrollbar for Chrome, Safari and Opera */
      html::-webkit-scrollbar {
        display: none;
      }

      * {
        font-family: lato-regular, sans-serif;
      }

      html,
      body {
        width: fit-content;
        max-width: 100%;
        overflow-x: hidden; /* kill stray horizontal scroll */
      }

      /* Media & sections never exceed viewport width */
      img,
      svg,
      video,
      iframe {
        max-width: 100%;
        height: auto;
        display: block; /* prevents inline-gap overflow */
      }

      section,
      .container {
        max-width: 100%;
      }

      /* =========================================================================
         1) FONTS
      ========================================================================= */
      @font-face {
        font-family: lato-regular;
        src: url(public/fonts/lato/Lato-Regular.ttf);
      }
      @font-face {
        font-family: lato-bold;
        src: url(public/fonts/lato/Lato-Bold.ttf);
      }
      @font-face {
        font-family: lato-black;
        src: url(public/fonts/lato/Lato-Black.ttf);
      }
      @font-face {
        font-family: kgrh;
        src: url(public/fonts/kgrh/KGRedHands.ttf);
      }

      .lato-regular {
        font-family: lato-regular, sans-serif;
      }
      .lato-bold {
        font-family: lato-bold, sans-serif;
      }
      .lato-black {
        font-family: lato-black, sans-serif;
      }
      .kgrh {
        font-family: kgrh, sans-serif;
      }
      .kgrh-pp {
        color: #393776;
      }

      /* =========================================================================
         2) UTILITIES
      ========================================================================= */
      .responsive-img {
        max-width: 100%;
        height: auto;
      }
      .btn-pink {
        background-color: #fa48e8;
        color: white;
        border-radius: 0.5rem;
      }
      .cpr {
        text-align: center;
        margin-top: 2rem;
      }
      .wacp {
        font-size: clamp(10px, 2vw, 16px);
      }
      a:has(img):hover > img {
        scale: 1.1;
        filter: drop-shadow(0 10px 8px rgb(255 255 255 / 0.04))
          drop-shadow(0 4px 3px rgb(255 255 255 / 0.1));
        transition: all 200ms ease-in-out;
      }
      a.bshadow:has(img):hover > img {
        scale: 1.1;
        filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04))
          drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
        transition: all 200ms ease-in-out;
      }

      /* =========================================================================
         3) SECTION BACKGROUNDS
      ========================================================================= */
      #head-sec {
        position: relative;
        min-height: var(--hero-height-mobile);
        /* gradient + bg image */
        background-image: radial-gradient(
            1200px 600px at 75% 25%,
            rgba(255, 255, 255, 0.05) 0%,
            rgba(255, 255, 255, 0) 60%
          ),
          linear-gradient(
            160deg,
            var(--hero-pink-1) 0%,
            var(--hero-pink-2) 100%
          ),
          url("public/image/hero_bg.png");
        background-repeat: no-repeat, no-repeat, no-repeat;
        background-position: center, center, center;
        background-size: cover, cover, cover;
        /* “overlay” gives a pink tint while keeping image detail */
        background-blend-mode: normal, overlay, normal;
        color: #fff;
        overflow: visible;
        width: 100%;
      }

      .hero-layer {
        position: absolute;
        inset: auto;
        z-index: 1;
        pointer-events: none;
      }
      .hero-wrap {
        position: relative;
        height: 100%;
      }

      /* top info (left) */
      .hero-info {
        top: 28px;
        left: clamp(52px, 4vw, 72px);
        width: clamp(220px, 32vw, 420px);
        z-index: 3;
      }

      /* top sponsor row (right) */
      .hero-sponsor {
        top: 24px;
        right: clamp(24px, 4vw, 32px);
        width: clamp(180px, 28vw, 360px);
        z-index: 3;
      }

      /* pink halftone ornament (top-right) */
      .hero-ornament {
        top: 0;
        right: 0;
        width: clamp(180px, 35vw, 520px);
        z-index: 1;
      }

      /* main people/singer (bottom-left center) */
      .hero-people {
        left: clamp(-20px, 4vw, 20px);
        bottom: 110px;
        width: clamp(260px, 40vw, 540px);
        z-index: 2;
      }

      /* headline CTA (center-right) */
      .hero-cta {
        left: clamp(585px, 6vw, 585px);
        top: clamp(240px, 24vh, 300px);
        width: clamp(260px, 40vw, 540px);
        z-index: 3;
      }

      /* total prize tag (bottom-right) */
      .hero-total-prize {
        right: clamp(8px, 5vw, 56px);
        bottom: -80px;
        width: clamp(210px, 30vw, 360px);
        z-index: 13;
      }

      .hero-gratis {
        right: 50%;
        transform: translateX(50%);
        bottom: -20px;
        width: clamp(210px, 30vw, 360px);
        z-index: 13;
      }

      /* camera (bottom-right, slightly above prize) */
      .hero-camera {
        right: clamp(-20px, 3vw, 10px);
        bottom: 0px;
        width: clamp(180px, 24vw, 320px);
        z-index: 9;
        bottom: -40px;
      }

      /* wavy footer (sits on bottom) */
      .hero-footer {
        left: 50%;
        transform: translateX(-50%);
        bottom: -300px;
        width: 1600px;
        max-width: 110%;
        z-index: 1;
        clip-path: inset(0 0 50% 0);
      }
      .hero-footer-flipped {
        left: 50%;
        transform: translateX(-50%) rotate(180deg) scaleX(-1);
        bottom: -140px;
        width: 1600px;
        max-width: 110%;
        z-index: 2;
      }

      .hero-footer,
      .hero-footer-flipped {
        clip-path: inset(0 0 50% 0);
      }

      #transition-sec {
        position: relative;
        isolation: isolate;
        min-height: 20vh;
        background-color: #fff; /* white base */
        z-index: 9;
        overflow: hidden; /* keeps flipped art contained */
      }

      #kompetisi-sec {
        /* layers: left halftone, right halftone, gradient base */
        background-image: url("public/image/hero-bg.png"),
          linear-gradient(to right, #22174d, #6b3a94);
        background-repeat: no-repeat, no-repeat;
        background-size: cover, cover;
        background-position: center, center;

        position: relative;
        isolation: isolate;
        z-index: 9;
        padding-bottom: 1px;
      }
      .pill-btn {
        background: #111;
        color: #fff;
        border-radius: 999px;
        border: 0;
        padding: clamp(10px, 2.8vw, 16px) clamp(16px, 5.5vw, 28px);
        font-weight: 700;
        /* Bigger on mobile, cap on desktop */
        font-size: clamp(1rem, 4.6vw, 1.25rem);
        line-height: 1.1;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
      }

      /* .pill-btn:hover {
        filter: brightness(1.08);
      } */

      .pill-icon {
        height: clamp(22px, 6vw, 28px);
        width: auto;
        display: inline-block;
      }

      /* Optional: keep it from stretching full width inside flex parents */
      .pill-btn span {
        white-space: nowrap;
      }

      #puncak-sec {
        /* top layer: image | bottom layer: gradient */
        background-image: url("public/image/hero_footer.svg"),
          linear-gradient(to right, #22174d, #6b3a94);
        background-size: cover, cover;
        background-position: center, center;
        background-repeat: no-repeat, no-repeat;

        width: 100%;
        min-height: 100vh;
        padding-top: 10rem;
      }

      #sponsor-sec {
        background: url("public/image/sponsor_bg.png") no-repeat bottom/cover;
        padding-top: 5rem;
      }

      footer {
        background: #1b0f47;
      }

      #foot-sec {
        background: #1b0f47;
      }

      /* =========================================================================
         4) HERO / HEADER ELEMENTS
      ========================================================================= */
      .img-brand,
      .img-logo {
        width: 55%;
        height: 55%;
      }
      .logo-bazaar {
        width: 75%;
      }

      #tsimg {
        position: absolute;
        left: 0;
        top: 90%;
      }
      #tsimg > div {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: hidden;
        justify-content: center;
      }
      #tsimg img {
        flex: 0 0 auto;
        max-width: 75%;
      }

      /* =========================================================================
         5) COUNTDOWN
      ========================================================================= */
      .count-wrapper {
        padding: 0 0.65rem;
        background: white;
        border-radius: 0.35rem;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07))
          drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
        font-weight: bold;
        font-size: 1.25em;
      }
      .col.h3,
      .count-wrapper > p {
        background: #fa48e8;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 0;
      }
      .count-wrapper + p {
        opacity: 0.7;
        margin-bottom: 0;
      }
      .row.countdown > .col.h3 {
        width: max-content;
        padding: 0;
        margin-top: 1rem;
      }

      /* =========================================================================
         6) CARDS / TABLES
      ========================================================================= */
      .comp-card {
        border-radius: 1rem;
        background: rgba(0, 0, 0, 0.3);
        color: white;
      }
      .cbody table {
        border-collapse: separate;
        border-spacing: 0 0.5em;
      }
      .cbody table th {
        text-align: center;
        background-color: #5f4ed8;
        border-radius: 0.25rem;
      }
      .cbody table td {
        text-align: left;
      }
      .cbody table * {
        vertical-align: text-top;
      }
      .cbody {
        padding: 1.2rem;
      }

      /* =========================================================================
         7) DOORPRIZE IMAGES
      ========================================================================= */
      .img-doorprize-mobile {
        display: block;
      }
      .img-doorprize-desktop {
        display: none;
      }
      .img-doorprize {
        width: 100%;
        height: auto;
        margin-top: 2rem;
        margin-bottom: 2rem;
        object-fit: cover;
      }
      .img-lewatkan {
        margin-top: 3rem;
        margin-bottom: 3rem;
      }

      /* =========================================================================
         8) REGISTER CARDS
      ========================================================================= */
      .card-small {
        min-height: 10rem;
        align-items: center;
        justify-content: center;
        display: flex;
      }
      .img-register {
        width: 100%;
        height: 10rem;
        object-fit: cover;
        overflow: visible;
        margin-top: 2rem;
        margin-bottom: 2rem;
      }
      .register-info-title {
        font-size: 1.4rem;
        font-weight: bold;
        text-align: left;
      }
      .register-info-bar {
        font-size: 1rem;
        border-radius: 1rem;
        background-color: #1cb1e4;
        color: #000;
        text-align: center;
        padding: 0.5rem;
      }
      .card-register {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 30rem;
        padding: 1rem;
        border-radius: 1rem;
        border-color: #fff;
        border-width: 1px;
      }
      .card-register .register-card {
        background-color: #0c5dcf;
        padding: 2rem;
        border-radius: 1rem;
        color: white;
        max-width: 90%;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #fff;
      }
      .card-register .title {
        font-family: "KGRH", sans-serif;
        font-size: 2rem;
        font-weight: bold;
        color: #fff;
        margin-bottom: 1rem;
      }
      .card-register .sub-title {
        font-family: "Lato", sans-serif;
        font-size: 1rem;
        margin-bottom: 1rem;
        color: #fff;
        text-align: left;
      }
      .card-register .details {
        font-family: "Lato", sans-serif;
        font-size: 1rem;
        margin-bottom: 2rem;
      }
      .card-register .details p {
        margin: 0.5rem 0;
      }
      .card-register .buttons {
        display: flex;
        flex-direction: row;
        gap: 1rem;
        align-items: center;
        justify-content: center;
      }
      .card-register .btn-info {
        padding: 1rem;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 0.5rem;
        text-decoration: none;
        color: #fff;
        display: flex;
        background-color: transparent;
        width: 100%;
        min-height: 5rem;
        text-align: center;
        border: 1px solid #fff;
        align-items: center;
        justify-content: center;
      }
      .card-register .btn-daftar {
        width: 100%;
      }
      .card-register .btn-daftar:hover {
        transform: scale(1.05);
        transition: transform 0.2s ease-in-out;
      }

      /* =========================================================================
         9) YOUTUBE SECTION
      ========================================================================= */
      #youtube-section {
        margin-top: 2rem;
        background: #fff;
        position: relative;
        padding-top: 0;
      }
      .youtube-iframe {
        margin-top: 3rem;
        padding-top: 2rem;
      }
      iframe {
        aspect-ratio: 16 / 9;
        width: 100% !important;
      }

      /* =========================================================================
         10) TITLES, BADGES, HERO TEXT
      ========================================================================= */
      .hero1,
      .hero2 {
        text-align: center;
        padding: 0 1rem;
      }
      #sc-wrap {
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 1rem auto;
        width: 80%;
      }
      #badge-kemeriahan {
        top: 12rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
      }
      #badge-kemeriahan > img {
        width: 70%;
      }
      #row-daftar {
        margin-top: 2.5rem;
      }
      #img-daftar {
        bottom: -10%;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
      }
      #img-past-sponsor,
      #img-sponsor {
        width: 50%;
      }
      .ul-tenant {
        font-size: 0.8rem;
      }
      #img-muter + img {
        top: 60%;
        animation: MoveUpDown 1.5s ease-in-out infinite;
      }
      #gratiss {
        display: none;
        animation: MoveUpDown 1.5s ease-in-out infinite;
      }
      #img-muter {
        height: 300px;
      }

      /* =========================================================================
         11) SLIDER / MARQUEE (photobanner)
      ========================================================================= */
      .photobanner {
        position: absolute;
        top: 0px;
        left: 0px;
        overflow: hidden;
        white-space: nowrap;
        animation: bannermove 24s linear infinite;
        height: 80%;
      }
      .bannermove-reverse {
        animation: bannermove-reverse 24s linear infinite;
      }
      .photobanner > img {
        height: 100%;
      }

      /* =========================================================================
         12) SMALL HIGHLIGHT BALLOONS & TABLE ALIGNMENTS
      ========================================================================= */
      .hl-bg {
        background: url(public/balon\ chat.svg) no-repeat center/contain;
        padding: 1rem 0.975rem 1rem 1.25rem;
        position: absolute;
        top: -100%;
        right: -3.5rem;
        scale: 0.6;
      }
      .hl-small {
        line-height: 50%;
        margin-left: 4px;
        font-size: 1rem !important;
        font-weight: 100;
      }
      .cbody table td + th {
        font-weight: normal;
        vertical-align: middle;
        padding-left: 4px;
      }
      .hl-bg.brnj,
      .hl-bg.brwj {
        top: -12%;
      }

      /* =========================================================================
         13) LAYOUT HELPERS (COLUMNS, IMAGES, BADGES)
      ========================================================================= */
      .col-kanan {
        place-self: start;
      }
      .col-kanan img {
        scale: unset;
      }
      #gttmic img {
        position: absolute;
      }
      #gttmic img:nth-child(1) {
        top: -3%;
        left: 0;
      }
      #gttmic img:nth-child(2) {
        top: 30%;
        right: 0;
        width: 50%;
      }
      .infowcd {
        position: relative;
        z-index: 2;
      }
      .minfo-wrapper,
      .img-bf-footer {
        width: 7 0%;
      }
      .col-kiri {
        order: 2;
      }
      .col-tengah {
        order: 1;
      }
      .btn-cek-m {
        background: rgb(231, 47, 158);
        background: linear-gradient(
          90deg,
          rgba(231, 47, 158, 1) 35%,
          rgba(97, 78, 211, 1) 100%
        );
        border: 1.35px solid #231779;
        font-size: 0.875rem;
        color: white;
        border-radius: 0.65rem;
      }
      .hand-v {
        animation: MoveYHand 1.5s ease-in-out infinite;
      }
      .hand-h {
        animation: MoveXHand 1.5s ease-in-out infinite;
      }

      /* =========================================================================
         14) TENANT / SPONSOR
      ========================================================================= */
      .tenant-title {
        width: 30%;
      }
      .daftar-sponsor-title {
        width: 70%;
      }
      .arrow-icon {
        right: 25%;
      }
      .arrow-icon-lewatkan {
        top: 70%;
        width: 15%;
        right: 2%;
      }

      /* =========================================================================
         15) TENANT LIST GRID
      ========================================================================= */
      .tenant-list {
        display: block !important;
        padding-left: 30px;
        /* optional: keep your text styles */
        text-align: left;
        font-size: 0.775rem;
      }
      .tenant-list ul {
        padding: 0;
        margin: 0;
      }
      .tenant-list li {
        list-style-type: disc;
      }

      /* =========================================================================
         16) ANIMATIONS
      ========================================================================= */
      @keyframes bannermove {
        0% {
          transform: translate(0, 0);
        }
        100% {
          transform: translate(-50%, 0);
        }
      }
      @keyframes bannermove-reverse {
        0% {
          transform: translate(-50%, 0);
        }
        100% {
          transform: translate(0, 0);
        }
      }
      @keyframes MoveUpDown {
        0%,
        100% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(4rem);
        }
      }
      @keyframes MoveYHand {
        0%,
        100% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(-2rem);
        }
      }
      @keyframes MoveXHand {
        0%,
        100% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(-2rem);
        }
      }

      /* =========================================================================
         17) MEDIA QUERIES
      ========================================================================= */

      /* -- ≤768px ------------------------------------------------------------- */
      @media (max-width: 768px) {
        .responsive-img {
          width: 30%;
        }
        #text-terbuka-mobile {
          position: relative;
          left: 0;
          top: auto;
          transform: translateY(0);
          width: 40%;
        }
        .tenant-list {
          grid-template-columns: repeat(1, 1fr);
        }

        .tenant-list {
          padding-left: 30px;
        }
        /* Neutralize row’s negative margins inside tenant-list only */
        .tenant-list .row {
          --bs-gutter-x: 0; /* kill horizontal gutters in that block */
          margin-left: 0;
          margin-right: 0;
        }
        .tenant-list .col {
          padding-left: 0;
          padding-right: 0;
        }
        .card-register {
          padding: 1rem 0;
        }
        .card-register .register-card {
          padding: 1.5rem;
        }
        .puncak-list {
          justify-items: center;
        }

        .hero-info {
          top: 56px;
          width: clamp(200px, 60vw, 360px);
          left: 55%;
          transform: translateX(-50%);
        }
        .hero-sponsor {
          top: 24px;
          width: clamp(160px, 40vw, 300px);
          left: 50%;
          transform: translateX(-50%);
        }

        .head-sec::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: linear-gradient(to right, #22174d, #6b3a94);
        }
        .hero-people {
          bottom: 140px;
          width: clamp(260px, 80vw, 520px);
          left: 55%;
          transform: translateX(-50%);
        }
        .hero-cta {
          top: 32rem;
          width: 10rem;
          left: 8rem;
          z-index: 13;
        }
        .hero-camera {
          display: none;
        }
        .hero-gratis {
          bottom: 2rem;
          width: 4rem;
          left: 1rem;
          z-index: 13;
        }
        .hero-total-prize {
          right: 50%;
          transform: translateX(50%);
          bottom: 90px;
        }

        .hero-footer {
          width: 1400px;
          left: 50%;
          transform: translateX(-50%);
          bottom: -50px;
          max-width: 110%;
          z-index: 1;
          /* clip-path: inset(0 0 50% 0); */
        }

        .hero-footer-flipped {
          left: 50%;
          transform: translateX(-50%) rotate(180deg) scaleX(-1);
          bottom: -50px;
          width: 1600px;
          max-width: 110%;
          z-index: 2;
        }
      }

      /* -- ≥768px ------------------------------------------------------------- */
      @media screen and (min-width: 768px) {
        .minfo-wrapper {
          width: 50%;
        }
      }

      /* -- ≥1024px ------------------------------------------------------------ */
      @media screen and (min-width: 1024px) {
        .img-bf-footer {
          width: 100%;
        }
        .puncak-logo {
          transform: translateX(10%);
        }
        .puncak-gratis {
          transform: translateX(-10%);
        }

        #puncak-sec {
          padding-top: 5rem;
        }
        .daf-sponsor {
          width: 100%;
          transform: translate(-10%, 20%);
        }
        footer {
          background-position: top 58% left 55%;
          background-size: 160%;
        }
        .minfo-wrapper {
          width: 35%;
        }
        #badge-kemeriahan {
          top: -2rem;
          left: 80%;
          transform: translateX(-50%);
          z-index: 2;
        }

        #head-sec {
          min-height: var(--hero-height-desktop);
        }
        .hero-people {
          bottom: -60px;
          z-index: 9;
        }
        .hero-cta {
          top: 18%;
        }

        #head-sec > .container {
          padding: 4rem 0;
        }
        #foot-sec {
          background-position: center;
          background-size: cover;
        }
        .infowcd {
          font-size: 0.875rem;
        }
        .img-brand {
          width: 40%;
        }
        .logo-bazaar {
          width: 25%;
        }
        .doorprize-row {
          transform: translateX(5%);
        }
        .img-doorprize-mobile {
          display: none;
        }
        .img-doorprize-desktop {
          display: block;
        }
        .img-doorprize {
          width: 100%;
          height: auto;
          object-fit: cover;
        }
        .img-tumbler {
          width: 20rem;
          height: auto;
        }
        .img-lewatkan {
          max-width: 50%;
        }
        .title-daftar-sponsor {
          transform: translateX(30%);
        }
        .info-detail-sponsor {
          transform: translateX(-30%);
        }
        .tenant-title {
          width: 15%;
        }
        .arrow-icon {
          right: 30%;
        }
        .arrow-icon-lewatkan {
          top: 70%;
          width: 20%;
          right: 0;
          transform: translateX(50%);
        }
        .daftar-sponsor-title {
          width: 40%;
        }
        #transition-sec {
          position: relative;
          isolation: isolate;
          min-height: 20vh;
          background-color: #fff; /* white base */
          z-index: 9;
          overflow: hidden; /* keeps flipped art contained */
        }

        #youtube-section {
          background-color: #fff; /* white base */
          background-image: url("public/image/youtube_left_bg.svg"),
            url("public/image/youtube_right_bg.svg"); /* remove if not available */
          background-repeat: no-repeat, no-repeat;
          background-position: left -60px top 50vh, right -60px top -20px;
          background-size: 520px auto, 520px auto;

          padding: 2rem 0; /* space so images show */
        }
        .youtube-container {
          width: 50%;
        }

        /* Center your content */
        #youtube-section .inner {
          width: min(100%, 900px);
          margin: 0 auto;
        }

        .container-bulan-juni {
          padding-top: 5rem;
          padding-bottom: 5rem;
        }
        .youtube-iframe {
          margin-top: -2rem;
          max-width: 50%;
          transform: translateX(50%);
          padding-bottom: 2rem;
        }
        #gratiss {
          display: block;
          animation: MoveUpDown 1.5s ease-in-out infinite;
          max-width: 150px;
        }
        .teks-hadir-juni {
          width: 30%;
          transform: translateY(-50%);
        }
        .img-logo {
          width: 30%;
        }
        .hero1 {
          text-align: right;
          border-right: 1px solid black;
        }
        .hero2 {
          text-align: left;
        }
        .col.h3 {
          margin-top: 2.5%;
        }
        #sc-wrap {
          width: 100%;
          margin: 1rem 0;
        }
        .count-wrapper {
          font-size: 2.25rem;
        }
        #badge-kemeriahan img {
          width: 20%;
        }
        #img-muter {
          height: 300px;
        }
        .photobanner {
          position: absolute;
          top: 0px;
          left: 0px;
          overflow: hidden;
          white-space: nowrap;
          animation: bannermove 32s linear infinite;
          height: 80%;
        }
        .photobanner > img {
          height: 100%;
          margin-left: -0.25rem;
        }
        .comp-card {
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 2rem;
          margin-top: 2rem;
        }
        .comp-card > * {
          width: 50%;
        }
        #row-daftar {
          margin-top: 3rem;
          padding-bottom: 3rem;
          display: flex;
          align-items: center;
          flex-direction: row-reverse;
        }
        #img-daftar {
          width: 100%;
        }
        #img-past-sponsor,
        #img-sponsor {
          width: 50%;
          padding-bottom: 2rem;
        }
        .ul-tenant {
          font-size: 1rem;
        }
        #img-muter + img {
          top: 25%;
        }
        .col-lg-6:has(#img-past-sponsor) {
          border-right: 2px solid #4330ca;
        }
        .chead > img {
          scale: 1.3;
          display: block;
          margin-bottom: 1.75rem;
        }
        .hl-bg.brnj,
        .hl-bg.brwj {
          top: 0;
        }
        .col-kanan img {
          scale: 1.25;
        }
        .cpr {
          text-align: unset;
          margin-top: unset;
        }
        #gttmic img:nth-child(1) {
          top: -5%;
          width: 50%;
        }
        #gttmic img:nth-child(2) {
          top: 30%;
          width: 20%;
        }
      }
    </style>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-PHLZQ8J"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ================================ HEAD / HERO ================================ -->
    <section id="head-sec">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <img
              src="public/image/hero_info.svg"
              alt=""
              class="hero-layer hero-info img-fluid"
            />
          </div>
          <div class="col-12 col-lg-6 text-lg-end mt-3 mt-lg-0">
            <img
              src="public/image/hero_sponsor.svg"
              alt=""
              class="hero-layer hero-sponsor img-fluid"
            />
          </div>
        </div>

        <div class="row" style="top: 50%">
          <div class="col-12 col-lg-6">
            <img
              src="public/image/hero_people.svg"
              alt=""
              class="hero-layer hero-people img-fluid"
            />
          </div>
          <div class="col-12 col-lg-6 text-lg-end mt-3 mt-lg-0">
            <img
              src="public/image/hero_camera.svg"
              alt=""
              class="hero-layer hero-camera img-fluid"
              width="50%"
            />
            <img
              src="public/image/hero_total_prize.svg"
              alt=""
              class="hero-layer hero-total-prize"
              width="50%"
            />
            <img
              src="public/image/hero_gratis.svg"
              alt=""
              class="hero-layer hero-gratis"
              width="50%"
            />
          </div>
        </div>
      </div>

      <img src="public/image/hero_cta.svg" alt="" class="hero-layer hero-cta" />
      <img
        src="public/image/hero_footer.svg"
        alt=""
        class="hero-layer hero-footer"
      />
      <img
        src="public/image/hero_footer.svg"
        alt=""
        class="hero-layer hero-footer-flipped"
      />
    </section>

    <!-- ================================ YOUTUBE ================================ -->
    <section id="youtube-section">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-12 text-center mb-5 youtube-container">
            <p>
              Mengajak para generasi muda dan pelajar Indonesia agar terus
              semangat menggapai prestasi menjadi versi terbaik dari dirinya
            </p>
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/Sszyi_hoDb8?si=-Y9Q3r-UXXUm1f2m"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- ================================ KOMPETISI ================================ -->
    <section id="kompetisi-sec">
      <div class="container py-5">
        <div class="mb-5 mt-3">
          <!-- Heading pill -->
          <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
              <!-- Use <a> if it should navigate -->
              <button
                type="button"
                class="btn pill-btn d-inline-flex align-items-center gap-2"
              >
                <img
                  src="public/image/kompetisi_icon_1.svg"
                  alt=""
                  class="pill-icon"
                />
                <span>Kompetisi Bakat &amp; Seni</span>
              </button>
            </div>
          </div>

          <!-- Three program blocks -->
          <div class="row gy-5 text-center">
            <!-- Card 1 -->
            <div class="col-12 col-md-4">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/25/imb-season-12-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_1.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-4">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/28/lomba-poster-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_2.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-4">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/28/lomba-film-pendek-sma-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_3.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>
          </div>
        </div>

        <div class="mb-3 mt-3">
          <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
              <button
                type="button"
                class="btn pill-btn d-inline-flex align-items-center gap-2"
              >
                <img
                  src="public/image/kompetisi_icon_2.svg"
                  alt=""
                  class="pill-icon"
                />
                <span>Kompetisi Akademik</span>
              </button>
            </div>
          </div>

          <!-- Three program blocks -->
          <div class="row gy-5 text-center">
            <!-- Card 1 -->
            <div class="col-12 col-md-3">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/26/lomba-karya-tulis-ilmiah-lkti-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_akademik_1.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-3">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/25/sains-competition-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_akademik_2.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-3">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/26/lomba-esai-pelajar-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_akademik_3.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-md-3">
              <a
                href="https://blog.iik.ac.id/eventbhakta/2025/09/26/lomba-cerpen-2025/"
                target="_blank"
              >
                <img
                  src="public/image/kompetisi_akademik_4.svg"
                  alt=""
                  class="img-fluid mb-3"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================================ PUNCAK ================================ -->
    <section id="puncak-sec">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-10 mb-4 mb-lg-0 text-center puncak-logo">
            <img
              src="public/image/puncak_dies_natalis.svg"
              alt="PUNCAK DIES NATALIS banner"
              class="img-fluid d-inline-block mb-3"
            />
          </div>

          <div
            class="col-lg-2 text-center puncak-list text-lg-end puncak-gratis"
          >
            <div>
              <img
                src="public/image/puncak_gratis.svg"
                alt=""
                width="160"
                class="img-fluid d-inline-block"
              />
            </div>
          </div>
        </div>

        <div class="row mt-5 text-center">
          <div class="col-12 col-lg-3 mb-4 puncak-list">
            <img
              src="public/image/puncak_card_1.svg"
              alt="Program 1"
              class="img-fluid mb-3"
            />
          </div>

          <div class="col-12 col-lg-3 mb-4 puncak-list">
            <img
              src="public/image/puncak_card_2.svg"
              alt="Program 2"
              class="img-fluid mb-3"
            />
          </div>

          <div class="col-12 col-lg-3 mb-4 puncak-list">
            <img
              src="public/image/puncak_card_3.svg"
              alt="Program 3"
              class="img-fluid mb-3"
            />
          </div>

          <div class="col-12 col-lg-3 mb-4 puncak-list">
            <img
              src="public/image/puncak_card_4.svg"
              alt="Program 4"
              class="img-fluid mb-3"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ================================ SPONSOR ================================ -->
    <section id="sponsor-sec">
      <div class="container">
        <div class="row flex-column-reverse flex-md-row">
          <div class="col-md-4 mb-3">
            <p style="text-align: left; padding-left: 5%">
              <strong>Previous Sponsor</strong>
            </p>
            <img
              src="public/sponsor/prev_sponsor.png"
              alt="Previous Sponsor"
              class="img-fluid w-100 prev-sponsor"
            />
          </div>
          <div class="col-md-5 mb-3">
            <p style="text-align: left; padding-left: 5%">
              <strong>Previous Tenant</strong>
            </p>
            <div class="tenant-list pb-5">
              <ul class="list-unstyled row row-cols-2 row-cols-md-3 g-2">
                <li class="col">Percetakan Mustika</li>
                <li class="col">Ichiban Crepes</li>
                <li class="col">Bakso Pak As</li>
                <li class="col">Kantin Mykail Jus</li>
                <li class="col">Orenji</li>
                <li class="col">Pemadam Kelaparan</li>
                <li class="col">Manggala Food</li>
                <li class="col">Kantin Dapur Khanza</li>
                <li class="col">De Poci</li>
                <li class="col">Tongji</li>
                <li class="col">Ungkepin</li>

                <li class="col">Dell Food</li>
                <li class="col">Korean Food dan Milo</li>
                <li class="col">Angkringan Mbah Semar</li>
                <li class="col">Kantin Moma</li>
                <li class="col">Republik Dendy Cafe</li>
                <li class="col">Sano Sano</li>
                <li class="col">Kantin Bu Yatik</li>
                <li class="col">Alice Ay</li>
                <li class="col">Kantin Dragon</li>
                <li class="col">Kantin Ijo Mama</li>
                <li class="col">Kantin Elrasya</li>

                <li class="col">Kantin Frescourd</li>
                <li class="col">Kuliner Korean Street Food</li>
                <li class="col">Kantin Yosika</li>
                <li class="col">Ayam Geprek Sai</li>
                <li class="col">Pota Mine</li>
                <li class="col">Little Sweet Project</li>
                <li class="col">Kriak Kriuk</li>
                <li class="col">Kantin Raffi</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div
              style="
                display: flex;
                justify-content: center;
                align-items: center;
              "
            >
              <img
                src="public/sponsor/daftar_jadi_sponsor.svg"
                class="img-fluid daf-sponsor"
                alt="Daftar Jadi Sponsor"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================================ FOOTER ================================ -->
    <footer>
      <div
        class="container fw-semibold py-4 text-center"
        style="color: #231779"
      >
        <div class="row align-items-center">
          <div class="col-md-4 mb-3">
            <img
              src="public/image/hero_info.svg"
              class="img-fluid img-bf-footer"
              alt="Dies Natalis 2025"
              style="width: 50%; transform: translateX(50%)"
            />
          </div>
          <div class="col-md-4 mb-3">
            <p style="color: #fff">
              Event yang sarat akan kompetisi positif. Merupakan wadah bagi
              generasi muda dalam menyalurkan bakat akademik dan seni.
            </p>
          </div>
          <div class="col-md-4 mb-3">
            <a
              href="https://www.iik.ac.id/diesnatalis2025"
              target="_blank"
              style="color: #fff"
            >
              <span class="d-inline-flex align-items-center">
                <img
                  src="public/image/world-wide-web.svg"
                  alt="world-wide-web"
                  width="20"
                  height="20"
                  class="me-2"
                />
                www.iik.ac.id/diesnatalis2025
              </span>
            </a>

            <a
              href="https://www.iik.ac.id/diesnatalis2025"
              target="_blank"
              style="color: #fff"
            >
              <span class="d-inline-flex align-items-center">
                <img
                  src="public/image/telephone.svg"
                  alt="telephone"
                  width="20"
                  height="20"
                  class="me-2"
                />
                0851 5068 6421 | 0857 1717 1735
              </span>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p style="color: #fff">diesnatalis © 2025</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- ================================ SCRIPTS ================================ -->
    <script></script>
  </body>
</html>
