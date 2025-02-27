<?php 
    
    require ("../system/DatabaseConnector.php");

    if (isset($_POST['id'])) {
        $id = sanitize($_POST['id']);

        $sql = "
            SELECT * FROM xpto_transactions 
            WHERE transaction_id = ?
        ";
        $statement = $dbConnection->prepare($sql);
        $statement->execute([$id]);
        $count_row = $statement->rowCount();
        $result = $statement->fetchAll();

?>
<?php ob_start(); ?>
    <div class="modal fade" id="details-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailsBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailsModalLabel">Modal title</h1>
                <button type="button" class="btn-close" onclick="closeModal()" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if ($count_row > 0): echo $id; ?>

                <?php else: ?>
                    No data.
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

<?php        
        }
?>

<script>
function closeModal() {
        $('#details-modal').modal('hide');
        setTimeout(function() {
            $('#details-modal').remove();
            $('.modal-backdrop').remove();
        }, 500);
    }
</script>

<?php echo ob_get_clean(); ?>
