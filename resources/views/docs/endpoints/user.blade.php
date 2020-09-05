<div class="card border-primary my-3 mx-4">
    <h4 class="card-header">user</h4>
    <div class="card-body">
        <div class="accordion" id="accordionUser">
            <!-- LOGIN -->
            <div class="card">
                <div class="card-header" id="headingUser1">
                    <p class="mb-0">
                        <button class="btn btn-success collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseUser1" aria-expanded="false" aria-controls="collapseUser1">
                        POST
                        </button>
                        <span class="ml-3 font-weight-bold h5">/login</span>
                        <span class="ml-1">Inicia una sesión y devuelve el token de autenticación</span>
                    </p>
                </div>
                <div id="collapseUser1" class="collapse" aria-labelledby="headingUser1" data-parent="#accordionUser">
                    <div class="card-body bg-secondary">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h5 class="text-white">Parámetros</h5>
                                <div class="bg-light p-3">
                                    Sin parámetros
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5 class="text-white mt-md-0 mt-4">Protegida</h5>
                                <div class="bg-light p-3">
                                    No
                                </div>
                            </div>
                        </div>
                        <h5 class="text-white mt-4">Propiedades</h5>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"email": <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"password": <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"remember_me": <span class="text-success">"boolean"</span> <span class="text-info">(Opcional)</span>
                            <br>}
                            </code>
                        </div>
                        <h5 class="text-white mt-4">Respuesta</h5>
                        <h6 class="text-white mt-3">200 : Respuesta correcta</h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"access_token": <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"token_type": <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"expires_at": <span class="text-warning">"string"</span>
                            <br>}
                            </code>
                        </div>
                        <h6 class="text-white mt-3">401 : Credenciales erróneas</h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
                            <br>}
                            </code>
                        </div>
                        <h6 class="text-white mt-3">
                            422 : Error al enviar las propiedades, 
                            la propiedad errors solo muestra los 
                            campos que han producido un error
                        </h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"errors": {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"email": [
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"password": [
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"remember_me": [
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="text-warning">"string"</span>
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;}
                            <br>}
                            </code>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SIGNUP -->
            <div class="card">
                <div class="card-header" id="headingUser2">
                    <p class="mb-0">
                        <button class="btn btn-success collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseUser2" aria-expanded="false" aria-controls="collapseUser2">
                        POST
                        </button>
                        <span class="ml-3 font-weight-bold h5">/signup</span>
                        <span class="ml-1"><small class="text-secondary font-italic">En desarrollo</small></span>
                    </p>
                </div>
                <div id="collapseUser2" class="collapse" aria-labelledby="headingUser2" data-parent="#accordionUser">
                    <div class="card-body bg-secondary">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h5 class="text-white">Parámetros</h5>
                                <div class="bg-light p-3">
                                    Sin parámetros
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5 class="text-white mt-md-0 mt-4">Protegida</h5>
                                <div class="bg-light p-3">
                                    No
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGOUT -->
            <div class="card">
                <div class="card-header" id="headingUser3">
                    <p class="mb-0">
                        <button class="btn btn-primary collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseUser3" aria-expanded="false" aria-controls="collapseUser3">
                        GET
                        </button>
                        <span class="ml-3 font-weight-bold h5">/logout</span>
                        <span class="ml-1">Cierra sesión</span>
                    </p>
                </div>
                <div id="collapseUser3" class="collapse" aria-labelledby="headingUser3" data-parent="#accordionUser">
                    <div class="card-body bg-secondary">
                    <div class="row">
                            <div class="col-md-6 col-12">
                                <h5 class="text-white">Parámetros</h5>
                                <div class="bg-light p-3">
                                    Sin parámetros
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <h5 class="text-white mt-md-0 mt-4">Protegida</h5>
                                <div class="bg-light p-3">
                                    Si
                                </div>
                            </div>
                        </div>
                        <h5 class="text-white mt-4">Respuesta</h5>
                        <h6 class="text-white mt-3">200 : Respuesta correcta</h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
                            <br>}
                            </code>
                        </div>
                        <h6 class="text-white mt-3">401 : No se ha proporcionado un token en las cabeceras</h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
                            <br>}
                            </code>
                        </div>
                        <h6 class="text-white mt-3">401 : El token proporcionado es inválido</h6>
                        <div class="bg-dark p-3">
                            <code>
                                {
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
                            <br>}
                            </code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>