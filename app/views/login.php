<div class="d-flex justify-content-center align-items-center vh-100 bg-secondary" style="--bs-bg-opacity: .1;">
    <div class="shadow-lg p-4 w-100 rounded-3 bg-white"  style="max-width: 450px">
        <div class="mb-4">
            <h2 class="mt-2 mb-3">Entrar</h2>
            <p class="h5 fw-normal">Bem vindo ao gerenciador financeiro</p>
        </div>
        <form method="POST" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Insira um Email Válido"
                    required
                    >
                    <div class='d-none form-error form-text text-danger d-none'></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input
                    placeholder="Senha"
                    name="password"
                    type="password"
                    class="form-control"
                    id="password"
                    required
                    >
                <div class='d-none form-error form-text text-danger d-none'></div>
            </div>
            <div class="d-flex justify-content-center mt-5" style="gap: 0.7rem;">
                <button type="submit" class="btn btn-primary ps-4 pe-4" name="submit">Entrar</button>
                <a href="/register">
                    <button type="button" class="btn btn-link">Não possui uma conta ?</button>
                </a>
            </div>
        </form>
    </div>
</div>
<script>
    const form = document.querySelector('form');
    // const 

    form.addEventListener('submit', async (e) =>{
        e.preventDefault();
        
        let formData = new FormData(form);

        let req = await fetch('/login', {method: 'POST', body: formData});
        let res = await req.text();
        console.log(res);
    })

</script>