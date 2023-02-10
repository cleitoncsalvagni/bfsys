<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <!-- <span>Copyright &copy; BFSYS <?php echo date('Y') ?></span> -->
      <span>Copyright &copy; BFSYS <?php echo date('Y') ?> | Por Cleiton Salvagni</span>
    </div>
  </div>
</footer>


</div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are reFady to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url("public/vendor/jquery/jquery.min.js"); ?>"></script>

<script src="<?php echo base_url("public/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

<script src="<?php echo base_url("public/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>

<script src="<?php echo base_url("public/js/sb-admin-2.min.js") ?>"></script>


<?php if (isset($scripts)) : ?>

  <?php foreach ($scripts as $script) : ?>

    <script src="<?php echo base_url("public/" . $script); ?>"></script>

  <?php endforeach; ?>

<?php endif; ?>

</body>

</html>