<div class="container">
  <div class="row" style="min-height: 100vh;">
      <div class="col-md-3 pt-3 pb-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-secondary" style="--bs-bg-opacity: .15; width: 100%;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <span class="fs-3">{{name}}</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <i class="bi bi-house"></i>
              Dashboard
            </a>
          </li>
        </ul>
        <hr>
        <div>
          <p class="fs-5 m-0">
            <a class="text-decoration-none" href="/logout">
              <i class="bi bi-arrow-bar-right logout-btn"></i>
              Sair
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <h2 class="text-center mt-4 mb-4 date_banner">
      </h2>
      <div class="bg-secondary row" style="height: 40px;">
      </div>
      <div class="row mt-3">
        <div class="col-4">
          <div class="text-white bg-primary text-center p-2 rounded shadow-sm" style="--bs-bg-opacity: .50; min-height: 10px;">
              <p class="fs-4 fw-semibold m-0">
                Despesas
              </p>
              <p class="fs-2  fw-semibold m-0">
                <span><i class="bi bi-box-arrow-up"></i></span>
                R$ 999,99
              </p>
          </div>
        </div>
        <div class="col-4">
          <div class="text-white bg-primary text-center p-2 rounded shadow-sm" style="--bs-bg-opacity: .50; min-height: 10px;">
              <p class="fs-4 fw-semibold m-0">
                Lucro
              </p>
              <p class="fs-2  fw-semibold m-0">
                <i class="bi bi-box-arrow-in-down"></i>
                R$ 999,99
              </p>
          </div>
        </div>
        <div class="col-4">
          <div class="text-white bg-primary text-center p-2 rounded shadow-sm" style="--bs-bg-opacity: .50; min-height: 10px;">
              <p class="fs-4 fw-semibold m-0">
                Balanço
              </p>
              <p class="fs-2  fw-semibold m-0">
                <i class="bi bi-arrows-collapse"></i>
                R$ 999,99
              </p>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h3 class="mb-3">Lançamentos</h3>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Categória</th>
                <th scope="col">Resumo</th>
                <th scope="col">Valor</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/js/pages/dashboard.js" type="module"></script>