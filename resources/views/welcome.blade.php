@extends('layouts.app')

@section('content')

  <!-- Recepção -->
  <div id="index-banner container">
    <div class="section">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 light">A sua plataforma de controle e gestão de patrimônios.</h3>
        </div>

    <img class="responsive-img" src="https://c.pxhere.com/photos/a0/12/alone_businessman_charts_close_up_contemporary_data_desk_device-1573011.jpg!d">
        <div class="row center">
          <h6>Nós temos como finalidade melhorar a comunicação entre o profissional e o usuário, utilizando o sistema de chamados.</h6>
          <a href="cadastro_usuario.php" class="green btn-large waves-effect waves-light teal lighten-1">Iniciar sessão</a>
        </div>
      </div>
    </div>
  </div>
 
  
    <div id="index-banner container">
      <h3 class="header center teal-text text-lighten-1">Vantagens de utilização do sistema</h3>
    </div>
    <br><br>  
	<!-- Descrição dos serviços -->
	 <div class="index-banner container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
      	<!-- Construção do grid 1 -->
        <div class="col s12 m4 z-depth-1">
          <div class="icon-block">
          	<!-- Icone -->
            <h2 class="center blue-text"><i class="medium material-icons">assessment</i></h2>
            <!-- Titulo do tópico 1 grid -->
            <h5 class="center">Praticidade em registrar seu patrimônio.</h5>
            <!-- Descrição do tópico 1 -->
            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
        <!-- Construção grid 2 -->
        <div class="col s12 m4">
          <div class="icon-block">
          	<!-- Icone -->
            <h2 class="center blue-text"><i class=" medium material-icons">dns</i></h2>
            <!-- Título do tópico 2 grid -->
            <h5 class="center">Facilidade de utilização</h5>
            <!-- Descrição do tópico 2 -->
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>

        <!-- Construção grid 3 -->
        <div class="col s12 m4 z-depth-1">
          <div class="icon-block">
            <!-- Icone -->
            <h2 class="center blue-text"><i class="medium material-icons ">access_time</i></h2>
            <!-- Título do tópico 3 Grid -->
            <h5 class="center">Otimização de tempo</h5>
            <!-- Descrição do tópico 3 -->
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contate nos -->
   <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br>
        <hr>
        <h1 class="header center teal-text text-lighten-1">Contate nosso serviços</h1><p>
          <div class="row center">
          <h5 class="header col s12 light">Viu a necessidade de controle de patrimônio? Você deseja utilizar nossas ferramentas?</h5><p><h6>Entre em contato com um dos nossos gerentes para saber como utilziar nosso sistema em sua empresa.</h6>
        </div>
        <div class="row center">
          <a href="contato_adm" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Entrar em contato</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé -->
<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Grupo Comuniq</h5>
          <p class="grey-text text-lighten-4">Nós do corpo de estudantes do terceiro periodo de informática para internet, trabalhamos neste projeto como uma das nossas missões como desenvolvedores na disciplina de projeto e prática. Qualquer ajuda ou suporte serão aceitas para a melhoria e continuação do desenvolvimento deste projeto.<p> Obrigado.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Opções</h5>
          <ul>
            <li><a class="white-text" href="#!">Ajuda</a></li>
            <li><a class="white-text" href="#!">Dúvidas frequentes</a></li>
            <li><a class="white-text" href="#!">Reportar algum erro</a></li>
            <li><a class="white-text" href="#!">Sobre</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes Sociais</h5>
          <ul>
            <li><a class="white-text lighten-1" href="#!">Instagram</a></li>
            <li><a class="white-text lighten-1" href="#!">Linked In</a></li>
            <li><a class="white-text lighten-1" href="https://github.com/lipeh777/comuniq">GitHub</a></li>
            <li><a class="white-text lighten-1" href="#!">Twitter</a></i>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright black">
      <div class="container center">
      Desenvolvido por: <a href="sobre.php" class="white-text text-lighten-1"> IFPE - CAMPUS IGARASSU</a>
      </div>
    </div>
  </footer>

	<!-- Adição do Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
@endsection