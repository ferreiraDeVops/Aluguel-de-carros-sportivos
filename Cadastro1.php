<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLog.css" />
    <title>Cadastro</title>
</head>
<body>
    <header>
            <div class="content">
              <nav>
              <p class="brand"><a id="a"href="index.php">You<strong>RENT</strong></a></p>
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="Cadastro1.php">Catalogo</a></li>
                  <li><a href="https://instagram.com/yourent_luxury?igshid=YmMyMTA2M2Y=">Instagram</a></li>
                  <li><a href="https://mobile.twitter.com/YouRent_Luxury">Twitter</a></li>
                  <li><a href="https://chat.whatsapp.com/CBd87D7bkkZ34bIxbA5eXR">WhatsApp</a></li>           
                  <a href="index.php"><button>Login</button></a>
                  <a href="cadastro_feito.php"><button>Alugue Seu Carro</button></a>
                </ul>
              </nav>
            </div>
    </header>
    <div class="container">
      <div class="form-box">
          <form action='cadastro_feito.php'method='get'>
            <div>
                <h1>Cadastro do Usuário</h1>
                    <input required type='text' name='nome' placeholder='Informe seu nome' class='form-input'>
                    <input required type='password' name='senha' placeholder='Informe a sua Senha' class='form-input'>
                    <input required type='email' name='email' placeholder='Informe o seu E-mail' class='form-input'>
                    <input required type='submit' value='Cadastrar' class='form-btn'></a>
            </div>
          </form>
          <div>
            Você já tem uma conta? <a href="Login.php">Efetue o seu Login</a>
        </div>
      </div>
  </div>
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
</script>