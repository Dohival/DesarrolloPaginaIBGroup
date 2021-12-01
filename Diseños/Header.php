  <header>
    <div class="container-header-all">
                  <div class="menu-header">
                    <div class="logo-header"><a href="index.php"><img src="img/logoibcorp.png"></a></div>
                    <div class="label-header">
                    <a href="index.php"><label>Planes</label></a>
                    <a href="index.php"><label>Sobre nosotros</label></a>
                    <a href="#formulario"><label>Contacto</label></a>
                    </div>
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
                nav.addEventListener('click', e=>{ 
                  nav.classList.toggle('open');
                })
                </script>
  </header>
  