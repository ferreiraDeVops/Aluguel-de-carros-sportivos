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
                  <li><a href="Login.php">Catalogo</a></li>
                  <li><a href="https://instagram.com/yourent_luxury?igshid=YmMyMTA2M2Y=">Instagram</a></li>
                  <li><a href="https://mobile.twitter.com/YouRent_Luxury">Twitter</a></li>
                  <li><a href="https://chat.whatsapp.com/CBd87D7bkkZ34bIxbA5eXR">WhatsApp</a></li>           
                  <a href="login.php"><form method="get" action="login.php"><button>Login</button></form></a>
                  <a href="formulario_carro.php"><button>Alugue Seu Carro</button></a>
                </ul>
            </nav>
            </div>
    </header>
    <section>
      <div class='container'>
        <div class='form-box'>
            <form method="get" action="ja_e_cliente.php">
                <div>
                    <h1>Login</h1>
                </div>
                <div>
                    <input required type="text" name="nome" placeholder="Nome de usuario" class="form-input">
                </div>
                <div>
                    <input required type="password" name="senha" placeholder="Informe sua Senha" class="form-input">
                </div>
                <input type='submit' value='Entrar' class='form-btn'></a>
            </form>
            <div>
            </div>
          <div>
              Não é Cadastrado? <a href='Cadastro1.php'>Crie uma Conta</a>
          </div>
        </div>
    </div>
    </section>
    <footer>
      <div class='main'>
        <div class='content footer-links'>
          <div class='footer-company'>
            <h4>Company</h4>
            <h6>About</h6>
            <h6>Contact</h6>
          </div>
          <div class='footer-rental'>
            <h4>Rental</h4>
            <h6>Self-Drive</h6>
            <h6>Chauffer-Driven</h6>
            <h6>Help</h6>
          </div>
          <div class='footer-social'>
            <h4>Stay connected</h4>
            <div class='social-icons'>
              <img src='images/instagram.png' alt='Instagram' />
              <img src='images/facebook.png' alt='Facebook' />
            </div>
          </div>
          <div class='footer-contact'>
            <h4>Contact US</h4>
            <h6>+55 61 988776655</h6>
            <h6>Yourent@gmail.com.br</h6>
            <h6>Asa Norte, Brasilia DF</h6>
          </div>
        </div>
      </div>
      <div class='last'>Akatsuki 2022 - ADS 2º Semestre</div>
    </footer>
</body>
</html>
<script>
  var a = window.document.getElementById("a")
  a.style.textDecoration = "none"
</script>