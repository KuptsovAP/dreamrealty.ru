<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE> New Document </TITLE>
        <META NAME="Generator" CONTENT="EditPlus">
        <META NAME="Author" CONTENT="">
        <META NAME="Keywords" CONTENT="">
        <META NAME="Description" CONTENT="">
        <style type="text/css">
            .error{background: red;}
        </style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#go').click(function () {

                    var LYC = $.trim($('#lyc').val());
                    var Pas = $.trim($('#pass').val());
                    var HASH = $.trim($('#hash').val());

                    if (Pas.length < 3)
                        $("#pass").addClass("error");
                    else
                        $("#pass").removeClass("error");

                    if (HASH.length < 3)
                        $("#hash").addClass("error");
                    else
                        $("#hash").removeClass("error");

                    if (Pas.length > 3 && HASH.length > 3)
                    {

                        $.ajax({
                            type: 'POST',
                            url: 'action.php',
                            data: {sys_lic: LYC, sys_pass: Pas, sys_hash: HASH},
                            error: function (req, text, error) {
                                alert('Ошибка AJAX: ' + text + ' | ' + error);
                            },
                            success: function (data) {
                                // в data[0] - содержит значение $success
                                if (data[0]) {
                                    $("#insert").replaceWith("<em>Выполнено...</em> ");
                                    $("#resul").show();
                                    //  alert(data[1] + ', ВЫПОЛНЕНО!');
                                } else {
                                    alert('Ошибка!');
                                }
                            },
                            dataType: 'json'
                        });
                    }

                });
            });

        </script>

    </HEAD>

    <BODY>

        <div id="insert">
            <form action="#" method="post">
                <div>
                    <label>Лицензионный ключ</label>
                    <input type="text" id="lyc"  value="" />
                </div>
                <div>
                    <label>ХЭШ из define.php</label>
                    <input type="text" id="hash"  value="" />
                </div>
                <div>
                    <label>Значение из таблицы b_option</label>
                    <input type="text" id="pass"   value="" />
                </div>
                <input type="button" id="go" value="отправить" />
            </form>
        </div>
        <div id="resul" style="display: none;">
            <a href="/" > Перейти </a>
        </div>
    </BODY>
</HTML>

