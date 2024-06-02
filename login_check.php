<?php
session_start();
include('config.php');

if (!isset($_SESSION['client_id'])) {
?>
    <html>
    <script type='text/javascript'>
        alert('Please sign in to access the page');
        window.location.href = '<?php echo SITEURL; ?>index.php';
    </script>

    </html>
<?php
    exit();
}
?>