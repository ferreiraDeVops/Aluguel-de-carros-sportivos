<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLog.css" />
    <title>Login</title>
</head>
<body>
    <header>
            <div class="content">
              <nav>
              <p class="brand"><a id="a"href="index.php">You<strong>RENT</strong></a></p>
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="Catalago2.php">Catalogo</a></li>
                  <li><a href="https://instagram.com/yourent_luxury?igshid=YmMyMTA2M2Y=">Instagram</a></li>
                  <li><a href="https://mobile.twitter.com/YouRent_Luxury">Twitter</a></li>
                  <li><a href="https://chat.whatsapp.com/CBd87D7bkkZ34bIxbA5eXR">WhatsApp</a></li>           
                  
                  <a href="formulario_carro.php"><button>Alugue Seu Carro</button></a>
                </ul>
              </nav>
            </div>
    </header>
    <section>
      <div class="container">
        <div class="form-box" required>
            <form action="formulario_carro2.php" method="get">
                <div>
                    <h1>Seja nosso parceiro loque seu veiculo</h1>
                </div>
                <div>
                    <input type="text" name="marca" placeholder="Marca" class="form-input"required>
                </div>
                <div>
                    <input type="text" name="modelo" placeholder="Modelo" class="form-input"required>
                </div>
                <div>
                    <input type="number" name="ano" placeholder="Ano" class="form-input"required>
                </div>
                <div>
                    <input type="number" name="fip" placeholder="Valor da FIP do veiculo" class="form-input">
                </div>
                <div >
                    <div id="foto">
                    <h2 >Nos envie uma foto do seu veiculo</h2>
                    <input type="file" name="foto">
                    </div>
                </div>
                <div id="cat">
                    <h1>Qual a melhor categoria definiria melhor seu veiculo</h1>
                <div id="tipo">
                    <input type="radio" name="tipo" id="esportivo" value="Esportivo"checked>
                    <label for="esportivo"><strong>Esportivo</strong></label>
                    <input type="radio" name="tipo" id="super" value="Super Esportivo">
                    <label for="super"><strong>Super Esportivo</strong></label>
                    <input type="radio" name="tipo" id="luxo" value="Luxo">
                    <label for="luxo"><strong>Luxo</strong></label>
                    <input type="radio" name="tipo" id="super luxo" value="Super luxo">
                    <label for="super luxo"><strong>Super luxo</strong></label>
                    <input type="radio" name="tipo" value="Popular" id="Popular">
                    <label for="Popular"><strong>Popular</strong></label>
                </div>
                <div id="enter">
                <a class="entrar" href="formulario_carro.php"><input type="submit"placeholder="analisar"value="Enviar para Análise"  class="form-btn"></a>
                </div>
            </form>
        </div>
    </div>
    </section>
    <footer>
      <div class="main">
        <div class="content footer-links">
          <div class="footer-company">
            <h4>Company</h4>
            <h6>About</h6>
            <h6>Contact</h6>
          </div>
          <div class="footer-rental">
            <h4>Rental</h4>
            <h6>Self-Drive</h6>
            <h6>Chauffer-Driven</h6>
            <h6>Help</h6>
          </div>
          <div class="footer-social">
            <h4>Stay connected</h4>
            <div class="social-icons">
              <img src="images/instagram.png" alt="Instagram" />
              <img src="images/facebook.png" alt="Facebook" />
            </div>
          </div>
          <div class="footer-contact">
            <h4>Contact US</h4>
            <h6>+55 61 988776655</h6>
            <h6>Yourent@gmail.com.br</h6>
            <h6>Asa Norte, Brasilia DF</h6>
          </div>
        </div>
      </div>
      <div class="last">Akatsuki 2022 - ADS 2º Semestre</div>
    </footer>
</body>
<script>
    var a = window.document.getElementById("a")
    a.style.textDecoration = "none"
    var form = window.document.querySelector("div.form-box")
    form.style.height = "900px"
    form.style.position = "relative"
    var tipo = window.document.querySelector("div#tipo")
    tipo.style.fontSize = "18pt"
    tipo.style.fontFamily = "lato"
    var enter = window.document.getElementById("enter")
    enter.style.color = "red"
    enter.style.position ="relative"
    enter.style.top = "30px";
    var cat = window.document.querySelector("div#cat")
    cat.style.background = "#eee"
    cat.style.height="90px"
    var foto = window.document.querySelector("div#foto")
    foto.style.position = "relative"
    foto.style.background = "#eee"
    foto.style.width = "760px"
    
</script>
</html>