<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Cadastre-se</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Cadastre-se</a></li>
        <li class="tab"><a href="#login">Entre</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Cadastro</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Sobrenome<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
              <label>
                Telefone
              </label>
              <input type="text"required autocomplete="off"/>
            </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Endereço<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Complemento
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

            <div class="field-wrap">
              <label>
                Número do cartão de crédito<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
         

         
           <div class="imagemCartao">
                <h3>Tipo de cartão</h3>
            
             <img src="img/cred_bebito_card.png" style="width: 300px;">
</div>
<br>
<br>
          <button type="submit" class="button button-block"/>Finalizar </button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bem vindo de volta!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Esqueceu a senha?</a></p>
          
          <button class="button button-block"/>Entrar</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>


</body>

</html>
