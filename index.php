<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Conversor de Temperatura</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      align-items: center;
      gap: 50px;
    }

    .bloco {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    .input-temperatura {
      width: 200px;
      height: 50px;
      background-color: #d3d3d3;
      border: none;
      border-radius: 4px;
    }

    .botoes {
      display: flex;
      gap: 15px;
    }

    .botao {
      width: 50px;
      height: 50px;
      background-color: #d3d3d3;
      border: none;
      border-radius: 4px;
    }

    .seta {
      font-size: 24px;
    }
  </style>
</head>



<body>

  <!-- Parte PHP -->
   <?php 
    $celsius;
    $fahreinhent;
    $kelvin;

    //função celsius -> fahrenheit
   function conversor1 ($celsius){
    $temperatura;
    return ($temperatura * 9/5) + 32;
   }

    //função celsius -> Kelvin
    function conversor 2 ($celsius){
      $temperatura;
      return $temperatura + 273.15;
    }

    //fahrenheit -> kelvin = converte para celsius e depois para kelvin. (o contrário se aplica)


    // Função de verificar (ao clicar em qualquer um dos botões da esquerda ) 
      //primeiro teste: se o campo input da esquerda está vazio ou não.
      // Ler qual é o tipo de temperatura informada:
        // if botão 1-esquerda estiver ativo: valor que está dentro do input da esquerda é em celsius
        // if botão 2-esquerda estiver ativo: valor que está dentro do input da esquerda é em fahrenheit
        // if botão 3-esquerda estiver ativo: valor que está dentro do input da esquerda é em kelvin
      // reliza a função de conversão (uma função que recebe qual o tipo de conversão  e qual a temperatura)

   ?>
  

  <!-- Funções -->  



  <div class="container">
    <!-- Bloco da Esquerda -->
    <div class="bloco">
      <input type="text" class="input-temperatura" placeholder="Temperatura">
      <div class="botoes">
        <button class="botao" id="1-esquerda">Celsius</button>
        <button class="botao" id="2-esquerda">Fahrenheit</button>
        <button class="botao" id="3-esquerda">Kelvin</button>
      </div>
    </div>

    <!-- Seta -->
    <div class="seta">→</div>

    <!-- Bloco da Direita (estilo idêntico, sem funcionalidade) -->
    <div class="bloco">
      <input type="text" class="input-temperatura" disabled>
      <div class="botoes">
        <button class="botao"></button>
        <button class="botao"></button>
        <button class="botao"></button>
      </div>
    </div>
  </div>
</body>
</html>
