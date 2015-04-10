<html>
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <style>
        body{
            margin-top: 5%;
            margin-left: 30%;
            margin-right: 30%;
        }
        select {
            width: 100%;
        }
        input[type=date] {
            width: 100%;
        }
        input[type=text] {
            width: 100%;
        }
        .datepickr-wrapper.open,.datepickr-wrapper {
            width: 100% !important;
        }
    </style>
        <script>
            $(function() {
                $( "#datepicker" ).datepicker();
            });
        </script>
    </head>
    <body>
    <fieldset>
        <legend>Appointment Form</legend>
        <table border="0" style="width: 100%">
            <tr style="color: red">
                <td colspan="2">
                    <?php
                    if($message != '')
                    {
                        echo $message;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <form method="POST" action="">
                    <td>First name</td>
                    <td> &nbsp;</td>
            </tr>
            <tr>
                <td>Last name</td>
                <td> &nbsp;</td>
            </tr>
            <tr>
                <td>Date</td>
                <td> &nbsp;</td>
            </tr>
            <tr>
                <td>Time</td>
                <td>
                    <select name="time">
                        <option value="0">Select time</option>
                        <?php
                        if($result->num_rows >0)
                        {
                            while($row = $result->fetch_assoc())
                            {
                                echo '<option '.($row['id'] == $time?'selected':'').' value="'.$row['id'].'">'.$row['time'].'</option>';
                            }
                        }
                        ?>
                    </select>
                </td>

            </tr>
            <tr>
                <?php
                    if(!$id == '')
                    {
                        echo '<input type="hidden" name="id" value="'.$id.'">';
                    }
                ?>

                <td colspan="2"><input style="float: right" id="button" type="submit" name="action" value="<?php echo ($id == ''?'save appointment':'reschedule appointment'); ?>"></td>
            </tr> 
        </table> </fieldset>
    </body>

</html>