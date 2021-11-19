@extends('layout.layout')

@section('title')
    Cadastrar um Novo Fornecedor
@endsection

@section('content')

         
    <div class="d-flex w-95 justify-content-end">
        <a class="btn btn-primary" style="margin-right: 1rem" href="{{route('fornecedores.index')}}">Voltar</a>
        
    </div>
   
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="card p-5">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                <form action="{{route('fornecedores.store')}}" method="POST">@csrf
                    <label for="">Nome</label>
                    <div class="input-group mb-4 input-group-outline">
                        <label class="form-label">Nome</label>
                        <input type="text" required name="nome" class="form-control">
                    </div>
                    <label for="">CNPJ</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">CNPJ</label>
                        <input type="text" required name="cnpj" class="form-control">
                      </div>
                      <label for="">Endereço</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Endereço</label>
                        <input type="text" required name="endereco" class="form-control">
                      </div>
                      <label for="">Número</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Número</label>
                        <input type="text" required name="numero" class="form-control">
                      </div>
                      <label for="">Bairro</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Bairro</label>
                        <input type="text" required name="bairro" class="form-control">
                      </div>
                      <label for="">Cidade</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Cidade</label>
                        <input type="text" required name="cidade" class="form-control">
                      </div>
                      <label for="">CEP</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">CEP</label>
                        <input type="text" required name="cep" class="form-control">
                      </div>
                      <label for="">Email</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Email</label>
                        <input type="text"  name="email" class="form-control">
                      </div>
                      <label for="">Telefone</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Telefone</label>
                        <input type="text" required name="telefone" class="form-control">
                      </div>

                      <div class="input-group mb-4 d-flex w-100 justify-content-end input-group-outline">
                        <button class="btn btn-primary">Concluído</button>
                      </div>
                </form>
                
              </div>
        </div>
        
       
      </div>
      
    </div>
</div>
    
@endsection
