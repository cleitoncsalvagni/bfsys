<?php $this->load->view("layout/sidebar"); ?>
<div id="content">
    <?php $this->load->view("layout/navbar") ?>
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('marcas') ?>">Marcas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle ?></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" name="form_novo">
                    <fieldset class='mt-4 border p-3'>
                        <legend class='small'><i class="fas fa-tags"></i>&nbsp; Informações da marca</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label>Nome da marca <strong class='text-danger'>*</strong></label>
                                <input type="text" class="form-control" name="marca_nome" placeholder="Informe o nome da marca" value="<?php echo set_value('marca_nome') ?>">
                                <?php echo form_error('marca_nome', '<small class="form-text text-danger">', '</small>') ?>

                            </div>
                        </div>
                    </fieldset>

                    <fieldset class='mt-4 border p-3 mb-3'>
                        <legend class='small'><i class="fas fa-cog"></i>&nbsp; Preferências</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-2">
                                <label>Marca ativa</label>
                                <select name='marca_ativo' class="form-control">
                                    <option value='1'>Sim</option>
                                    <option value='0'>Não</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success btn-sm ">Salvar</button>
                    <a href='<?php echo base_url($this->router->fetch_class()) ?>' title='Voltar' class='btn btn-primary btn-sm ml-2'>Voltar</a>
                </form>
            </div>
        </div>
    </div>
</div>