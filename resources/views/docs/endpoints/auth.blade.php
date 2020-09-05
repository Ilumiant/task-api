<div class="card border-primary my-3 mx-4">
    <h4 class="card-header">auth</h4>
    <div class="card-body">
        <div class="accordion" id="accordionAuth">
            <!-- LOGIN -->
            <div class="card">
                <div class="card-header" id="headingAuth1">
                    <p class="mb-0">
                        <button class="btn btn-success collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseAuth1" aria-expanded="false" aria-controls="collapseAuth1">
                        POST
                        </button>
                        <span class="ml-3 font-weight-bold h5">/login</span>
                        <span class="ml-1">Inicia una sesión y devuelve el token de autenticación</span>
                    </p>
                </div>
                <div id="collapseAuth1" class="collapse" aria-labelledby="headingAuth1" data-parent="#accordionAuth">
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
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "email": <span class="text-warning">"string"</span>
    "password": <span class="text-warning">"string"</span>
    "remember_me": <span class="text-success">"boolean"</span> <span class="text-info">(Opcional)</span>
}</code></pre></div>
                        <h5 class="text-white mt-4">Respuesta</h5>
                        <h6 class="text-white mt-3">200 : Respuesta correcta</h6>
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "access_token": <span class="text-warning">"string"</span>
    "token_type": <span class="text-warning">"string"</span>
    "expires_at": <span class="text-warning">"string"</span>
}</code></pre></div>
                        <h6 class="text-white mt-3">401 : Credenciales erróneas</h6>
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "message": <span class="text-warning">"string"</span>
}</code></pre></div>
                        <h6 class="text-white mt-3">
                            422 : Error al enviar las propiedades, 
                            la propiedad errors solo muestra los 
                            campos que han producido un error
                        </h6>
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "message": <span class="text-warning">"string"</span>
    "errors": {
        "email": [
            <span class="text-warning">"string"</span>
        ],
        "password": [
            <span class="text-warning">"string"</span>
        ],
        "remember_me": [
            <span class="text-warning">"string"</span>
        ]
    }
}</code></pre></div>
                    </div>
                </div>
            </div>
            <!-- SIGNUP -->
            <div class="card">
                <div class="card-header" id="headingAuth2">
                    <p class="mb-0">
                        <button class="btn btn-success collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseAuth2" aria-expanded="false" aria-controls="collapseAuth2">
                        POST
                        </button>
                        <span class="ml-3 font-weight-bold h5">/signup</span>
                        <span class="ml-1"><small class="text-secondary font-italic">En desarrollo</small></span>
                    </p>
                </div>
                <div id="collapseAuth2" class="collapse" aria-labelledby="headingAuth2" data-parent="#accordionAuth">
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
                <div class="card-header" id="headingAuth3">
                    <p class="mb-0">
                        <button class="btn btn-primary collapsed" style="width: 80px" type="button" data-toggle="collapse" data-target="#collapseAuth3" aria-expanded="false" aria-controls="collapseAuth3">
                        GET
                        </button>
                        <span class="ml-3 font-weight-bold h5">/logout</span>
                        <span class="ml-1">Cierra sesión</span>
                    </p>
                </div>
                <div id="collapseAuth3" class="collapse" aria-labelledby="headingAuth3" data-parent="#accordionAuth">
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
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "message": <span class="text-warning">"string"</span>
}</code></pre></div>
                        <h6 class="text-white mt-3">401 : No se ha proporcionado un token en las cabeceras</h6>
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
    "message": <span class="text-warning">"string"</span>
}</code></pre></div>
                        <h6 class="text-white mt-3">401 : El token proporcionado es inválido</h6>
<div class="bg-dark pt-3 px-3 pb-1"><pre><code class="text-fucsia">{
                                    <br>&nbsp;&nbsp;&nbsp;&nbsp;"message": <span class="text-warning">"string"</span>
}</code></pre></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>