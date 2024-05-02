<section id="hero-856" class="container-fluid text-white py-5 hero">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="cs-content text-center">
                <span class="cs-topper">AVENTURA GYM</span>
                <h1 class="cs-title">¡Transforma tu cuerpo y tu vida!</h1>
                <p class="cs-text">
                    Descubre tu potencial y alcanza tus metas de fitness en Aventura Gym. Con nuestro equipo de entrenadores expertos, instalaciones de vanguardia y una comunidad de apoyo, te ayudaremos a alcanzar tu mejor versión.
                </p>
                <a href="contacto" class="btn btn-primary">¡Únete a nosotros!</a>
            </div>
        </div>
        <br>
        <div class="col-md-6">
            <div class="cs-picture">
                <img src="{{ asset('images/fondo-gym.webp')}}" alt="Fondo" class="img-fluid">
            </div>
        </div>
    </div>
    <svg class="cs-wave" width="1920" height="179" viewBox="0 0 1920 179" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1920 179V91.3463C1835.33 91.3463 1715.47 76.615 1549.2 32.9521C1299.48 -32.3214 1132.77 12.1006 947.32 61.5167C810.762 97.9044 664.042 137 466.533 137C331.607 137 256.468 123.447 188.082 111.113C130.974 100.812 78.5746 91.3609 0 91.3609V179H1920Z" fill="white"/>
    </svg>
</section>
<br>

<section class="contact_section layout_padding-bottom mt-5">
    <div class="container">
      <div class="d-flex flex-column align-items-center">
        <div class="custom_heading-container">
           
        <h2>
            CONTACTENOS
          </h2>
        </div>
      </div>
      <div class="layout_padding-top layout_padding2-bottom">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <form method="POST"  action="/enviar-form-contacto-personal" enctype="multipart/form-data">
              @csrf    
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="nombres" onkeyup="upper(this)" oninput="formatoMayuscula(event)" id="nombres" placeholder="Nombres">
                  </div>
                  <div>
                    <input type="email" name="correo" id="correo" placeholder="Email">
                  </div>
                  <div>
  
                    <input type="tel" placeholder="Teléfono" name="telefono" id="telefono" mask="000 000 000" prefix="+51 " formcontrolname="telefono" required onkeypress="return solonumeros(event)" minlength="9" maxlength="9">
                  </div>
                  <div>
                    <input type="text" name="comentario" onkeyup="upper(this)" id="comentario" placeholder="Comentario" class="message_input">
                  </div>
  
                </div>
              </div>
              <div class="d-flex mt-3">
                <button type="submit" class="btn btn-primary btn-lg btn-busqueda d-flex" id="button_Contacto" style="border:none;align-items: center;" name="register">
                    <span class="spinner-border spinner-border-sm" id="spinnerContacto" role="status" aria-hidden="true"
                        style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;"></span>
                    Enviar
                </button>
            </div>
            </form>
           
          </div>
          <div class="col-md-6 mt-5 mt-md-0">
            <div class="map-box">
              <div id="map">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.83709799223138!2d-76.96944849806715!3d-12.085186778097572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ab78294add%3A0xe2ec52def207e626!2sAv.%20Club%20Golf%20los%20Incas%20208%2C%20Santiago%20de%20Surco%2015023!5e0!3m2!1ses!2spe!4v1655932838924!5m2!1ses!2spe" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
  <br>