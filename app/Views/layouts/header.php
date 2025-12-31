<header class="navbar">
  <div class="nav-left">
    <a href="<?= BASE_URL ?>/" class="logo">
      <img
        src="<?= BASE_URL ?>/assets/img/sahp.png"
        alt="SAHP – Assainissement et Plomberie"
      />
    </a>
  </div>

  <!-- BURGER -->
  <button class="burger" aria-label="Ouvrir le menu">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <!-- MENU -->
  <div class="nav-menu">
    <nav>
      <a href="<?= BASE_URL ?>/">Accueil</a>
      <a href="<?= BASE_URL ?>/a-propos">Qui sommes-nous</a>

      <div class="nav-dropdown">
        <span class="dropdown-toggle">
          Nos interventions
          <span class="chevron">▾</span>
        </span>

        <div class="dropdown-menu">
          <a href="<?= BASE_URL ?>/debouchage">Débouchage</a>
          <a href="<?= BASE_URL ?>/curage">Curage</a>
          <a href="<?= BASE_URL ?>/pompage">Pompage</a>
          <a href="<?= BASE_URL ?>/inspection">Inspection vidéo</a>
        </div>
      </div>

      <a href="<?= BASE_URL ?>/paroles-de-pro">Parole de Pros</a>
      <a href="<?= BASE_URL ?>/contact">Contact</a>
    </nav>

    <div class="actions">
      <a href="https://wa.me/33612345678" class="btn-rounded btn-urgent">
        <img src="<?= BASE_URL ?>/assets/img/brand/whatsapp.png" alt="">
        Urgence 24/7
      </a>
    </div>
  </div>
</header>
