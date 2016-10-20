<?php
/** este arquivo carrega as views necessárias para o
  profissional 
 */
$this->load->view('includes/header.php');
$this->load->view('farmaceutico/menu_bar');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php $this->load->view($content) ?>
    </section>

    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<?php
$this->load->view('includes/footer.php');
?>