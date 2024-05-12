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
                    <label>Dias para Entrenamiento Personal</label>
                    <select class="form-select" name="interes" id="interes">
                        <option selected>Seleccione...</option>
                        <option value="De Lunes Martes Viernes">De Lunes Martes Viernes</option>
                        <option value="De Lunes Miercoles Sabado">De Lunes Miercoles Sabado</option>
                        <option value="De Lunes a Viernes">De Lunes a Viernes</option>
                        <option value="De Lunes a Sabado">De Lunes a Sabado</option>
                        <option value="Dias Personalizado">Dias Personalizado</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label>¿Es uno de nuestros miembros del gym?</label>
                    <select class="form-select" name="interes" id="interes">
                        <option selected>Seleccione...</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 mt-3">
                    <label>Horarios para Entrenamiento Personal</label>
                    <select class="form-select" name="interes" id="interes">
                        <option selected>Seleccione...</option>
                        <option value="06:00am a 8:00am">06:00am a 8:00am</option>
                        <option value="08:00am a 10:00am">08:00am a 10:00am</option>
                        <option value="10:00am a 12:00pm">10:00am a 12:00pm</option>
                        <option value="02:00pm a 4:00pm">02:00pm a 4:00pm</option>
                        <option value="04:00pm a 6:00pm">04:00pm a 6:00pm</option>
                        <option value="06:00pm a 8:00pm">06:00pm a 8:00pm</option>
                        <option value="Dias Personalizado">Horarios Personalizado</option>
                    </select>
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
                    Enviar Reserva
                </button>
            </div>
        </form>
    </section>
    <br>
    <br>
    <br>
</div>
