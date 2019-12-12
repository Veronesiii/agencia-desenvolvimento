<?php 
  include_once('head.php');
?>
<section id="banner">
  <h2>Compre nossos produtos! =)</h2>
</section>
<section id="servico" class="container mt-5">
  <div class="row">
    <?php echo listarServicos(); ?>
  </div>

</section>

<section id="sobre" class="container mt-5 mb-5">
  <div class="row">
    <div class="col-6">
      <img src="images/sobre-nos.svg" class="img-fluid" />
    </div>
    <div class="col-6 d-flex justify-content-center flex-column">
      <h1>Sobre nós</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque velit a, debitis veniam reprehenderit aut
        blanditiis architecto soluta sit. Recusandae hic molestias deleniti natus tempora sunt ut, ex suscipit nesciunt.
      </p>
    </div>
  </div>
</section>

<section id="contato">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-5 mt-5">
        <h2>Entre em contato</h2>

        <form>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary">enviar</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 pt-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0513669381103!2d-46.67744548554195!3d-23.602490668996374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1569681999561!5m2!1spt-BR!2sbr"
          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</section>

<?php
  include_once('footer.php');
  ?>