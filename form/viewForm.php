<?php
    include("../admin/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    
    $id = $_GET['view'];
    $query = "SELECT * FROM forms WHERE form_id='$id' ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Form</title>
    
    <style>
        table, th, td {
            border: 2px solid grey;
            padding: 10px;
            border-collapse: collapse;
        }
        th, td {
            color:#fff;
        }
        th {
            width: 600px;
            background-color:#9DD929;
            color: #3E5260;
            text-align: left;
            
        }
        td {
            width: 1200px;
            color: #002F5E;
        }
        tr:hover {
            background-color: lightgrey;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                   <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3"> Client Form (<?php echo $row['form_id'] ?>) </h3>
                    </div>
                    <div class="card-body">

                        <!--------------   Checklist start     ------------->
                        <h4 style="text-align:center;">Checklist (Appendix I)</h4>
                        <table>
                            <tr>
                                <th>Proposed Name to search</th>
                                <td><?php echo $row['proposed_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Paid Up Capital</th>
                                <td><?php echo $row['paid_up_capital'] ?></td>
                            </tr>
                            <tr>
                                <th>Nature of Business</th>
                                <td><?php echo $row['nature_business'] ?></td>
                            </tr>
                            <tr>
                                <th>Business Address</th>
                                <td><?php echo $row['business_address'] ?></td>
                            </tr>
                        </table>
                        
                        <!--------------   First Director start     ------------->
                        <br>
                        <?php if($row['d1_name'] != '') { ?>
                        <h4>First Director</h4>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['d1_name'] ?></td>
                            </tr>
                            <tr>
                                <th>NRIC/Passport No</th>
                                <td><?php echo $row['d1_IC'] ?></td>
                            </tr>
                            <tr>
                                <th>Passport Expiry Date</th>
                                <td><?php echo $row['d1_passport_exp'] ?></td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td><?php echo $row['d1_DOB'] ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $row['d1_gender'] ?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td><?php echo $row['d1_nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Race</th>
                                <td><?php echo $row['d1_race'] ?></td>
                            </tr>
                            <tr>
                                <th>Residential Address</th>
                                <td><?php echo $row['d1_resident_add'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['d1_email'] ?></td>
                            </tr>
                            <tr>
                                <th>Share(s) taken up</th>
                                <td><?php echo $row['d1_share'] ?></td>
                            </tr>
                        </table>
                        <?php } ?>

                         <!--------------   Second Director start     ------------->
                         <br>
                        <?php if($row['d2_name'] != '') { ?>
                        <h4>Second Director</h4>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['d2_name'] ?></td>
                            </tr>
                            <tr>
                                <th>NRIC/Passport No</th>
                                <td><?php echo $row['d2_IC'] ?></td>
                            </tr>
                            <tr>
                                <th>Passport Expiry Date</th>
                                <td><?php echo $row['d2_passport_exp'] ?></td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td><?php echo $row['d2_DOB'] ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $row['d2_gender'] ?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td><?php echo $row['d2_nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Race</th>
                                <td><?php echo $row['d2_race'] ?></td>
                            </tr>
                            <tr>
                                <th>Residential Address</th>
                                <td><?php echo $row['d2_resident_add'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['d2_email'] ?></td>
                            </tr>
                            <tr>
                                <th>Share(s) taken up</th>
                                <td><?php echo $row['d2_share'] ?></td>
                            </tr>
                        </table>
                        <?php } ?>

                         <!--------------   Other Shareholder (1) start     ------------->
                         <br>
                        <?php if($row['s1_name'] != '') { ?>
                        <h4>Other Shareholder (1)</h4>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['s1_name'] ?></td>
                            </tr>
                            <tr>
                                <th>IC No./Company No.</th>
                                <td><?php echo $row['s1_IC'] ?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td><?php echo $row['s1_nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Race</th>
                                <td><?php echo $row['s1_race'] ?></td>
                            </tr>
                            <tr>
                                <th>Place of Incorporation</th>
                                <td><?php echo $row['s1_place'] ?></td>
                            </tr>
                            <tr>
                                <th>Residential Address / Registered Office Address</th>
                                <td><?php echo $row['s1_address'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['s1_email'] ?></td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td><?php echo $row['s1_contact'] ?></td>
                            </tr>
                            <tr>
                                <th>Designation (Individual) / Name of Official Corporate Representative</th>
                                <td><?php echo $row['s1_designation'] ?></td>
                            </tr>
                            <tr>
                                <th>Share(s) taken up</th>
                                <td><?php echo $row['s1_share'] ?></td>
                            </tr>
                        </table>
                        <?php } ?>

                        <!--------------   Other Shareholder (2) start     ------------->
                        <br>
                        <?php if($row['s2_name'] != '') { ?>
                        <h4>Other Shareholder (2)</h4>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['s2_name'] ?></td>
                            </tr>
                            <tr>
                                <th>IC No./Company No.</th>
                                <td><?php echo $row['s2_IC'] ?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td><?php echo $row['s2_nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Race</th>
                                <td><?php echo $row['s2_race'] ?></td>
                            </tr>
                            <tr>
                                <th>Place of Incorporation</th>
                                <td><?php echo $row['s2_place'] ?></td>
                            </tr>
                            <tr>
                                <th>Residential Address / Registered Office Address</th>
                                <td><?php echo $row['s2_address'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['s2_email'] ?></td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td><?php echo $row['s2_contact'] ?></td>
                            </tr>
                            <tr>
                                <th>Designation (Individual) / Name of Official Corporate Representative</th>
                                <td><?php echo $row['s2_designation'] ?></td>
                            </tr>
                            <tr>
                                <th>Share(s) taken up</th>
                                <td><?php echo $row['s2_share'] ?></td>
                            </tr>
                        </table>
                        <?php } ?>

                        <!--------------  PARTICULARS OF NEXT OF KIN start     ------------->
                        <br>
                        <h4>PARTICULARS OF NEXT OF KIN</h4>
                        <table>
                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['kin_name'] ?></td>
                            </tr>
                            <tr>
                                <th>IC No./Passport No.</th>
                                <td><?php echo $row['kin_IC'] ?></td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td><?php echo $row['kin_nation'] ?></td>
                            </tr>
                            <tr>
                                <th>Race</th>
                                <td><?php echo $row['kin_race'] ?></td>
                            </tr>
                            <tr>
                                <th>Residential Address / Registered Office Address</th>
                                <td><?php echo $row['kin_address'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $row['kin_email'] ?></td>
                            </tr>
                        </table>

                        <!--------------  OPENING OF COMPANY’S BANK ACCOUNT AFTER INCORPORATION start     ------------->
                        <br>
                        <h4>OPENING OF COMPANY’S BANK ACCOUNT AFTER INCORPORATION</h4>
                        <table>
                            <tr>
                                <th>Name of Bank</th>
                                <td><?php echo $row['bank_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Bank Branch</th>
                                <td><?php echo $row['bank_branch'] ?></td>
                            </tr>
                            <tr>
                                <th>Authorised Signatory (ies)</th>
                                <td><?php echo $row['bank_signatory'] ?></td>
                            </tr>
                            <tr>
                                <th>Conditions of signing cheque</th>
                                <td><?php echo $row['bank_condition'] ?></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

