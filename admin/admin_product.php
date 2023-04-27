<?php
    include ("header.php");
?>

<!-- start of user table -->
<div class="container " style="width: 70vw; display-flex: center; align-items: center; justify-content: center; position: center; margin-left: 210px;">
        <div class="row mt-5">
            <div class=" col-md-3">
                <button class="input-group-text bg-primary" type="button" id="Add" >Add</button>
            </div>

            <div class="col-md-9">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="product search" id="keyword">
                    <span class="input-group-text bg-primary" type="submit" id="btnSearch"><i class="bi bi-search"i>Search</i></span>
                </div>
            </div>
        </div>

        <div class="card">
            <table class="m-0 table table-striped table-hover text-center">
                <thead class="text-darker border-bottom border-dark shadow" style="">
                    <th>Id</th>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Price</th>
                </thead>

                <tbody id="productlist">
                </tbody>

            </table>
        </div>

    </div>
    <!-- end of user table -->

    <script type = "text/javascript">
        
        $(function(){
            function search(keyw){
                let url = "admin_product_query.php";
                if(keyw != ""){
                    url += "?prodneym=" + keyw;
                }
                
                $("#productlist").html("");

                $.getJSON(url,function(data,status){
                    $.each(data,function(key,value){
                        $("#productlist").append("<tr code='" + value.prod_id + "'><td>" + value.prod_id + "</td><td>" + value.prod_name +"</td><td> "+ value.prod_type + "</td><td>"+ value.prod_price + "</td><td><button class='btn btn-success btnEdit btn-sm mx-2'><i class='bi bi-pencil'></i></button></td></tr>"); 
                    });
                    $(".btnEdit").click(function(){
                        location.href = "admin_product_edit.php?uid=" + $(this).parent().parent().attr("code");
                    });
                });
            }

            $("#btnSearch").click(function(){
                search($("#keyword").val());
            });
            search("");

            $("#keyword").on("keyup", function(){
                var value = $(this).val().toLowerCase();
                $("table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            $("#Add").click(function(){
                location.href = "admin_product_add.php";
            });

            
        });
    </script>

<script>
    <?php
        include ("footer.php")
    ?>
</script>