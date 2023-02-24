<?php $this->load->view("layout/sidebar"); ?>
<div id="content">
    <?php $this->load->view("layout/navbar") ?>
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('categorias') ?>">Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" name="form_edit">

                    <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última alteração:&nbsp;</strong><?php echo formata_data_banco_com_hora($categoria->categoria_data_alteracao) ?></p>

                    <fieldset class='mt-4 border p-3'>
                        <legend class='small'><i class="fab fa-buffer"></i>&nbsp; Informações da categoria</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-4">
                                <label>Nome da categoria</label>
                                <input type="text" class="form-control" name="categoria_nome" placeholder="Informe o nome da categoria" value="<?php echo $categoria->categoria_nome; ?>">
                                <?php echo form_error('categoria_nome', '<small class="form-text text-danger">', '</small>') ?>

                            </div>
                    </fieldset>

                    <fieldset class='mt-4 border p-3 mb-3'>
                        <legend class='small'><i class="fas fa-cog"></i>&nbsp; Preferências</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-2">
                                <label>Categoria ativa</label>
                                <select name='categoria_ativa' class="form-control">
                                    <option value='1' <?php echo ($categoria->categoria_ativa == 1 ? 'selected' : '') ?>>Sim</option>
                                    <option value='0' <?php echo ($categoria->categoria_ativa == 0 ? 'selected' : '') ?>>Não</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <input type='hidden' name='categoria_id' value="<?php echo $categoria->categoria_id; ?>">

                    <button type="submit" class="btn btn-success btn-sm ">Salvar</button>
                    <a href='<?php echo base_url($this->router->fetch_class()) ?>' title='Voltar' class='btn btn-primary btn-sm ml-2'>Voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>