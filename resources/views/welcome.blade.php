@extends('layouts.app')

@section('content')

<!-- Recepção -->
  <div id="index-banner container">
    <div class="section">
      <div class="container">
        <div class="row center">
          <h3>A sua plataforma de controle e gestão de patrimônios.</h3>
          <img class="responsive-img" src="https://c.pxhere.com/photos/a0/12/alone_businessman_charts_close_up_contemporary_data_desk_device-1573011.jpg!d">
          <p>Nós temos como finalidade melhorar a comunicação entre o profissional e o usuário, utilizando o sistema de chamados.</p>
          <a href="cadastro_usuario.php" class=" green accent-4 btn-large waves-effect waves-light teal lighten-1">Iniciar sessão</a>
        </div>
      </div>
    </div>
  </div>

  
    <div id="index-banner container">
      <h3 class="header center text-lighten-1">Vantagens de utilização do sistema</h3>
    </div>


	<!-- Descrição dos serviços -->
  <div class="index-banner container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
      	<!-- Construção do grid 1 -->
        <div class="col s12 m4 z-depth-1">
          <div class="icon-block">
          	<!-- Icone -->
            <h2 class="center green-text text-accent-4"><i class="medium material-icons">assessment</i></h2>
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
            <h2 class="center green-text text-accent-4"><i class=" medium material-icons">dns</i></h2>
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
            <h2 class="center green-text text-accent-4"><i class="medium material-icons ">access_time</i></h2>
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
        <h1 class="header center green-text text-accent-4">Contate nosso serviços</h1><p>
          <div class="row center">
          <h5 class="header col s12 light">Viu a necessidade de controle de patrimônio? Você deseja utilizar nossas ferramentas?</h5><p><h6>Entre em contato com um dos nossos gerentes para saber como utilziar nosso sistema em sua empresa.</h6>
        </div>
        <div class="row center">
          <a href="contato_adm" id="download-button" class="btn-large waves-effect waves-light  green accent-4 lighten-1">Entrar em contato</a>
        </div>
      </div>
    </div>
  </div>


@endsection