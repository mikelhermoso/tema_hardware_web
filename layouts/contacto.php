<div id="contentContacto">
    <div id="containerContacto">
    <div id="contentForm">
        <h3 class="titContacto"><?php echo $contactoTit ?></h3>
        <form action="#" method="post">
            <div id="contentTextoContact"><span class="textoContacto"><?php echo $nombre ?>:</span></div>
                <div id="contentInputContact"><input type="text" placeholder="<?php echo $inNombre ?>" required/></div></br>
            <div id="contentTextoContact"><span class="textoContacto"><?php echo $apellido ?>:</span></div>
                <div id="contentInputContact"><input type="text" placeholder="<?php echo $inApellido ?>"required/></div></br>
            <div id="contentTextoContact"><span class="textoContacto"><?php echo $email ?>:</span></div>
                <div id="contentInputContact"><input type="text" placeholder="<?php echo $inMail ?>"required/></div></br>
            <div id="contentTextoContact"><span class="textoContacto"><?php echo $mensaje ?>:</span></div>
                <div id="contentInputContact"><textarea placeholder="<?php echo $inMensaje ?>"></textarea></div></br>
                <input class="btnSubmit" type="submit" name="Enviar" value="<?php echo $enviar ?>"/>
        </form>
    </div>
    <div id="contentImgContact">
        <div id='containerImgContact'>
            <img class="imgContacto" src="img/contact.png" alt="contact" />
        </div>
    </div>
    </div>
</div>

