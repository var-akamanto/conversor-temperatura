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

    /*       

      ///Lógica do programa:

      //funcionamento básico: O usuário coloca um valor no campo da esquerda, clica em uma dos tipos de temperatura na esquerda, o programa entao guarda esse tipo e valor,
      //passa para o lado direito e espera o usuário clicar para qual tipo de temperatura ele quer converter (obs: na parte direita, o botão que represneta a temperatura informada do lado direito estará bloqueado (obviamente para evitar de converter de celsius para celsius por exemplo))
      
      // Função de verificar (ao clicar em qualquer um dos botões da direita ou em um botão do meio(botão reserva para caso buge o resto) (só vai dar para clicar nos botões da direita após selecionar algum botão da esquerda ou apertar no botão seta do meio) 
        // Ler qual é o tipo de temperatura informada:
          // if botão 1-esquerda estiver ativo: valor que está dentro do input da esquerda é em celsius
          // if botão 2-esquerda estiver ativo: valor que está dentro do input da esquerda é em fahrenheit
          // if botão 3-esquerda estiver ativo: valor que está dentro do input da esquerda é em kelvin
        //primeiro teste: se o campo da esquerda está retornando os dois dados corretamente (valor e tipo da temperatura)
        // ler para qual tipo de temperatura será convertida.
          // if botão 1-direita estiver ativo: Tipo de temperatura a ser convertida é em celsius
          // if botão 2-direita estiver ativo: Tipo de temperatura a ser convertida é em fahrenheit
          // if botão 3-direita estiver ativo: Tipo de temperatura a ser convertida é em kelvin
        // reliza a função de conversão (uma função que recebe temperatura contendo valor e o tipo (dado1 e dado2) e para qual tipo de temperatura a ser convertida (dado 3))
           switch ($dado3) {
               
              case "celsius":               
                realizar função de converter para celcius recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
                printa o resultado no input direita
                break;

              case "fahrenheit":
                  realizar função de converter para fahrenheit, recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
                  printa o resultado no input direita
                  break;

              case "kelvin":
                  realizar função de converter para kelvin, recebendo dado 1 e 2 nos parâmetros, retornando uma temperatura para ser exibida no campo input da direita
                  printa o resultado no input direita
                  break;

            }
        // Segundo teste: Se a conversão foi realizada corretamente
        // se o usuário  clicar no botão de reiniciar no meio, volta para o início
        // terceiro teste: Se as variáveis foram todas resetadas e esta tudo pronto para uma nova conversão...
          

    */

  
  ?>


  <div class="container">
    //Bloco da esquerda 
    <div class="bloco">
      <input type="text" class="input-temperatura" placeholder="Temperatura">
      <div class="botoes">
        <button class="botao" id="1-esquerda">Celsius</button>
        <button class="botao" id="2-esquerda">Fahrenheit</button>
        <button class="botao" id="3-esquerda">Kelvin</button>
      </div>
    </div>

    //bloco do meio
    <div class="seta">→</div>

    //bloco direita
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
