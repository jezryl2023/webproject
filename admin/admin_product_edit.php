<?php
    include('header.php');
    include('connect.php');

    if(isset($_GET['uid'])){
        $query = "SELECT prod_id, prod_name, prod_type, prod_price FROM product WHERE prod_id=".$_GET['uid'];
        $result = $conn->query($query);
        $row = $result->fetch_object();
    }
?>


<div class="container">
        <h2 class="mt-0 pt-4">Product Info Update Form</h2>
            <form method="post">
                
            <div class="form-outline mb-4">
                <input type="text" id="id" class="form-control" name="ucode" placeholder="Product Id" value="<?php echo $row->prod_id; ?>" readonly> 
            </div>

            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="product" class="form-control" name="fname" placeholder="Product" value="<?php echo $row->prod_name;?>">
                    </div>
                </div>
                    <div class="col">
                        <div class="form-outline">
                        <input type="text" id="type" class="form-control" name="lname" placeholder="Type" value="<?php echo $row->prod_type;?>">
                        </div>
                    </div>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="price" class="form-control" name="address" placeholder="Price" value="<?php echo $row->prod_price;?>"> 
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4" name="" id="btnUpdate">Update</button>
            </form>
        </div>

        <script type="text/javascript">
            $(function(){
                $('#btnUpdate').click(function(){
                    $.post("admin_product_edit_query.php",{
                        "id": $("#id").val(),
                        "product": $("#product").val(),
                        "type": $("#type").val(),
                        "price": $("#price").val()
                    },
                    function(data, Status){
                        console.log(data);
                        location.href="admin_product.php";
                    });
                });
            });
        </script>
<?php
    include('footer.php');
?>