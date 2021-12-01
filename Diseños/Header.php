  <header>
    <div class="container-header-all">
                  <div class="menu-header">
                    <a href="index.php"><img src="img/logoibcorp.png"></a>
                    <a href="index.php"><label>Planes</label></a>
                    <a href="index.php"><label>Sobre nosotros</label></a>
                    <a href="#formulario"><label>Contacto</label></a>
                  </div>
                  <div id="hamburger">
                    <button>
                      <span class="top-line"></span>
                      <span class="middle-line"></span>
                      <span class="bottom-line"></span>
                    </button>
                  </div>

                </div>

                <script>
                const nav=document.querySelector('#hamburger button');
                nav.addEventListener('click', e => {
                  nav.classList.toggle('open');
                })
                </script>
                <script>
                  const  hamburger=document.querySelector('.hamburger');
                  const navMenu=document.querySelector('.nav-menu');

                  hamburger.addEventListener('click',() => {
                    hamburger.classList.toogle('active');
                    navMenu.classList.toggle('active');
                  })

                  document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                  }))
                  </script>

  </header>
