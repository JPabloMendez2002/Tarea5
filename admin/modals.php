   <!----------------------------------MODAL AGREGAR USUARIO----------------------------------------------------------->
   <div class="modal fade" id="agregarUSUARIO">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">

               <div class="modal-header">
                   <h3 class="title" style="text-align: center;">Agregar Usuario <i class="fa-solid fa-user-plus"></i></h3>
                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>

               <div class="modal-body">
                   <div class="text-center">
                       <form method="POST">
                           <div class="row">
                               <div class="col-md-6">
                                   <h4>Nombre-Apellidos</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                       <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                       <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <h4>Identificación</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                                       <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Identificación-Usuario">

                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6">
                                <h4>Contraseña</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                       <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <h4>Estado Usuario</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-input-numeric"></i></span>
                                       <input type="text" class="form-control" list="estadosN" id="estado" name="estado" placeholder="---Selccione el Estado---">
                                       <datalist id="estadosN">
                                           <option value="1">Activo</option>
                                           <option value="0">Inactivo</option>
                                       </datalist>
                                   </div>
                               </div>
                           </div>
                           <hr>

                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                           <button type="button" class="btn btn-success" id="btnNuevoUsuario">Guardar <i class="fa-solid fa-floppy-disk"></i></button>
                       </form>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!----------------------------------FIN MODAL AGREGAR USUARIO----------------------------------------------------------->

   <!----------------------------------MODAL EDITAR USUARIO----------------------------------------------------------->
   <div class="modal fade" id="editarUSUARIO">
       <div class="modal-dialog modal-lg">
           <div class="modal-content">

               <div class="modal-header">
                   <h3 class="title" style="text-align: center;">Editar Usuario <i class="fa-solid fa-pen-to-square"></i></h3>
                   <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
               </div>

               <div class="modal-body">
                   <div class="text-center">
                       <form method="PUT">
                           <div class="row">
                               <div class="col-md">
                                   <h4>Nombre-Apellidos</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                       <input type="hidden" name="idED" id="idED">
                                       <input type="text" class="form-control" id="nombreED" name="nombreED" placeholder="Nombre">
                                       <input type="text" class="form-control" id="apellidoED" name="apellidoED" placeholder="Apellidos">
                                   </div>
                               </div>
                           </div>
                           <br>
                           <div class="row">
                               <div class="col-md-6">
                                   <h4>Contraseña</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                       <input type="password" class="form-control" name="contraED" id="contraED" placeholder="Contraseña">
                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <h4>Estado Actual</h4>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><i class="fa-solid fa-input-numeric"></i></span>
                                       <input type="text" class="form-control" list="estados" id="estadoED" name="estadoED" placeholder="---Selccione el Estado---">
                                       <datalist id="estados">
                                           <option value="1">Activo</option>
                                           <option value="0">Inactivo</option>
                                       </datalist>
                                   </div>
                               </div>
                           </div>
                           <hr>
                           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                           <button type="button" id="btnActUsuario" name="btnActUsuario" class="btn btn-success" data-bs-dismiss="modal">Guardar <i class="fa-solid fa-floppy-disk"></i></button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!----------------------------------FIN MODAL EDITAR USUARIO----------------------------------------------------------->

   <!----------------------------------MODAL ELIMINAR USUARIO----------------------------------------------------------->
   <div class="modal fade" id="eliminarUSUARIO">
       <div class="modal-dialog">
           <div class="modal-content">
               <form>
                   <div class="modal-header">
                       <h3 class="modal-title">Eliminar Usuario <i class="fa-solid fa-triangle-exclamation"></i></h3>
                       <input type="hidden" name="idUsuarioBorrar" id="idUsuarioBorrar">
                   </div>
                   <div class="modal-body">
                       <h4>¿Seguro que desea eliminar este Usuario?</h4>
                       <h5 class="text-danger"><small>Esta opción no puede deshacerse</small></h5>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fa-solid fa-rectangle-xmark"></i></button>
                       <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btneliminaUsu" name="btneliminaUsu">Confirmar <i class="fa-solid fa-square-check"></i></button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!----------------------------------FIN MODAL ELIMINAR USUARIO----------------------------------------------------------->

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