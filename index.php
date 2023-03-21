<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
    <meta charset="utf-8">
    <title>Làm bài thi trắc nghiệm</title>
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
    crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity=
    "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity=
    "sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity=
    "sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container">
        <div class="panel panel-primary">
            <div class="panel-heading">Làm bài thi</div>
            <div class="panel-body">
                <div class = "row">

                    <div class = "col-sm-12 text-right">
                        <button type = "button" name = "button"class = "btn btn-success" id = "btnStart">Bắt đầu thi</button>
                    </div>       
                    </div>
                    <div id = "questions"></div>
                    <div class = "row">
                        <div class = "col-sm-12 text-center">
                            <button type = "button" class = "btn btn-warning" id = "btnFinish">Kết thúc bài thi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type = "text/javascript">
    $(document).ready(function(){
        $('#btnFinish').hide();
    });

    $('#btnStart').click(function(){
        GetQuestions();
        $('#btnFinish').show();
        $('#questions').show();
        $(this).hide();
    });

    $('#btnFinish').click(function(){
        $(this).hide();
        $('#btnStart').show();
        CheckResult();
    });

    function CheckResult(){
        $('#questions').hide();
        alert(1);
    };

    function GetQuestions(){
        $.ajax({
            url:'questions.php',
            type:'get',
            success:function(data){
                $('#questions').html(data);

            }
        })
    }
</script>