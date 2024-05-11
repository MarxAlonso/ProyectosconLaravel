<div class="container-fluid" style="background-color:#eee;">
    <section class="container pt-5 text-muted">
        <h2 class="text-center">Formulario de Reserva</h2>
        <br>
        <form class="form_contactanos" action="/enviar-form-contacto" method="post" id="FormContacto">
        @csrf    
        <div class="row">
                <div class="col-12 col-md-6 mt-3" id="grupo__nombres">
                    <label>NOMBRES</label>
                    <div class="formulario__grupo-input"> 
                        <input type="text" class="form-control" name="nombres" id="nombres" required="required" maxlength="72" minlength="3" onkeyup="upper(this)"  oninput="formatoMayuscula(event)" value="<?php if(isset($_POST['nombres'])){echo $_POST['nombres'];}?>" onkeypress="return validar(event)" 
                            placeholder="Sus Nombres">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El nombre que ser de mínimo de 3 caracteres y máximo de 72 caracteres y solo puede contener letras. </p>
                                    
                       
                    
                </div>
                <div class="col-12 col-md-6 mt-3" id="grupo__correo">
                    <label>CORREO</label>
                    <div class="formulario__grupo-input">
                        <input type="email" class="form-control" name="correo" id="correo" required="required" multiple value="<?php if(isset($_POST['correo'])){echo $_POST['correo'];}?>"
                        placeholder="Su Correo">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo tiene que tener la siguiente forma "example@example.com". </p>
                </div>
                <div class="col-12 col-md-6 mt-3" id="grupo__telefono">
                    <label>TELEFONO</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="form-control" name="telefono" id="telefono" required="required" maxlength="9" minlength="9" value="<?php if(isset($_POST['telefono'])){echo $_POST['telefono'];}?>" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                        placeholder="Su Telefono">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El telefono tiene que ser de 9 caracteres y solo puede contener numeros. </p>
                                    
                    </div>
                <div class="col-12 col-md-6 mt-3">
                    <label>INTERES</label>
                    <select class="form-select" name="interes" id="interes">
                        <option selected>Seleccione...</option>
                        <option value="Compra">Compra</option>
                        <option value="Venta">Venta</option>
                    </select>
                    
                    <!-- input type="text" class="form-control" name="asunto" id="asunto" required="required" onkeypress="return validar(event)" minlength="10" maxlength="60"
                        placeholder="Asunto"> -->
                </div>
            </div>
            <div class="col-12 mt-3" id="grupo__comentario">
                <label>MENSAJE</label>
                <div class="formulario__grupo-input"> 
                    <textarea class="form-control" name="comentario" id="comentario" rows="10" maxlength="500" minlength="15" onkeyup="upper(this)"
                    placeholder="Deje su mensaje aquí" required></textarea>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Un comentario tiene que ser de minimo 100 caracteres y máximo de 500 caracteres y solo puede contener numeros, letras </p>
            </div>
            <div class="col mt-4">
                <div class="g-recaptcha" data-sitekey="6LcjeNYhAAAAADsEeMzI2CnqPdN4yufNFIjGxcD0"></div>
            </div>
            <div class="formulario__mensaje mb-4 mt-4" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error: </b><span id="error-mensaje"></span></p>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary btn-lg btn-busqueda d-flex" id="button_Contacto" style="border:none;align-items: center;" name="register">
                    <span class="spinner-border spinner-border-sm" id="spinnerContacto" role="status" aria-hidden="true"
                        style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;"></span>
                    Enviar Consulta
                </button>
            </div>



        </form>
        <?php 
        /*include("Controllers/contacto.blade.php");*/
        ?>

    </section>
    <br>
    <br>
    <br>
</div>
<br>
<div class="container">
    <section class="row">
        <div class="col-lg-6 col-12 text-muted">
            <h3>Información</h3>
            <br>
            <p class="text-justify">
                Use cualquiera de estos medios para contactarnos. Lo atenderemos con la cordialidad que nos destaca.
            </p>
            <br>
            <div class="d-flex flex-row">
                <div class="d-flex align-items-center">
                    <i class='fas fa-globe' style='font-size:28px'></i>
                </div>
                <div class="align-items-center col-6 pr-0 mx-2">
                    <p class="mb-1 font-weight-bold">Web: </p>
                    <p class="mb-1" style="font-size: 15px;">https://aventuragym-mrx.blogspot.com</p>
                </div>
            </div>
            <br>
            <!-- <div class="d-flex flex-row">
                <div class="d-flex align-items-center">
                    <i class='fas fa-phone-alt' style='font-size:28px'></i>
                </div>
                <div class="align-items-center col-6 pr-0">
                    <p class="mb-1 mr-1 font-weight-bold">Móvil: </p>
                    <p class="mb-1" style="font-size: 15px;">(511) 748 5112</p>
                </div>
            </div>
            <br> -->
            <div class="d-flex flex-row mb-4">
                <div class="d-flex align-items-center">
                    <i class='far fa-envelope-open' style='font-size:28px'></i>
                </div>
                <div class="align-items-center col-10 pr-0 mx-2">
                    <p class="mb-1 font-weight-bold">E-Mail: </p>
                    <p class="mb-1" style="font-size: 15px;">aventuragym@gmail.com</p>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <p class="font-weight-bold">Siguenos en: </p>
                <div class="d-flex flex-row">
                    <a class="nav-link text-muted me-3" href="https://www.facebook.com/"
                        target="_black"><i class="fab fa-facebook-f" style="color:#0000ff; font-size:22px;"></i></a>
                    <a class="nav-link text-muted me-3" href="https://twitter.com/" target="_black"><i
                            class="fab fa-twitter" style="color:#00ffff; font-size:22px;"></i></a>
                    <a class="nav-link text-muted me-3" href="https://www.linkedin.com/"
                        target="_black"><i class="fab fa-linkedin" style="color:#008080; font-size:22px;"></i></a>
                    <a class="nav-link text-muted me-3" href="https://www.instagram.com/" target="_black"><i
                            class="fab fa-instagram" style="color:rgb(223,27,100); font-size:22px;"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 p-0 col-12 diseño-mapa">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.7260968489993!2d-76.96745681305953!3d-12.081164945436388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6ff58810593%3A0xc81511ec9f263878!2sAv.%20Circunvalaci%C3%B3n%20del%20Golf%20los%20Incas%20208%2C%20Santiago%20de%20Surco%2015023!5e0!3m2!1ses-419!2spe!4v1616102516880!5m2!1ses-419!2spe"
                    width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</div>

<br>