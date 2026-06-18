<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>

    <?php if (!empty($_SESSION['toast'])): ?>

    <script>

    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: '<?= $_SESSION['toast']['type'] ?>',
        title: <?= json_encode($_SESSION['toast']['message']) ?>,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });

    </script>

    <?php unset($_SESSION['toast']); ?>

    <?php endif; ?>


</body>
</html>