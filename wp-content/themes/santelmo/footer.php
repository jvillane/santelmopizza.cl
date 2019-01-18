	<footer class="footer">		
		<section class="footer__info">
			<figure class="footer__logo">
				<a href="https://goo.gl/maps/vj3r4JWJuH42" target="_blank"><img class="footer__logo-image" src="<?php bloginfo('template_url'); ?>/images/local_nunoa.png" /></a>
			</figure>
			<div class="footer__col footer__ubication">
				<h2 class="footer__title">Ubicación</h2>				
				<p class="footer__map"><a href="https://goo.gl/maps/a9awyyANVRw" target="_blank">Simón Bolivar 2644, Ñuñoa</a></p>
				<p class="footer__map"><a href="https://www.google.com/maps/d/viewer?mid=zvweHa3UyW6Q.kVBL5_Shgbhc"  target="_blank">Zona de reparto</a></p>
				<p class="footer__ubications">(Pedido mínimo $10.000)</p>
				<p  class="footer__ubications">*Fuera del perímetro se cobrará recargo según sector ($1.000 a $2.000)</p>									
			</div>
			<div class="footer__col">
				<h2 class="footer__title">Hoy 
					
					<script type="text/javascript">
						var d = new Date()
						theDay=d.getDay()
						switch (theDay){
						case 1:
						document.write("lunes")
						break
						case 2:
						document.write("martes")
						break
						case 3:
						document.write("miércoles")
						break
						case 4:
						document.write("jueves")
						break
						case 5:
						document.write("viernes")
						break
						case 6:
						document.write("sábado")
						break
						default:
						document.write("domingo (cerrado)")
						}
				</script>
					
				</h2>
				<p class="footer__promo-tit">Al realizar tu pedido y <b>retirarlo en local</b> aprovecha:</p>
				
				
				
				
				
				<!--<p>Lunes: Bebida de 1 litro y medio gratis</p>
				<p>Martes: Bebida de 1 litro y medio gratis</p>-->
				<p class="footer__promo">
				<script type="text/javascript">
						var d = new Date()
						theDay=d.getDay()
						switch (theDay){
						case 5:
						document.write("2 celestinos gratis")
						break
						case 6:
						document.write("5% descuento en el pedido")
						break
						case 4:
						document.write("Pan de ajo gratis")
						break
						case 3:
						document.write("2 celestinos gratis")
						break
						case 0:
						document.write("Día domingo cerrado")
						break
						default:
						document.write("Bebida de 1 litro y medio gratis")
						}
				</script>						
				</p>
				<p class="footer__promo-foot">(Sólo válido pago en efectivo y con un consumo mínimo de $10.000)</p>
			</div>
			<div class="footer__col">
				<h2 class="footer__title">Redes sociales</h2>
				
				
					<a class="footer__rs-zomato" href="https://www.zomato.com/es/santiago/santelmo-%C3%B1u%C3%B1oa" target="_blank"></a>
					<a class="footer__rs-facebook" href="https://www.facebook.com/SantelmoPizzasSimonBolivar" target="_blank"></a>	
					<div class="footer__face fb-like" data-href="https://www.facebook.com/SantelmoPizzasSimonBolivar" data-width="55" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
									<ul class="footer__reviews">
						<li class="footer__review"><a href="https://www.zomato.com/es/review/myZrKq" target="_blank">Local pequeñito, de pocas mesas y con un enorme corazón. En una tarde de lluvia, se agradece refugiarse en este rincón y almorzar rico... <em>Cristian Maldonado Cerda</em></a></li>
					<!-- <li><a href="https://www.zomato.com/es/review/NGNZmB">"...La lasagna con ricotta increíble, las pizzas de verdad las recomiendo: masa delgada y crujiente sin ser dura, se puede inclusive pedir la mitad de un tipo y la otra con otros ingredientes. El precio también está muy bien..." <em>Psximevas</em></a></li>
						<li><a href="https://www.zomato.com/es/review/GXwMwQ">"Aqui es la comida la protagonista, ni la onda ni las luces raras ni la decoración ondera, más bien aqui es la simplicidad de sentirte en el comedor de tu casa y disfrutar de una buena comida hecha con cariño, abundante y deliciosa..." <em>Ivonne M.</em></a>
						</li> -->
					</ul>
								
			</div>
		</section>
		<section class="footer__foot"><span>Lunes a Sábados de 13:00 a 23:30 hrs</span><span> Formas de pago: Efectivo / Transferencia Electrónica / Red compra</span></section>
	</footer>
</section>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=151270084962533";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>