<?php include('header.php') ?>
<?php
    function pageName()
    {
        $paginas = ['Página Interna', 'Quem Somos', 'Visão', 'Valores'];
        $get = empty($_GET['p']) || empty($paginas[$_GET['p']]) ? 0 : $_GET['p'];
        return $paginas[$get]; 
    }
?>

<div style="background: url('./Assets/images/voluntariado.jpg') no-repeat center center;background-size:100% auto;">
    <div class="p-5 mb-4 bg-dark-opacity">
        <div class="container py-5">
            <div class="container py-5">
                <h1 class="display-5 fw-bold text-light"><?= pageName() ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="p-5 mb-4">
    <div class="container py-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Curabitur tristique eros id nibh ultrices ornare ut ac felis. 
            Pellentesque in pulvinar turpis. Curabitur diam dui, gravida a 
            bibendum non, posuere at nunc. Praesent a urna nibh. Maecenas non 
            orci rhoncus, accumsan mauris non, mattis ante. Aliquam tempor, tortor 
            eget molestie efficitur, elit dui eleifend elit, nec lobortis 
            lectus elit eget mauris. <br> 
            <img src="http://www.oyonale.com/imagemix_exe.php?lang=fr&source=1&images=2&width=600&height=600&bgcolor=9&pieces=500&minsize=5&maxsize=100&stretch=1&minopacity=0&maxopacity=80&scatter=1&pattern=1" width="300" style="float:left;padding: 15px 20px 0 0;">
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
</div>
<?php include('footer.php') ?>