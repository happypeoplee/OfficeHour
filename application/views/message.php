<?php if ($this->session->has_userdata('sukses')) { ?>
    <div class="sukses" data-flashdata="<?php echo $this->session->flashdata('sukses'); ?>"></div>
<?php
}
unset($_SESSION['sukses']); ?>

<?php if ($this->session->has_userdata('gagal')) { ?>
    <div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<?php
}
unset($_SESSION['gagal']); ?>