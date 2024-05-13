<div class="container-fluid">
    <div class="row justify-content-center mt-5 mb-5 div-venta">
        <h2 class="text-center">Formulario de Membresia</h2>
    <form  class="col-10 col-xl-8 " method="POST" enctype="multipart/form-data" action="/enviar-form-venta" id="FormVenta">
        @csrf
        <div class="row mt-3">
            <div  class="col-12 col-md-6">
                <div id="grupo__nombres" >
                    <div class="input__title">Nombres:</div>
                    <div class="formulario__grupo-input">
                        <input onkeyup="upper(this)"  oninput="formatoMayuscula(event)" type="text" name="nombres" id="nombres" placeholder="Nombres" formcontrolname="nombres" class="form-control" required><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Los nombres tiene que ser máximo de 36 caracteres y solo puede contener letras</p>
                </div>
            </div>
            <div  class="col-12 col-md-6">
                <div id="grupo__apellidos" >
                    <div  class="input__title">Apellidos:</div>
                    <div class="formulario__grupo-input">
                        <input onkeyup="upper(this)"  oninput="formatoMayuscula(event)" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" formcontrolname="apellidos" class="form-control"  required><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Los apellidos tiene que ser máximo de 36 caracteres y solo puede contener letras</p>
                </div>
            </div>
        </div>
        <div  class="row mt-3">
            <div  class="col-12 col-md-6">
                <div id="grupo__correo">
                    <div  class="input__title">Email:</div>
                    <div  class="formulario__grupo-input"  >
                        <input  type="email" name="correo" id="correo" placeholder="Email" formcontrolname="email" class="form-control"  required><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El correo tiene que tener la siguiente forma "example@example.com".</p>
                </div>
               
            </div>
            <div  class="col-12 col-md-6">
                <div id="grupo__telefono" >
                    <div class="input__title">Celular:</div>
                    <div class="formulario__grupo-input">
                        <input  type="tel" placeholder="Teléfono" name="telefono" id="telefono" mask="000 000 000" prefix="+51 " formcontrolname="telefono" class="form-control"  required onkeypress="return solonumeros(event)" minlength="9" maxlength="9"><!----><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El telefono tiene que ser de 9 caracteres y solo puede contener numeros.</p>
                
                </div>
            </div>
        </div>
        <div  class="row mt-3">
            <div  class="col-12 col-md-6">
                <div id="grupo__marca" >
                    <div  class="input__title">Dni:</div>
                    <div class="formulario__grupo-input">   
                        <input onkeyup="upper(this)" type="tel" placeholder="Dni" name="dni" id="dni" formcontrolname="dni" class="form-control"  required><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El dni tiene que ser máximo de 8 caracteres y solo puede contener numeros</p>
            </div>
            </div>
            <div  class="col-12 col-md-6">
                <div id="grupo__modelo" >
                    <div class="formulario__grupo-input" >
                        <label>Plan Membresia</label>
                        <select class="form-select" name="dias" id="dias">
                            <option selected>Elige Plan...</option>
                            <option value="De Lunes Martes Viernes">1 mes</option>
                            <option value="De Lunes Miercoles Sabado">2 meses</option>
                            <option value="De Lunes a Viernes">3 meses</option>
                            <option value="De Lunes a Sabado">5 meses</option>
                            <option value="Dias Personalizado">8 meses</option>
                        </select>
                    </div>
                    <p class="formulario__input-error">El modelo tiene que ser máximo de 36 caracteres y solo puede contener letras, numeros y guion medio</p>     
                </div>
            </div>
        </div>
        <div  class="row mt-3">
            <div  class="col-12 col-md-4">
                <div id="grupo__kilometr" >
                    <label>Costo de la Membresia</label>
                        <select class="form-select" name="dias" id="dias">
                            <option selected>Costo...</option>
                            <option value="De Lunes Martes Viernes">1 mes</option>
                            <option value="De Lunes Miercoles Sabado">2 meses</option>
                            <option value="De Lunes a Viernes">3 meses</option>
                            <option value="De Lunes a Sabado">5 meses</option>
                            <option value="Dias Personalizado">8 meses</option>
                        </select>
                    <p class="formulario__input-error">El kilometraje tiene que ser máximo de 6 caracteres y solo puede contener números</p>             
                </div>
            </div>
            <div  class="col-12 col-md-4">
                <div id="grupo__anio" >
                    <div  class="input__title">Año de Fabricación:</div>
                    <div class="formulario__grupo-input" >
                        <input  type="text" placeholder="Año" mask="0000" name="ano" id="ano" formcontrolname="anio" class="form-control" required value="" onkeypress="return solonumeros(event)" minlength="4" maxlength="4"><!----><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El año de Fabricación tiene que ser de 4 caracteres y solo puede contener números mayores a 2000</p>
                </div>
            </div>
            <div  class="col-12 col-md-4">
                <div id="grupo__placa" >
                    <div  class="input__title">Placa:</div>
                    <div class="formulario__grupo-input" >
                        <input  type="text" placeholder="Placa" mask="AAA-AAA" name="placa" id="placa" formcontrolname="placa" class="form-control" value="" required><!----><!---->
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La placa tiene que ser de la forma "AAA-AAA" y solo puede contener números, letras y guión medio</p>  
                </div>
            </div>
        </div>
        <div  class="row mt-3">
            <div  class="col-12">
                <div id="grupo__mensaje" >
                    <div  class="input__title">Mensaje:</div>
                    <div class="formulario__grupo-input" >
                        <textarea onkeyup="upper(this)" type="text" rows="6"  name="mensaje" id="mensaje" formcontrolname="mensaje" class="form-control" minlength="100" maxlength="500" required></textarea>
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">El mensaje tiene que ser de un mínimo de 100 caracteres y un máximo de 500 caracteres y solo puede contener numeros, letras y los siguientes signos (",";":") </p>
                </div>
            </div>
        </div>
    <br>
        <input id="archivo[]" name="archivo[]" type="file" multiple=true accept=".jpg, .jpeg, .png, .pdf">
    <br>
        <div class="col mt-4">
            <div class="g-recaptcha" data-sitekey="6LcjeNYhAAAAADsEeMzI2CnqPdN4yufNFIjGxcD0"></div>
        </div>  
        <div class="formulario__mensaje mb-4 mt-4" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error: </b><span id="error-mensaje"></span></p>
        </div>
        <div class="col text-center"> <!-- Agrega la clase text-center aquí -->
            <input type="submit" name="register" class="register__car btn btn-primary mt-3" value="Enviar">
        </div>
    </form>
    <br>
</div>    
