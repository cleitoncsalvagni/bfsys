<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto">

    <?php if ($this->ion_auth->is_admin()) : ?>


      <?php if (isset($contador_notificacoes) && $contador_notificacoes > 0) : ?>

        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle blink_me" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw text-gray-900"></i>

            <span class="badge badge-danger badge-counter"><?php echo $contador_notificacoes; ?></span>
          </a>

          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
              CENTRAL DE NOTIFICAÇÕES
            </h6>

            <?php if ($contas_receber_vencidas) : ?>

              <a title="Gerenciar contas a receber" class="dropdown-item d-flex align-items-center" href="<?php echo base_url('receber'); ?>">
                <div class="mr-3">
                  <div class="icon-circle bg-danger">
                    <i class="fas fa-hand-holding-usd fa-lg text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora(date('Y-m-d')); ?></div>
                  <span class="font-weight-bold">Existem contas a receber vencidas!</span>
                </div>
              </a>
            <?php endif; ?>

            <?php if ($contas_pagar_vencidas) : ?>

              <a title="Gerenciar contas a pagar" class="dropdown-item d-flex align-items-center" href="<?php echo base_url('pagar'); ?>">
                <div class="mr-3">
                  <div class="icon-circle bg-danger">
                    <i class="fas fa-money-bill-alt fa-lg text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora(date('Y-m-d')); ?></div>
                  <span class="font-weight-bold">Existem contas a pagar vencidas!</span>
                </div>
              </a>
            <?php endif; ?>

            <?php if ($contas_pagar_vencem_hoje) : ?>

              <a title="Gerenciar contas a pagar" class="dropdown-item d-flex align-items-center" href="<?php echo base_url('pagar'); ?>">
                <div class="mr-3">
                  <div class="icon-circle bg-warning">
                    <i class="fas fa-money-bill-alt fa-lg text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora(date('Y-m-d')); ?></div>
                  <span class="font-weight-bold">Existem contas a pagar que vencem hoje!</span>
                </div>
              </a>
            <?php endif; ?>

            <?php if ($contas_receber_vencem_hoje) : ?>

              <a title="Gerenciar contas a pagar" class="dropdown-item d-flex align-items-center" href="<?php echo base_url('receber'); ?>">
                <div class="mr-3">
                  <div class="icon-circle bg-warning">
                    <i class="fas fa-hand-holding-usd fa-lg text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora(date('Y-m-d')); ?></div>
                  <span class="font-weight-bold">Existem contas a receber que vencem hoje!</span>
                </div>
              </a>
            <?php endif; ?>



            <?php if ($usuarios_desativados) : ?>

              <a title="Gerenciar usuários" class="dropdown-item d-flex align-items-center" href="<?php echo base_url('usuarios'); ?>">
                <div class="mr-3">
                  <div class="icon-circle bg-info">
                    <i class="fas fa-users fa-lg text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500"><?php echo formata_data_banco_sem_hora(date('Y-m-d')); ?></div>
                  <span class="font-weight-bold">Existem usuários desativados!</span>
                </div>
              </a>
            <?php endif; ?>



          </div>

        </li>

      <?php endif; ?>
    <?php endif; ?>


    <div class="topbar-divider d-none d-sm-block"></div>


    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <?php $user = $this->ion_auth->user()->row(); ?>

        <span class="mr-2 d-none d-lg-inline text-gray-900"><?php echo $user->first_name; ?> </span>
        <img class="img-profile rounded-circle" src="<?php echo base_url('public/img/bfsys_logo_icon.svg') ?>">
      </a>

      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo base_url('usuarios/edit/' . $this->session->userdata('user_id')); ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-900"></i>
          Perfil
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
          Sair
        </a>
      </div>
    </li>

  </ul>

</nav>