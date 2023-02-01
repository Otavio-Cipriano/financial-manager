<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="shadow-lg p-4 w-100 rounded-3"  style="--bs-bg-opacity: .2; max-width: 450px">
        <h2 class="text-center mt-2 mb-4">Criar uma nova conta</h2>
        <form method="POST" action="/register">
        <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Nome"
                    required
                    aria-required="true">
                <div id='emailHelp' class='d-none form-error form-text text-danger d-none'></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                    aria-required="true"
                    placeholder="Email">
                    
                <div id='emailHelp' class='d-none form-text text-danger'></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input
                    placeholder="Senha"
                    name="password"
                    type="password"
                    required
                    aria-required="true"
                    class="form-control"
                    id="password">
                <div id='emailHelp' class='d-none form-text text-danger'></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirmação de Senha</label>
                <input
                    placeholder="Senha"
                    name="passwordConfirmation"
                    type="password"
                    required
                    aria-required="true"
                    class="form-control"
                    id="passwordConfirmation">
                 <div id='emailHelp' class='d-none form-text text-danger'>Campo Confirmação de senha é diferente de senha</div>
            </div>
            <div class="d-flex justify-content-center mt-5" style="gap: 0.7rem;">
                <button type="submit" class="btn btn-primary ps-4 pe-4" name="submit">Registrar</button>
                <a href="/login">
                    <button type="button" class="btn btn-link">já possui uma conta ?</button>
                </a>
            </div>
        </form>
    </div>
</div>