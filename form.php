<?php
    $title = "Form";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
    <div class="card">
        <div class="card-header"> <b>Publish News </b> </div>
        <div class="card-body">
            <form class = "form" action="database/form_parse.php" method="Post">
                <div class="form-group">
                    <label>Type of the News</label> <br>
                    <input type="radio" name="type_id" value=1> Sports <br>
                    <input type="radio" name="type_id" value=2> Finance <br>
                    <input type="radio" name="type_id" value=3> Politics <br>
                    <input type="radio" name="type_id" value=6> Advertisement <br>
                    <input type="radio" name="type_id" value=8> Announcement <br>
                    <input type="radio" name="type_id" value=4> Interview <br>
                    <input type="radio" name="type_id" value=5> Editorial<br>
                    <input type="radio" name="type_id" value=7> Horoscope <br>
                </div>
                <div class="form-group">
                    <label>News Topic </label><br>
                    <input type="text" name="news_topic"><br>
                </div>
                <div class="form-group">
                    <label>News Content</label><br>
                    <textarea name="news_content" rows="15" cols="55">
                    </textarea>
                </div>

                <div class="form-group">
                    <label>Source</label><br>
                    <input type="text" name="source" placeholder="if any"><br>
                </div>

                <button class =  "btn btn-primary" type="submit" name="news_submit"> Publish </button>
           
            </form>
        </div>
    </div>
</div>

<?php include 'partial_lower.php'; ?>
