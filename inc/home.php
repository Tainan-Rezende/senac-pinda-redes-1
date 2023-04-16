<main>
    <div class="container">
    <div class="wrapper" style="text-align:center;">
        <p>
            Página desenvolvida para fins de teste de segurança de rede no <a href="https://www.sp.senac.br/senac-pindamonhangaba" target="_blank" rel="noopener noreferrer">Senac Pindamonhangaba</a>.
        </p>
    </div>
    <div class="wrapper">
        <div class="title">Deixe seu comentário</div>
            <div class="content">
                <p>
                    Preencha os campos e digite um comentário, ele ficará disponível na página de <a href="?p=comment">Comentários</a>.
                </p>

                <!-- ALERTS -->
                <?php if(isset($_GET['msg'])){
                    switch($_GET['msg']){
                        case 1: $msg='Seu comentário foi salvo com sucesso! Acesse a <a href="?p=comment">página de comentários</a> para ver o seu e outros comentários.'; break;
                    }
                ?>
                <div class="alert-success">
                    <h2>Oba!</h2>
                        <hr>
                        <p><?=$msg;?></p>
                </div>
                <?php } elseif(isset($_GET['error'])){
                        switch($_GET['error']){
                            case 1: $error='Houve um problema na hora de enviar seu comentário!'; break;
                        }
                ?>
                <div class="alert-error">
                    <h2>Oops!</h2>
                    <hr>
                    <p><?=$error;?></p>
                </div>
                <?php } ?>
                <!-- ALERTS -->

                <form action="?p=send" method="post">
                    <div class="commentPlace">
                    <fieldset>
                        <legend>Nome <span class="reqField">*</span></legend>
                        <label for="nameCom">
                            <input type="text" name="cname" placeholder="Coloque seu nome" required>
                        </label><br>
                        <small></small>
                    </fieldset>
                    </div>
                    <div class="commentPlace">
                    <fieldset>
                        <legend>E-mail</legend>
                        <label for="emailCom">
                            <input type="email" name="cmail" placeholder="Coloque seu e-mail">
                        </label><br>
                        <small></small>
                    </fieldset>
                    </div>
                    <fieldset>
                        <legend>Imagem</legend>
                        <label for="imgCom">
                            <input type="text" name="cimage" class="imgPlace" placeholder="Coloque a url de uma imagem da internet">
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Comentário <span class="reqField">*</span></legend>
                        <textarea name="cmsg" id="cmsg" rows="5" maxlength="600" required></textarea>
                        <small>Você pode escrever mais <span class="caracteres">600 letras.</span></small>
                    </fieldset>
                    <div class="btnCom">
                        <input type="submit" value="ENVIAR COMENTÁRIO">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>