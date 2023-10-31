<div class="container">
    <div class="form-image">
        <img src="/img/undraw_completed_m9ci.svg" alt="">
    </div>
    <div class="form">
        <form method="POST">
            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-se</h1>
                </div>
                <div class="cadastro-button">
                    <button><a href="index.php">Cadastros</a></button>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="input-box">
                    <label for="idade">Idade</label>
                    <input id="idade" type="number" name="idade" placeholder="Digite sua idade" required>
                </div>

                <div class="input-box">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Digite a sua cidade" required>
                </div>

                <div class="input-box">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Digite seu bairro" required>
                </div>
            </div>

            <div class="gender-inputs">
                <div class="gender-title">
                    <h6>Gênero</h6>
                </div>
                <div class="gender-group">
                    <div class="gender-input">
                        <input type="radio" id="female" name="gender" value="Feminino">
                        <label for="female">Feminino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="male" name="gender" value="Masculino">
                        <label for="male">Masculino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="others" name="gender" value="Outros">
                        <label for="others">Outros</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="none" name="gender" value="Oculto">
                        <label for="none">Prefiro não dizer</label>
                    </div>
                </div>
            </div>

            <div class="continue-box">
                <button><a href="">Confirmar</a></button>
            </div>
        </form>
    </div>
</div>