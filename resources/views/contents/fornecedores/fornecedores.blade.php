@extends('layout.layout')

@section('title')
    Fornecedores
@endsection

@section('content')

         
    <div class="d-flex w-95 justify-content-end">
        <a class="btn btn-primary" style="margin-right: 1rem" href="{{route('fornecedores.create')}}">Adicionar Novo Fornecedor</a>
    </div>
   

    <div class="row mb-4">
      <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Fornecedores</h6>
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
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CNPJ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefone</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($fornecedores as $fornecedor)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        {{$fornecedor->id}}
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        {{$fornecedor->nome}}
                      </div>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> {{$fornecedor->cnpj}}</span>
                    </td>
            
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                        <div class="progress-info">
                          <div class="progress-percentage">
                            <span class="text-xs font-weight-bold">{{$fornecedor->email}}</span>
                          </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold">{{$fornecedor->telefone}}</span>
                            </div>
                          </div>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <button class="btn btn-dark">Editar</button>
                              <button class="btn btn-danger">Remover</button>
                            </div>
                          </div>
                      </td>
                  </tr>
                  @endforeach
                 
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    
  </div>
@endsection
