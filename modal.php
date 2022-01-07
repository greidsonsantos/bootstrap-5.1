
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Mais detalhes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Detalhes</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Quero Ajudar</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur tristique eros id nibh ultrices ornare ut ac felis. 
                            Pellentesque in pulvinar turpis. Curabitur diam dui, gravida a 
                            bibendum non, posuere at nunc. Praesent a urna nibh. Maecenas non 
                            orci rhoncus, accumsan mauris non, mattis ante. Aliquam tempor, tortor 
                            eget molestie efficitur, elit dui eleifend elit, nec lobortis 
                            lectus elit eget mauris. <br> 
                            <img src="<?= $imgrand_p1 . rand(1, 9) . $imgrand_p2 . rand(1, 9) ?>" width="50%" style="float:left;padding: 15px 20px 0 0;">
                            Aliquam mollis dui libero, non dapibus ipsum 
                            varius sed. In pharetra porttitor sapien quis facilisis. In lacinia 
                            eleifend enim et euismod. Aenean justo ante, malesuada at ornare id, 
                            viverra non est. Maecenas bibendum dolor tempor, facilisis ante ac, 
                            viverra tellus. Maecenas dolor velit, faucibus vel tincidunt et, consectetur 
                            sit amet libero. Sed fermentum consectetur tempor. Sed quis mauris vel lacus sollicitudin rutrum.
                        </p>
                        <p>
                            Suspendisse libero ligula, pretium sed consequat eget, aliquam at
                            magna. Pellentesque sed risus iaculis, vestibulum odio at, porttitor dolor. 
                            Aenean in enim non leo auctor eleifend vel a neque. Donec ornare in tellus a euismod. 
                            Curabitur sit amet porta orci. Pellentesque vestibulum, nisi vel fringilla accumsan, 
                            arcu libero malesuada dolor, eu faucibus nulla massa quis ante. Sed finibus dolor 
                            at massa ornare, sit amet aliquet massa placerat. Quisque aliquam dictum magna non dictum. 
                            Fusce commodo ligula in elit egestas, vel pulvinar lacus fringilla. Etiam vitae facilisis enim, 
                            non pharetra metus. Pellentesque habitant morbi tristique senectus et netus et malesuada 
                            fames ac turpis egestas. In hac habitasse platea dictumst. Sed consequat molestie 
                            nulla sit amet auctor.
                        </p>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="text-center py-4">
                            <label class="cursor-pointer">
                                <input type="radio" class="open-qa-register" name="registerlogin" checked>&nbsp;&nbsp; Já sou cadastrado &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" class="open-qa-login" name="registerlogin">&nbsp;&nbsp; Quero criar meu cadastro
                            </label>                                        
                        </div>

                        <div class="px-5 py-2 qa-login" style="min-height:400px;">
                            <div class="px-5">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" aria-label="Senha" class="form-control" placeholder="Senha">
                                </div>
                            </div>
                        </div>

                        <div class="px-5 py-2 qa-register display-none" style="min-height: 400px;">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" aria-label="Nome" class="form-control" placeholder="Nome">
                                <input type="text" aria-label="Sobrenome" class="form-control" placeholder="Sobrenome">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="E-mail" aria-label="E-mail">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="text" aria-label="Senha" class="form-control" placeholder="Senha">
                                <input type="text" aria-label="Confirme a Senha" class="form-control" placeholder="Confirme a senha">
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener("load", function (event) {
        $('.open-qa-login').click(function () {
            $('.qa-login').fadeOut(300);
            setTimeout(function () {
                $('.qa-register').fadeIn();
            }, 300)
        });
        $('.open-qa-register').click(function () {
            $('.qa-register').fadeOut(300);
            setTimeout(function () {
                $('.qa-login').fadeIn();
            }, 300)
        });
    });
</script>