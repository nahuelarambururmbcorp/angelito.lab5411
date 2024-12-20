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