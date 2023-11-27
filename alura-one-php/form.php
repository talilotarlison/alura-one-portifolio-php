 <!--Formulario--->

    <section class="section_contato" id="formulario">
      <img
        src="https://github.com/alura-challenges/challenge-one-portfolio-br/blob/master/assets/contact_image.png?raw=true>">
      <div class="section_contato_two">
        <h1>Contato</h1>
        <p>Quer entar em contato comigo?</p>
        <p>Prencha o fomulario ao lado e entrarei em contato o mais rapido possivel.</p>

        <div class="contato">

          <form id="form" action="https://www.google.com/">
            <div>
              <label for="name" class="name">Nome:</label>
              <input id="name" type="text"></input>
            </div>
            <div>
              <label for="email" class="email">E-mail:</label>
              <input id="email" type="text"></input>
            </div>
            <div>
              <label for="assunto" class="assunto">Assunto:</label>
              <input id="assunto" type="text"></input>
            </div>
            <div>
              <label for="msn" class="msn">Mensagem:</label>
              <textarea rows="5" id="msn" type="text" fixed></textarea>
            </div>
            <!--https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/datalist-->
            <button class="botao" type="submit" value="Enviar"> Enviar mensagem </button>
          </form>
        </div>
      </div>
    </section>
  </main>