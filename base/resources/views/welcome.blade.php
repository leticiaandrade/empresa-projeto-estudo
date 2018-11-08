@extends('layouts.app')

@section('title', 'Home')

@section('content')


 <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" >
            <img src="img/slider/1.png">
            <div class="carousel-caption d-none d-md-block">
              <h3>A melhor no ramo dos equipamentos.</h3>
              <p>Escolha uma empresa responsável que atua há mais de 40 anos no mercado. Qualidade garantida.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
             <img src="img/slider/2.png">
            <div class="carousel-caption d-none d-md-block">

               <h3>A melhor no ramo dos equipamentos.</h3>
              <p>Escolha uma empresa responsável que atua há mais de 40 anos no mercado. Qualidade garantida.</p>
              
            </div>
          </div>
         <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
             <img src="img/slider/5.png">
            <div class="carousel-caption d-none d-md-block">
               <h3>A melhor no ramo dos equipamentos empresariais.</h3>
              <p>Escolha uma empresa responsável que atua há mais de 40 anos no mercado. Qualidade garantida.</p>
             
            </div>
          </div>
        </div>
        
      </div>
    </header>



<div class="newsletter">
        <div class="newsletter-content">
            
            <div class="title">
                <p>Receba as novidades antecipadamente! Digite seu e-mail.</p>
            </div>
            <div class="form">
                <form method="post" onsubmit="return false;">
                    <div class="label">
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="label-send">
                      <span style="color:#fff; margin:0 auto;" class="ion-navigate">
                        <a href="javascript:void(0);" type="submit"></a></span>
                </form>
            </div>
        
        </div>
    
  </div>







@stop