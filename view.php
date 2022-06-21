<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>掲示板 v03</title>
    
<style>
html,body {
    height: 100%;
}

body {
    margin: 0;
}
#head {
    width: 100%;
    height: <?= $view_head_height ?>px;
    background-color: #fff;
}
#extend {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: calc( 100% - 3px );
    height: calc( 100% - <?= $view_head_height ?>px - 2px );
    border: solid 2px #c0c0c0;
}

#body {
    width: 800px;
    height: 80px;
}
</style>

</head>

<body>
<div id="head">
    <h3 class="alert alert-primary">
        <a href="control.php">掲示板</a>
        <a href=".." style="float:right;text-decoration:none;">📂</a>
    </h3>
    <div id="content"
        class="m-4">
        <form action=""
            target="myframe"
            method="POST">
            <div>
                <span style='display:inline-block;width:100px;'>
                    件名
                </span>
                <input
                    type="text"
                    name="message"
                    style='width:600px;'
                    >
                <input
                    type="submit"
                    name="send"
                    value="投稿"
                    class="ms-3"
                    >
            </div>
            <div>
                <span style='display:inline-block;width:100px;'>
                    ユーザ
                </span>
                <input
                    type="text"
                    name="user"
                    style='width:600px;'
                    >
            </div>
            <div>
                <textarea id="body" name="body"></textarea>
            </div>
        </form>
    </div>
</div>

<iframe id="extend" src="init_page.php" name="myframe"></iframe>

</body>
</html>
