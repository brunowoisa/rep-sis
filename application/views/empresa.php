<div class="col-md-12">
    <h2>Empresa</h2>   

    <?php
    if(isset($result)){
        if($result == 'success'){
        ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Sucesso!</strong> Dados alterados com Sucesso.
            </div>
        <?php
        }elseif($result == 'danger'){
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Atenção!</strong> Nenhum dado foi alterado.
            </div>
        <?php
        }
    }
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            Dados da Empresa:
        </div>
        <div class="panel-body">
            <form role="form" method="POST">
                <div class="col-md-6">
                    <label>Razão Social</label>
                    <input class="form-control" placeholder="Razão Social não cadastrada..." name="razao" value="<?php if(isset($empresa->razao_social)){ echo $empresa->razao_social;} ?>"/>
                    <br>
                    <label>Nome Fantasia</label>
                    <input class="form-control" placeholder="Nome Fantasia não cadastrado..." name="fantasia" value="<?php if(isset($empresa->nome_fantasia)){ echo $empresa->nome_fantasia;} ?>"/>
                    <br>
                    <label>CNPJ</label>
                    <input class="form-control" placeholder="CNPJ não cadastrado..." name="cnpj" value="<?php if(isset($empresa->cnpj)){ echo $empresa->cnpj;} ?>"/>
                    <br>
                    <label>Inscrição Estadual</label>
                    <input class="form-control" placeholder="IE não cadastrada..." name="ie" value="<?php if(isset($empresa->ie)){ echo $empresa->ie;} ?>"/>
                    <br>
                    <label>Inscrição Municipal</label>
                    <input class="form-control" placeholder="IM não cadastrada..." name="im" value="<?php if(isset($empresa->im)){ echo $empresa->im;} ?>"/>
                    <br>
                    <label>Telefone</label>
                    <input class="form-control" placeholder="Telefone não cadastrado..." name="telefone" value="<?php if(isset($empresa->telefone)){ echo $empresa->telefone;} ?>"/>
                    <br>
                </div>
                <div class="col-md-6">
                    <label>Endereço</label>
                    <input class="form-control" placeholder="Endereço não cadastrado..." name="endereco" value="<?php if(isset($empresa->endereco)){ echo $empresa->endereco;} ?>"/>
                    <br>
                    <label>Bairro</label>
                    <input class="form-control" placeholder="Bairro não cadastrado..." name="bairro" value="<?php if(isset($empresa->bairro)){ echo $empresa->bairro;} ?>"/>
                    <br>
                    <label>Cidade</label>
                    <input class="form-control" placeholder="Cidade não cadastrada..." name="cidade" value="<?php if(isset($empresa->cidade)){ echo $empresa->cidade;} ?>"/>
                    <br>
                    <label>CEP</label>
                    <input class="form-control" placeholder="CEP não cadastrad..." name="cep" value="<?php if(isset($empresa->cep)){ echo $empresa->cep;} ?>"/>
                    <br>
                    <label>UF</label>
                    <input class="form-control" placeholder="UF não cadastrada..." name="uf" value="<?php if(isset($empresa->uf)){ echo $empresa->uf;} ?>"/>
                    <br>
                    <label>Site</label>
                    <input class="form-control" placeholder="Site não cadastrado..." name="site" value="<?php if(isset($empresa->site)){ echo $empresa->site;} ?>"/>
                    <br>

                    <p style="text-align: right;"><input type="submit" class="btn btn-primary" value="Salvar"/></p>
                </div>
            </form>
        </div>
    </div>

</div>
