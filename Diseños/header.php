  <header>
  <nav class="navbar">
    <a href="index.php"><img src="img/logoibcorp.png"></a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="" class="nav-link">Planes</a>
        </li>
        <li class="nav-item1">
          <a href="sobrenosotros.php" class="nav-link">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a href="#formulario" class="nav-link">Contacto</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
    <script>
        const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}))
        </script>

  </header>
