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
        <div class="form-box">
            
            <div id="resp">
            <?php
            $tipo = isset($_GET["tipo"])?$_GET["tipo"]:"";
            $fip = isset($_GET["fip"])?$_GET["fip"]:"";
            if($tipo == "Popular"){
              echo "Infelizmente a categoria $tipo do seu veículo não segue nosso padrão para aluguel :("; 
            }else{
              if($fip < 100000.00){
                echo"O valor da sua FIP de ".number_format($fip,2)." não segue o padrão ofertado aos nossos clientes,<br>caso queira enviar seu veículo para uma segunda análise entre em contato conosco pelo WhatsApp"; 
              }else{
                echo "Parabéns! seu veículo $tipo segue os pré-requisitos do nosso padrão de aluguel com o valor ".number_format($fip,2)." :)<br> entraremos em contato nas próximas 24 horas para agendar uma perícia física do veículo.";
              }
            }
            ?></div>
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
</html>
<script>
    var a = window.document.getElementById("a")
    a.style.textDecoration = "none"
    var resp = window.document.querySelector("div#resp")
    resp.style.color ="#f78b00"
    resp.style.fontSize ="25pt"
    resp.style.fontFamily = "lato"
    var form = window.document.querySelector("div.form-box")
    form.style.position = "relative"
    form.style.bottom = "100px"
</script>
