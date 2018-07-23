<?php
    $title = "Form";
?>

<?php include'partial_upper.php'; ?>

<div class="container col-sm-5">
    <div class="card">
        <div class="card-header"> <b>Publish News </b> </div>
        <div class="card-body">
            <form class = "form" action="database/form_parse.php" method="Post">
                <div class="form-group">
                    <label>Type of the News</label> <br>
                    <select  class="form-control" name = "type_id">
                    <option value=1> Sports </option>
                    <option value=2> Finance </option>
                    <option value=3> Politics </option>
                    <option value=6> Advertisement </option>
                    <option value=8> Announcement </option>
                    <option value=4> Interview </option>
                    <option value=5> Editorial</option>
                    <option value=7> Horoscope </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>News Author </label><br>
                    <input type="text" class="form-control" name="news_author">
                </div>
                <div class="form-group">
                    <label>News Topic </label><br>
                    <input type="text"  class="form-control" name="news_topic"><br>
                </div>
                <div class="form-group">
                    <label>News Content</label><br>
                    <textarea name="news_content"  class="form-control" rows="15" cols="55">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Source</label><br>
                    <input type="text"  class="form-control" name="source" placeholder="if any"><br>
                </div>

                <button class =  "btn btn-primary" type="submit" name="news_submit"> Publish </button>
           
            </form>
        </div>
    </div>
</div>

<?php include 'partial_lower.php'; ?>
