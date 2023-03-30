<!----------------------------------MODAL AGREGAR CONTACTO----------------------------------------------------------->
<div class="modal fade" id="agregarCONTACT">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="title" style="text-align: center;">Agregar Contacto <i class="fa-solid fa-user-plus"></i></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="text-center">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md">
                                <h4>Nombre-Apellidos</h4>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nombreC" name="nombreC" placeholder="Nombre">
                                    <input type="text" class="form-control" id="apellidosC" name="apellidosC" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="col-md">
                                <h4>Teléfono</h4>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                    <input type="number" class="form-control" id="telefonoC" name="telefonoC" placeholder="Teléfono principal">
                                </div>
                            </div>
                            <div class="col-md">
                                <h4>E-Mail</h4>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                                    <input type="text" class="form-control" id="correoC" name="correoC" placeholder="E-Mail principal">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <h4>Redes Sociales</h4>
                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-facebook fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkFACE" name="linkFACE" placeholder="Link del Perfil">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-instagram fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkINSTA" name="linkINSTA" placeholder="Link del Perfil">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-twitter fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkTWEET" name="linkTWEET" placeholder="Link del Perfil">
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                    <hr>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnNuevoContacto" name="btnNuevoContacto">Guardar <i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------FIN MODAL AGREGAR CONTACTO----------------------------------------------------------->


<!----------------------------------MODAL EDITAR CONTACTO----------------------------------------------------------->
<div class="modal fade" id="editarCONTACT">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="title" style="text-align: center;">Editar Contacto <i class="fa-solid fa-pen-to-square"></i></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="text-center">
                    <form method="POST" id="editarPerfiContacto" name="editarPerfiContacto">
                        <div class="row">
                            <div class="col-md">
                                <h4>Nombre-Apellidos</h4>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="hidden" name="idCNED" id="idCNED">
                                    <input type="text" class="form-control" id="nombreCNED" name="nombreCNED" placeholder="Nombre">
                                    <input type="text" class="form-control" id="apellidosCNED" name="apellidosCNED" placeholder="Apellidos">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <h4>Redes Sociales</h4>
                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-facebook fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkFACED" name="linkFACED" placeholder="Link del Perfil">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-instagram fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkINSTAD" name="linkINSTAD" placeholder="Link del Perfil">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fab fa-twitter fa-lg"></i></span>
                                    <input type="text" class="form-control " id="linkTWEETD" name="linkTWEETD" placeholder="Link del Perfil">
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                    <hr>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnActContacto" name="btnActContacto">Guardar <i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------FIN MODAL EDITAR CONTACTO----------------------------------------------------------->


<!----------------------------------MODAL ELIMINAR CONTACTO----------------------------------------------------------->
<div class="modal fade" id="eliminaCONTACT">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h3 class="modal-title">Eliminar Contacto <i class="fa-solid fa-triangle-exclamation"></i></h3>
                </div>
                <div class="modal-body">
                    <h4>¿Seguro que desea eliminar este contacto?</h4>
                    <h5 class="text-danger"><small>Esta opción no puede deshacerse</small></h5>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="idContactoBorrar">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btneliminaContact" name="btneliminaContact">Confirmar <i class="fa-solid fa-square-check"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!----------------------------------FIN MODAL ELIMINAR CONTACTO----------------------------------------------------------->

    <!----------------------------------MODAL PASSWORD------------------------------------------->
    <div class="modal fade" id="modalcontraUSER">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <center>
                        <h2 class="modal-title">Cambiar Contraseña
                            <span>
                                <i class="fa-duotone fa-key"></i></span>
                        </h2>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" id="formcontraSAD" name="formcontraSAD">
                        <div class="row">
                            <div class="col">
                                <input type="password" class="form-control Inputs" id="contraSAD1" name="contraSAD1" placeholder="Contraseña Nueva" />
                            </div>
                            <div class="col">
                                <input type="password" class="form-control Inputs" id="contraSAD2" name="contraSAD2" placeholder="Repita la contraseña" />
                            </div>
                        </div>
                        <hr>
                        <center>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="cambiarcontraSAD" value="Enviar">Cambiar <i class="fa-sharp fa-solid fa-circle-check"></i></button>
                        </center>
                    </form>
                </div>
                <!--MODAL BODY-->
            </div>
        </div>
    </div>
    <!----------------------------------FIN MPASSWORD------------------------------------------->



    <!----------------------------------------Telefonos -->
<div class="modal fade" id="modalTelefonos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Teléfonos del Contacto <i class="fa-duotone fa-phone"></i></h4>
                <button type="button" onclick="location.reload();" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive-xl">
                    <div class="text-center">
                        <button class='btn btn-secondary' id='btnCargaTelefonos' name='btnCargaTelefonos'>Cargar Teléfonos</button>
                        <button class='btn btn-success' id='btnAgregarTelefono' name='btnAgregarTelefono'>Agregar Teléfono</button>

                        <hr>
                    </div>
                    <div id="divInputs" tyle="display: none;">
                
                    </div>
                    <br>
                    <table class="table table-secondary table-hover table-bordered text-md-center" id="tablaTelefonos" style="display: none;">
                        <thead class="table-primary">
                            <tr>
                                <th>Teléfono</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>

                        <tbody class="table-secondary" id="tbodyTelefonos">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" onclick="location.reload();" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
<!----------------------------------------Telefonos -->


   <!----------------------------------------Correos -->
   <div class="modal fade" id="modalCorreos">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">E-Mails del Contacto <i class="fa-duotone fa-envelope"></i></h4>
                <button type="button" onclick="location.reload();" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="table-responsive-xl">
                    <div class="text-center">
                        <button class='btn btn-secondary' id='btnCargaCorreos' name='btnCargaCorreos'>Cargar E-Mails</button>
                        <button class='btn btn-success' id='btnAgregaCorreos' name='btnAgregaCorreos'>Agregar E-Mail</button>

                        <hr>
                    </div>

                    <div id="divInputsCorreos" tyle="display: none;">
                
                    </div>
                    <br>
                    <table class="table table-secondary table-hover table-bordered text-md-center" id="tablaCorreos" style="display: none;">
                        <thead class="table-primary">
                            <tr>
                                <th>E-Mail</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>

                        <tbody class="table-secondary" id="tbodyCorreos">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" onclick="location.reload();" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
<!----------------------------------------Correos -->