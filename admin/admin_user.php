<?php
    include ("header.php");
?>

<!-- start of product table -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-9">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="product search" id="keyword">
                <span class="input-group-text bg-primary" type="submit" id="btnSearch"><i class="bi bi-search"i>Search</i></span>
            </div>
        </div>
    </div>

    <div>
        <table class="mt-3 table table-striped table-hover">
            <thead>
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
            </thead>

            <tbody id="userlist">
            </tbody>

        </table>
    </div>
</div>
<!-- end of product table -->

    <script>
        let url = "admin_user_query.php";
                
        $("#userlist").html("");
    
        $.getJSON(url,function(data,status){
            $.each(data,function(key,value){
                $("#userlist").append("<tr ucode='" + value.user_id + "'><td>" + value.user_id + "</td><td>" + value.user_fname +"</td><td> "+ value.user_lname + "</td><td>"+ value.user_address + "</td><td>" + value.user_email + "</td></tr>");
            });
        });
    </script>

<script>
    <?php
        include ("footer.php");
    ?>
</script>