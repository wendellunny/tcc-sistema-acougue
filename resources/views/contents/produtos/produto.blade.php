@extends('layout.layout')

@section('title')
    Cadastrar um Novo Produto
@endsection

@section('content')

         
    <div class="d-flex w-95 justify-content-end">
        <button class="btn btn-primary" style="margin-right: 1rem" >Voltar</button>
        
    </div>
   
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="card p-5">
            <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
                <form action="">
                    <label for="">Nome</label>
                    <div class="input-group mb-4 input-group-outline">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <label for="">Preço Unitário(R$)</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Preço Unitário</label>
                        <input type="number" step="0.01" class="form-control">
                      </div>
                      <label for="">Fornecedor</label>
                      <div class="input-group mb-4  input-group-outline">
                        {{-- <label class="form-label">Fornecedor</label> --}}
                        <select name="" class="form-control" id="">
                            <option value="" disabled selected>Selecione um Fornecedor</option>
                            <option value="">Fazenda Real</option>
                            <option value="">Churrasquita</option>
                        </select>
                      </div>
                      <label for="">Quantidade em Estoque</label>
                      <div class="input-group mb-4  input-group-outline">
                        <label class="form-label">Estoque(kg)</label>
                        <input type="number" step="0.01" class="form-control">
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
