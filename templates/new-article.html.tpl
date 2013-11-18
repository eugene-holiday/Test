<h2>Create new article</h2>
<div class="row">
    <div class="col-md-4">
        <form role="form" id="articleForm">
            <div class="form-group">
                <label for="inputTitle" >Title</label>
                <input name="title" type="text" class="form-control" id="inputTitle" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <input name="category" type="text" class="form-control" id="inputCategory" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input name="author" type="text" class="form-control" id="inputAuthor" >
            </div>
            <div class="form-group">
                <label for="inputDate">Date</label>
                <div class='input-group date' id='inputDate'>
                    <input name="intake_date" type='text' class="form-control" data-format="YYYY/MM/DD" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#inputDate').datetimepicker({
                            pickTime: false
                        });
                    });
                </script>
            </div>

            <button type="submit" class="btn btn-default" id="submitBtn">Submit</button>
        </form>
    </div>
</div>

<script>
    $("#submitBtn").on("click", function() {

        url = "create_article.php";
        data = $("#articleForm").serialize();
        console.log(data);
        console.log("submit");
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            cache: false,
            success: function(data)
            {
                console.log("submit: success "+data)
            }
        });

        return false;
    });
</script>