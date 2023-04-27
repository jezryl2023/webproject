<?php
include("header.php");
?>
<div class="container-fluid">
<div class="row d-flex">
    <div class=" col-2 mt-5">
        <button class="btn btn-outline-success" type="submit" id="Add"><i class="bibi-plus"i></i>New product</button>
    </div>

    <div class="col-10 mt-5">
        <div class="input-group mb-3 ">
            <input type="text" name="" id="keyword" class="form-control" placeholder="Search">
            <span class="input-group-text" type="submit" id="btnSearch"></span>
        </div>
    </div>
</div>

<div>
    <table class="mt-3 table table-striped table-hover" id="table">
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
</main>

<script type = "text/javascript">
    
    $(function(){
        function search(name){
            let url = "prodlistquery.php";

            if(name != ""){
                url += "?prodneym=" + name;
            }
            $("#userlist").html("");

            $.getJSON(url,function(data,status){
                $.each(data,function(key,value){
                    $("#userlist").append("<tr><td>" + value.user_id + "</td><td>" + value.user_fname +"</td><td> "+ value.user_lname + "</td><td>"+ value.user_address + "</td><td>" + value.user_email + "</td></tr>");
                });
            });
        }
        
        $("#btnSearch").click(function(){
            search($("#keyword").val());
        });
        search("");

        $("#keyword").on("keyup", function(){
            var value = $(this).val().toLowerCase();
            $("#table tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        $("#signup").click(function(){
            location.href = "signup.php";
        })
    });
</script>
<?php
include("footer.php");
?>