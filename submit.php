<?php


include('./config/db.config.php');



$plan = $paid_from = $amount = '';
$errors = array('plan' => '', 'paid_from' => '', 'amount' => '');

if (isset($_POST['submit'])) {

    // check plan
    if (empty($_POST['plan'])) {
        $errors['plan'] = 'field is required <br/>';
    } else {
        $plan = $_POST['plan'];
    }
    //check paid_from

    if (empty($_POST['paid_from'])) {
        $errors['paid_from'] = 'field is required <br/>';
    } else {
        $paid_from = $_POST['paid_from'];
    }

    if (empty($_POST['amount'])) {
        $errors['paid_from'] = 'field is required <br/>';
    } else {
        $amount = $_POST['amount'];
    }





    if (array_filter($errors)) {
        //echo "errors in the form";
    } else {
        $plan = mysqli_real_escape_string($conn, $_POST['plan']);
        $paid_from = mysqli_real_escape_string($conn, $_POST['paid_from']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);
        




        //create sql

        $sql = "INSERT INTO payment_plan(plan,paid_from,amount,created_at) VALUES('$plan', '$paid_from', '$amount')";

        //save to DB and check
        if (mysqli_query($conn, $sql)) {
            //success
            header('Location: submit.php');
        } else {
            //error
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}

if (isset($_GET['id'])) {

    // escape sql chars
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM payment_plan WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $payment_plan = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}






?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Arkinvest||Submit</title>
</head>

<body class="justify-center">

    <div class="sticky-top text-blue bg-dark header-submit text-hover-purple">
        <h5>ARKINVEST</h5>

        <div>
            <button class="btn btn-outline-primary text-hover-white"><a href="/logout">Log out</a></button>
            <span class="status green"></span>
        </div>
    </div>
    </div>


    <form class="form" action="submit.php" method="post">
        <h3 class="mt-2 text-hover-blue p-3">Choose Plan</h3>
        <div class="form-group justify-center">
            <div class="Container  m-3 p-3 justify-center">

                <label>Choose Plan:</label>
                <input class=" text-blue" name="plan" type="text" value="<?php echo htmlspecialchars($plan) ?>"> <br><br>
                <div class="text-danger"><?php echo $errors['plan']; ?></div>

                <label>Amount:</label>
                <input class=" text-blue" name="amount" type="number" value="<?php echo htmlspecialchars($amount) ?>" /><br><br>
                <div class="text-danger"><?php echo $errors['amount']; ?></div>
                <br>


                <button class="btn waves-effect waves-light" type="submit" name="submit">
                    <a style="text-decoration: none ;" href="#payment_final">Proceed to pay</a>
                </button><br><br>


                <div class="recent-grid justify-center ml-5">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3> Recent Transactions</h3>
                                <!-- <button><a href="#tasks">See all</a><span class="las la-arrow-right"></span></button> -->

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">

                                        <tr>
                                            <th>Package</th>
                                            <th>Amount</th>
                                            
                                            
                                        </tr>
                                        
                                            <tr>
                                                <td><?php echo htmlspecialchars($plan); ?></td>
                                                <td><?php echo htmlspecialchars($amount); ?></td>
                                                
                                            </tr>
                                        

                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>

                    </main>
                </div>

                <div class="card text-center">
                    <div class="card-header">
                        Payment methods:
                    </div>
                    <div id="payment_final" class="card-body">
                        <img src="images/qr.jpg" alt="" width="100px">
                        <p class="card-text">Please pay exactly <?php echo htmlspecialchars($amount); ?>btc to</p>
                        <p class="card-text text-hover-blue">bc1qu33hhkf8gx80qen8jafem93kwx4g346909w8kq</p>

                    </div>

                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary p-2 m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit Payment Details
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Submit Payment details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="mailto:odomaurice501@gmail.com" method="post">
                                    <label for="">Transaction Id*</label>
                                    <input type="text" name="" id=""><br><br>
                                    <label for="">Date Of Payment*</label>
                                    <input type="date" name="" id=""><br><br>
                                    <label for="">Payment proof</label>
                                    <input type="file" name="" id="">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- <div class="m-3 p-10 bg-primary text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->




</body>

</html>