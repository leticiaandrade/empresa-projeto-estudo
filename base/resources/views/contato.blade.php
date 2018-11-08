@extends('layouts.app')

@section('title', 'Contato')

@section('content')



 <div class="contato">
   
   	<h2> Entre em contato conosco:</h2>

   <!-- MAPA -->
   
   <div class="containercontato">
	

		<div class="col-sm-12 col-md-12 col-lg-6">
			
			<div class="pgContato">
   <div class="contato">
      <div class="formContato">
         <form id="formContato" method="post" onsubmit="return false;" novalidate="novalidate">
            <input id="nome" name="nome" required="" type="text" placeholder="Nome" /> 
            <input id="email" name="email" required="" type="email" placeholder="Email" /> 
            <input id="tel" name="tel" type="tel" placeholder="Telefone" /> 
            <textarea id="conteudo" name="conteudo" required="" placeholder="Deixe uma mensagem"></textarea>
            <button class="botaoContato" type="submit">Enviar</button>
         </form>
      </div>
   </div>
</div>
			
		</div>
		
		
		<div class="col-sm-12 col-md-12 col-lg-6">
			
			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.0623853435013!2d-38.97787523673665!3d-12.24405522743186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71437f9d2c56d8b%3A0x5ba82cf5355121cb!2sR.+Barra%2C+410+-+Jardim+Cruzeiro%2C+Feira+de+Santana+-+BA%2C+44024-246!5e0!3m2!1spt-BR!2sbr!4v1526759254223" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	
   
   </div>
   
   
   
</div>

@stop