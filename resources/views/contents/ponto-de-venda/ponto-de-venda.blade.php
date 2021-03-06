@extends('layout.layout')

@section('title')
    Ponto de Venda
@endsection
@section('content')
<div class="container-fluid py-4">
    
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">paid</i>
            </div>
            <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">Total</p>
              <h4 class="mb-0">R$ 80,00</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          
        </div>
        
      

       
        
       </div>
       <div class="col-xl-6 col-sm-6 offset-xl-3">
        <div class="card">
          <div class="card-header p-3 pt-2">
            <div class="input-group input-group-outline">
            <label class="form-label">Pesquisar Produto</label>
            <input type="text" class="form-control">
          </div>
          </div>
          <hr class="dark horizontal my-0">
          
        </div>

       </div>


    </div>
    <div class="d-flex w-95 justify-content-end">
        <button class="btn btn-success">Finalizar Venda</button>
    </div>

    <div class="row mb-4">
      <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Venda</h6>
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Produto</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantidade</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço Unitario</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço Total</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remover</th>
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
                      <span class="text-xs font-weight-bold"> 1.600 kg </span>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">R$ 50,00</span>
                          </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">R$ 80,00</span>
                            </div>
                          </div>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <button class="btn btn-danger">Remover</button>
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
