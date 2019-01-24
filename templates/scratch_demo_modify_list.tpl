    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 style="text-align:center"><{$smarty.const.AM_SCRATCH_FILE_MANAGEMENT}></h1>
        <hr>
        <div class="container" >
            <div class="row">
                <form action="../remove_sb2.php" method="POST">
                    <{securityToken}>
                    <table class="table">
                        <thead>
                        <tr>
                            <td><{$smarty.const.AM_SCRATCH_SELECT}></td>
                            <td><{$smarty.const.AM_SCRATCH_FILE_NAME}></td>
                        </tr>
                        </thead>
                        <tbody>
                            <{foreach from=$filenames item=filename}>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="which_del[]" value="<{$filename}>"/>
                                    </td>
                                    <td>
                                        <a href="../get_sb2.php?filename=<{$filename}>">
                                            <{$filename}>
                                        </a>
                                    </td>
                                </tr>
                            <{/foreach}>
                        </tbody>
                    </table>
                    <input type="submit" value="<{$smarty.const.AM_SCRATCH_REMOVE_SELECTED}>">
                </form>
            </div>
        </div>
    </body>

