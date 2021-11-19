@extends('layout.layout')

@section('title')
    Histórico de Vendas
@endsection

@section('content')

         
  
   

    <div class="row mb-4">
      <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Histórico de Vendas</h6>
                </p>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código da Venda</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Preço Bruto</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Desconto</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Método de Pagamento</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço Total</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cliente</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Funcionário</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data/Hora</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        1
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        R$ 80,00
                      </div>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> 10% </span>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Dinheiro - À vista </span>
                      
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 72,00</span>
                          </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">Lucas Rocha Aamaral</span>
                            </div>
                          </div>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">Geraldo Rocha Pena</span>
                            </div>
                          </div>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">18/11/2021 14:35</span>
                            </div>
                          </div>
                      </td>
                      
                  </tr>
                  
                  
                  
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    
  </div>
@endsection
