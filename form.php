<?php
    $title = "Form";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            News Form
        </div>
        <div class="card-body">
            <form action="database/form_parse.php" method="Post">
                <label>Type of the News</label> <br>
                <input type="radio" name="type_id" value=1> Sports <br>
                <input type="radio" name="type_id" value=2> Finance <br>
                <input type="radio" name="type_id" value=3> Politics <br>
                <input type="radio" name="type_id" value=6> Advertisement <br>
                <input type="radio" name="type_id" value=8> Announcement <br>
                <input type="radio" name="type_id" value=4> Interview <br>
                <input type="radio" name="type_id" value=5> Editorial<br>
                <input type="radio" name="type_id" value=7> Horoscope <br>
        
                <label>News Topic </label><br>
                <input type="text" name="news_topic"><br>

                <label>News Content</label><br>
                <textarea name="news_content" rows="15" cols="55">
                </textarea><br>

                <label>Source</label><br>
                <input type="text" name="source" placeholder="if any"><br>

                <button type="submit" name="news_submit">Post</button>
    
            </form>
        </div>

    </div>
</div>

<?php include 'partial_lower.php'; ?>
