<?php $this->load->view("layout/sidebar"); ?>
<div id="content">
    <?php $this->load->view("layout/navbar") ?>
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/') ?>">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle ?></li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href='<?php echo base_url('os/novo') ?>' title='Cadastrar nova OS' class='btn btn-success rounded btn-sm '><i class="fas fa-plus"></i>&nbsp; Nova ordem</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Valor Total</th>
                                <th>Pagamento</th>
                                <th class='text-center'>Data de emissão</th>
                                <th class='text-center'>Situação</th>
                                <th class='text-center no-sort'>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ordens_servicos as $os) : ?>

                                <tr>
                                    <td><?php echo $os->cliente_nome ?></td>
                                    <td><?php echo 'R$&nbsp;' . $os->ordem_servico_valor_total ?></td>
                                    <td><?php echo ($os->ordem_servico_status == 1 ? $os->forma_pagamento : 'Aguardando pagamento') ?></td>
                                    <td class='text-center'><?php echo formata_data_banco_com_hora($os->ordem_servico_data_emissao) ?></td>
                                    <td class='text-center pr-4'>
                                        <?php echo ($os->ordem_servico_status == 1 ?
                                            '<span class="badge badge-success btn-sm">Finalizada</span>'
                                            :
                                            '<span class="badge badge-dark btn-sm">Em aberto</span>') ?>
                                    </td>
                                    <td class='text-center'>
                                        <a title="Imprimir" href="<?php echo base_url('os/pdf/' . $os->ordem_servico_id) ?>" class="btn btn-outline-dark rounded btn-sm"><i class="fas fa-print"></i></a>
                                        <a title="Editar" href="<?php echo base_url('os/edit/' . $os->ordem_servico_id) ?>" class="btn btn-outline-primary rounded btn-sm"><i class="fas fa-pen"></i></a>
                                        <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#user-<?php echo $os->ordem_servico_id ?>" class="btn btn-outline-danger rounded btn-sm"><i class="fas fa-trash"></i></i></a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="user-<?php echo $os->ordem_servico_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Deletar OS</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Deseja mesmo <strong>deletar</strong> a ordem de serviço? Esta ação não pode ser desfeita!</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url('os/del/' . $os->ordem_servico_id) ?>">Deletar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
            if ($message = $this->session->flashdata('error')) {
                echo "<script>toastr.error('" . $message . "');</script>";
            }

            if ($message = $this->session->flashdata('success')) {
                echo "<script>toastr.success('" . $message . "');</script>";
            }
            ?>
        </div>
    </div>
</div>