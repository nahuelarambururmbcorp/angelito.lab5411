<section class="svg-separator">
            <svg class="separator" xmlns="http://www.w3.org/2000/svg" style="background-color: #C3D6E5;" width="100%" viewBox="0.1 0.3 200 19" preserveAspectRatio="none">
                <g transform="translate(-0.21755166,-100.15454)">
                    <path style="fill:#fff;" d="M 0.2688579,100.29477 H 200.98548 c 0,0 -99.37375,39.84098 -200.7166221,0 z" />
                </g>
            </svg>
    	</section>
  
  <!-- Modal Reserva -->
        <div class="modal fade" id="modalReserva" tabindex="-1" aria-labelledby="modalReservaLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="    background: #1e1e1e;">
        <h5 class="modal-title" id="modalReservaLabel">Hacer una Reserva</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <!-- Disponibilidad -->
        <div id="disponibilidad"></div>
        <!-- Precios -->

		<select style="color: #000;border: 1px solid #000;" class="form-control" id="precios">
			<option value="">Selecciona una categoría</option>

		</select>
    <br>
    <div class="mb-3">
            <label for="email" class="form-label" style="color: #000;" >Cantidad</label>
            <input style="color: #000;border: 1px solid #000;" type="number" class="form-control" id="cant_p" value="1" required>
          </div>
        <!-- Formulario de Reserva -->
        <form id="formularioReserva">
          <div class="mb-3">
            <label for="email" class="form-label" style="color: #000;" >Email</label>
            <input style="color: #000;border: 1px solid #000;" type="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label style="color: #000;" for="fecha" class="form-label">Fecha</label>
            <input style="color: #000;border: 1px solid #000;" type="date" class="form-control" id="fecha" required>
          </div>
          <!-- Añade más campos según sea necesario -->
          <button type="submit" class="cta btn btn-primary">Enviar Reserva</button>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="Web-Footer">
			<div class="container-lg">
				<div class="row justify-content-between">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
						<div class="widget-footer widget-footer-1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<a class="cta" href="javascript:void(0)">Reservar</a>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">							
						<div class="widget-footer widget-footer-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<nav class="footer-nav">
								<ul>
									<li><a href="show/">El Show</a></li>
									<li><a href="cena-y-show/">Cena y show</a></li>
									<li><a href="informacion/">Información</a></li>
									<li><a href="shop/">Shop</a></li>
								</ul>
							</nav>
						</div>
					</div>					
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
						<div class="widget-footer widget-footer-3 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
							<p><span>Cafe de los Angelitos </span> <br>Rivadavia 2100 <br><span>Buenos Aires</span></p>
							<a href="https://www.facebook.com/share/18ejEoX1oW/?mibextid=LQQJ4d">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
									<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
								</svg>
							</a>
							<a href="https://www.instagram.com/cafedelosangelitos?igsh=MXdpNjZiNmp3bmQ2YQ==">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
									<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
								</svg>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-12 text-center">
                        <p class="mb-0">2023 &copy; Café de los Angelitos</p>
                    </div>
				</div>
			</div>
		</footer>

		<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<!-- Bootstrap V5.1.3 js -->
		<script defer src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- Tiny Slider js -->
		<script defer src="{{ asset('assets/js/tiny-slider.js') }}"></script>
		<script defer src="{{ asset('assets/js/tiny.init.js') }}"></script>	
	    <!-- Script js -->
		<script defer src="{{ asset('assets/js/wow.min.js') }}"></script>
		<script defer src="{{ asset('assets/js/main.js') }}"></script>	

		<script>
document.addEventListener("DOMContentLoaded", function() {


  // Evento para abrir el modal y cargar datos
  function reservarEvent(){
    // Obtener disponibilidad
    fetch('https://lab5411.rojotango.com/api/rojo/online/2024-03-09/2024-03-31')
      .then(response => response)
      .then(data => {
        document.getElementById('disponibilidad').innerHTML = 'Disponibilidad: ' + JSON.stringify(data);
      });
	  console.log("precio","")
    // Obtener precios
    fetch('https://lab5411.rojotango.com/api/rojo/online/precios')
	.then(response => response.json())
      .then(data => {
		console.log("precio",data)
		var select = document.getElementById('precios');


		data.forEach(obj => {
                const option = document.createElement('option');
                option.value = `${obj.categoria}|${obj.efectivo}`;
                option.text = `${obj.categoria} - ${obj.moneda} $${obj.efectivo}`;
                select.appendChild(option);
            });

      });

    // Abrir el modal
    var myModal = new bootstrap.Modal(document.getElementById('modalReserva'));
    myModal.show();
  };

  // Seleccionar todos los elementos con la clase 'btnReservar'
var botonesReservar = document.getElementsByClassName('btnReservar');

// Iterar sobre la colección de elementos y agregar un evento a cada uno
for (var i = 0; i < botonesReservar.length; i++) {
    botonesReservar[i].addEventListener('click', function() {
      reservarEvent()
    });
}


  // Evento para manejar el envío del formulario
  document.getElementById('formularioReserva').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío normal del formulario

//     {
//     "fecha": "2024-09-04",
//     "id_evento": 2,
//     "categoria": "Cena Show",
//     "email": "pepo@pepo.com",
//     "nombre": "Pepo y sra.",
//     "telefono": "123454321",
//     "asistentes": 2,
//     "restricciones": "",
//     "adicionales": "Clase de Tango",
//     "pick_up": "",
//     "total_cobrado": 580
// }
    var precios =document.getElementById('precios').value
    var preciosarra = precios.split("|");
    var cant = parseInt(document.getElementById('cant_p').value)

    
    // Aquí recogerías los valores del formulario
    var formData = {
      email: document.getElementById('email').value,
      fecha: document.getElementById('fecha').value,
      id_evento: cant,
      categoria: preciosarra[0],
      nombre: "Pepo y sra.",
      telefono: "123454321",
      asistentes: 2,
      restricciones: "",
      adicionales: "",
      pick_up: "",
      total_cobrado: parseInt(preciosarra[1]) * cant,
      // Agrega aquí los demás campos
    };

    // Enviar los datos a la API para hacer la reserva
    fetch('https://lab5411.rojotango.com/api/rojo/online/reserva', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData),
    })
    .then(response => response.json())
    .then(data => {
      console.log(data); // Respuesta de la API
      alert('Reserva realizada con éxito');
      // Cierra el modal
      var myModal = bootstrap.Modal.getInstance(document.getElementById('modalReserva'));
      myModal.hide();
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Hubo un error al hacer la reserva');
    });
  });
});
</script>