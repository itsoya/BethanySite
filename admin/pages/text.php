<?php
require "php/check_login.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bethany Negash Admin - Paypal Donations</title>
        <?php require "php/templates/heading.php";?>
    </head>
    <body>
        <div id="wrapper">
            <?php require "php/templates/nav.php";?>
            <body>
                <h2>Show and Hide Columns in a Table</h2>
                <p>Click on each Checkbox to hide corresponding Column</p>
                <div id="grpChkBox">
                    <ul>
                        <li><input type="checkbox" name="empid" /> Employee ID</li>
                        <li><input type="checkbox" name="fname" /> First Name</li>
                        <li><input type="checkbox" name="lname" /> Last Name</li>
                        <li><input type="checkbox" name="email" /> Email</li>
                        <li><input type="checkbox" name="phone" /> Phone</li>
                    </ul>
                </div>
                <table id="someTable">
                    <thead>
                        <tr>
                            <th class="empid">EmpId</th>
                            <th class="fname">First Name</th>
                            <th class="lname">Last Name</th>
                            <th class="email">Email</th>
                            <th class="phone">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="empid">E342</td>
                            <td class="fname">Bill</td>
                            <td class="lname">Evans</td>
                            <td class="email">Bill@devcurry.com</td>
                            <td class="phone">234-2345-2345</td>
                        </tr>
                        <tr>
                            <td class="empid">E343</td>
                            <td class="fname">Laura</td>
                            <td class="lname">Matt</td>
                            <td class="email">laura@devcurry.com</td>
                            <td class="phone">123-1234-5678</td>
                        </tr>
                        <tr>
                            <td class="empid">E344</td>
                            <td class="fname">Ram</td>
                            <td class="lname">Kumar</td>
                            <td class="email">ram@devcurry.com</td>
                            <td class="phone">345-3456-7890</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
    Type
        <select name="type" id="type" style="margin-left:57px; width:153px;">
                <option ame="l_letter" value="l_letter">Large Letter</option>
                <option name="letter" value="letter">Letter</option>
                <option name="parcel" value="parcel">Parcel</option>
        </select>
</div>

<div class="row" id="row_dim">
    Dimensions
        <input type="text" name="length" class="dimension" placeholder="Length">
        <input type="text" name="width" class="dimension" placeholder="Width">
        <input type="text" name="height" class="dimension" placeholder="Height">
</div>
            </div>
            <!-- /#wrapper -->
            <?php require "php/templates/footing.php";?>
            <script>
            $(function () {
            var $chk = $("#grpChkBox input:checkbox");
            var $tbl = $("#someTable");
            $chk.prop('checked', true);
            $chk.click(function () {
            var colToHide = $tbl.find("." + $(this).attr("name"));
            $(colToHide).toggle();
            });
            });
            $(function() {
    $('#row_dim').hide();
    $('#type').change(function(){
        if($('#type').val() == 'parcel') {
            $('#row_dim').show();
        } else {
            $('#row_dim').hide();
        }
    });
});
            </script>
        </body>
    </html>