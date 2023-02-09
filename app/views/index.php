<div class="container">
  <div class="row" style="min-height: 100vh;">
      <div class="col-md-3 pt-3 pb-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-secondary" style="--bs-bg-opacity: .15; width: 100%;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <span class="fs-4">{{name}}</span>
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
          <p class="fs-5">
            <a href="/logout">
              <i class="bi bi-arrow-bar-right"></i>
              Sair
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="row mt-3">
        <div class="col-4">
          <div class="bg-primary" style="min-height: 10px;">
            <p>Despesas</p>
            <p>R$ 999,99</p>
          </div>
        </div>
        <div class="col-4">
          <div class="bg-primary" style="min-height: 10px;">
            <p>Lucro</p>
            <p>R$ 999,99</p>
          </div>
        </div>
        <div class="col-4">
          <div class="bg-primary" style="min-height: 10px;">
            <p>Balanço</p>
            <p>R$ 999,99</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/js/pages/dashboard.js"></script>