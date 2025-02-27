<?php 
    
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/garypie/db_connection/conn.php");

    if (isset($_POST['id'])) {
        $product_id = sanitize($_POST['id']);

        $sql = "
            SELECT * FROM garypie_product 
            INNER JOIN garypie_category 
            ON garypie_product.product_category = garypie_category.category_id 
            INNER JOIN garypie_brand 
            ON garypie_product.product_brand = garypie_brand.brand_id 
            WHERE garypie_product.product_id = ? 
            AND garypie_product.product_trash = ? 
            AND garypie_category.category_trash = ?
            LIMIT 1
        ";
        $statement = $conn->prepare($sql);
        $statement->execute([$product_id, 0, 0]);
        $count_row = $statement->rowCount();
        $result = $statement->fetchAll();
        
        if ($count_row > 0) {

?>
<?php ob_start(); ?>
<?php
            foreach ($result as $row) {
               $sizeString = $row['product_sizes']; 
               $size_array = explode(',', $sizeString); 
?>

    <!-- Product -->
    <div class="modal fade" id="details-modal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" onclick="closeModal()">
                    <i class="fe fe-x" aria-hidden="true"></i>
                </button>
        
                <!-- Content -->
                <div class="container-fluid px-xl-0">
                    <div class="row align-items-center mx-xl-0">
                        <div class="col-12 col-lg-6 col-xl-5 py-4 pb-0 pt-0 py-xl-0 px-xl-0">
                            <?php $product_images = explode(",", $row['product_image']); ?>
                            <img class="img-fluid" src="<?=  $product_images[0]; ?>" alt="...">
                            <a class="btn btn-sm w-100 btn-secondary" href="<?= PROOT; ?>store/products/<?= $row['product_url']; ?>">
                                More Product Info <i class="fe fe-info ms-2"></i>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-7 py-9 px-md-9">
                            <span class="ms-1 text-danger" id="cart_errors"></span>
                             <div class="row mb-1">
                                <div class="col">
                                    <a class="badge bg-info" href="<?= PROOT; ?>store/brand/<?= $row['brand_url']; ?>"><?= ucwords($row['brand_name']); ?></a>
                                    <br>
                                    <a class="text-muted" href="<?= PROOT; ?>store/category/<?= $row['category_url']; ?>"><?= ucwords($row['category']); ?></a>
                                </div>
                            </div>
                            <h4 class="mb-3"><?= ucwords($row['product_name']); ?></h4>
                            <div class="mb-7">
                                <span class="h5"><?= money($row['product_price']); ?></span>
                            </div>

                            <?php if (!remove_add_to_cart_button_on_soldOut($product_id)): ?>

                            <form id="add_product_form" method="POST" action="parsers/add_to_cart.php">
                                <input type="hidden" name="pmsue9JDDSi" id="pmsue9JDDSi" value="<?= $product_id; ?>">
                                <input type="hidden" name="ue8nEvVYrS1210Zpni" id="ue8nEvVYrS1210Zpni" value="<?= ((user_is_logged_in()) ? $user_data['user_id'] : 0); ?>">
                                <input type="hidden" name="available" id="available" value="">

                                <div class="form-group mb-0">
                                    <div class="row gx-5 mb-7">
                                        <div class="col-12 col-lg-auto">
                                            <label for="size">Size:</label>
                                            <select name="size" id="size" class="form-control form-control-sm">
                                                <option value=""></option>
                                                <?php 
                                                    foreach ($size_array as $string) { 
                                                        $string_array = explode(':', $string);
                                                        $size = $string_array[0];
                                                        $available = $string_array[1];
                                                        if ($available > 0) {
                                                            echo '
                                                                <option value="'.$size.'" data-available='.$available.'>'.$size.' ('.$available.' Available)</option>
                                                            ';
                                                        }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="row gx-5">
                                        <div class="col-12 col-lg-auto">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" min="1" autocomplete="off" inputmode="numeric" class="w-100 form-control form-control-sm mb-2" name="quantity" id="quantity" oninput="validatePositiveNumber(this)">
                                            <input type="hidden" class="w-100 form-control form-control-sm mb-2" name="order_number" id="order_number">
                                        </div>
                                        
                                        <div class="col-12 col-lg">
                                            <label for="quantity"></label>
                                            <button onclick="add_to_cart(); return false;" class="btn w-100 btn-dark mb-2" id="add-m-cart">
                                                Add to Cart <i class="fe fe-shopping-cart ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php else: ?>
                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">SOLD OUT!</h4>
                                    <p>Aww, we are sorry to inform you that this product is sold out. You can comb through our site to find other options.</p>
                                    <hr>
                                    <p class="mb-0">Click <a href="<?= PROOT; ?>store/products">here</a> to find related or similar products.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php        
            }
        }
    }
?>

<script>
     $('#size').change(function() {
        var available = $('#size option:selected').data("available");
        $('#available').val(available);
    })

    function closeModal() {
        $('#details-modal').modal('hide');
        setTimeout(function() {
            $('#details-modal').remove();
            $('.modal-backdrop').remove();
        }, 500);
    }
</script>

<?php echo ob_get_clean(); ?>