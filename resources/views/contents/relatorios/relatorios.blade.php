@extends('layout.layout')

@section('title')
    Relatórios
@endsection

@section('content')


   

    <div class="row mb-4">
      <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Relatório de Vendas e Lucros de Produtos</h6>
                </p>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Código</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nome</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fornecedor</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço Fornecedor</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço Unitário</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantos kg Venderam</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quanto R$ Retornou(c/ descontos)</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lucros</th>
                                        
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
                        Picanha Bovina
                      </div>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Fazenda Real </span>
                      
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 35,00</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 50,00</span>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">30 kg</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 1350.00</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 300.00</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        2
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        Alcatra Bovina
                      </div>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Fazenda Real </span>
                      
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 28,00</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 38,00</span>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">70 kg</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 2394.00</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 266.00</span>
                          </div>
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
