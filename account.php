<?php
   session_start(); 
   if(isset( $_SESSION['fullname'])) {
    $msg = $_SESSION['fullname'];
    $id = $_SESSION['customerId'];
   }else {
      header("login.php");
   } 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
      integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link id="mystyel" rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Red+Hat+Display:300,400,600,700&amp;lang=en"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="smart.js" async></script>
    <title>Smart Digital Wallet - Account</title>
  </head>

  <body>
    <!-- header container -->

    <div class="container container-smart">
      <div class="row">
        <div class="col-12">
          <nav>
            <center>
              <img
                id="smart-logo"
                src="images/smart-logo-01.png"
                height="110px"
              />
            </center>
            <br /><br />
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link mainMenu" href="dashboard.php"
                  ><img
                    id="imgDashboard"
                    src="images/dashboard-02.png"
                    height="20px"
                  />
                  <span>&nbsp; DASHBOARD</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mainMenu" href="account.php">
                  <img
                    id="imgAccount"
                    src="images/account-02.png"
                    height="20px"
                  /><span>&nbsp; ACCOUNTS</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link mainMenu" href="#">
                  <img
                    id="imgExchange"
                    src="images/exchange-02.png"
                    height="20px"
                  /><span>&nbsp; EXCHANGE</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mainMenu" href="#">
                  <img
                    id="imgRecipients"
                    src="images/recipients-02.png"
                    height="20px"
                  /><span>&nbsp; RECIPIENTS</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link mainMenu" href="#">
                  <img
                    id="imgRewards"
                    src="images/rewards-02.png"
                    height="20px"
                  /><span>&nbsp; REWARDS</span></a
                >
              </li>
            </ul>
            <br />
            <div style="margin-left: 30px">
              <img
                id="day-night-mode"
                onclick="toggleCss();"
                src="images/daymode.png"
                width="90 px"
              />
            </div>
          </nav>
          <article>
            <div class="row">
              <div class="col-6">
                <span class="bi bi-arrow-left chemp"> DASHBOARD/ ACCOUNT</span>
              </div>
              <div class="col-6">
                <div
                  class="dropdown"
                  style="display: flex; justify-content: flex-end"
                >
                  <!-- user drop down button  -->
                  <div class="navbar navbar-expand-lg" style="padding: 0%">
                    <button
                      class="navbar-toggler myBtn user-dropdown"
                      type="button"
                      aria-expanded="false"
                    ></button>
                    <div
                      class="collapse navbar-collapse"
                      id="navbarNavDropdown"
                    >
                      <ul class="navbar-nav" style="padding: 0%">
                        <li class="nav-item dropdown">
                          <a
                            class="nav-link bi bi-person-circle dropdown-toggle user-dropdown"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                          <?php  echo ( $msg ); ?>
                          </a>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink"
                          >
                            <a class="dropdown-item" href="profile.php?id=<?php echo $id ?>">Profile</a>
                            <a class="dropdown-item" href="change-password.php?id=<?php echo $id ?>"
                              >Change Password</a
                            >
                            <hr />
                            <a class="dropdown-item" href="login.php">Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 50px">
                <div class="col-8">
                  <?php
                    include ('connection.php');
                    $sql = "SELECT * FROM accounts WHERE customerId = $id and accountType = 'CAD'";
                    $resultSet = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($resultSet)){
                  ?>
                  <span class="subtitle">Current Balance</span>
                  <h2><?php echo $data['balance'] ?></h2>
                  <span class="italic-blue"><i><?php echo $data['accountNo'] ?></i></span>
                  <?php
                   }
                ?>
                </div>
                <div class="col-1 mt-auto">
                  <center>
                    <img src="images/fundaccount.png" width="50px" /><br />
                    <a href="#">FUND</a>
                  </center>
                </div>
                <div class="col-1 mt-auto">
                  <center>
                    <img src="images/movemoney.png" width="50px" /><br />
                    <a href="#">MOVE</a>
                  </center>
                </div>
                <div class="col-1 mt-auto">
                  <center>
                    <img src="images/sendmoney.png" width="50px" />
                    <a href="#">SEND</a>
                  </center>
                </div>
                <div class="col-1 mt-auto">
                  <center>
                    <img src="images/paybill.png" width="50px" />
                    <a href="#">BILLS</a>
                  </center>
                </div>
              </div>
            </div>
            <div><hr /></div>
            <br />
            <div class="row">
              <h4>Accounts Details</h4>
              <table class="table table-borderless light-table">
                <thead>
                  <tr>
                    <th scope="col">account #</th>
                    <th scope="col">Available Balance</th>
                    <th scope="col">Transaction Limit</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    include ('connection.php');
                    $sql = "SELECT * FROM accounts WHERE customerId = $id";
                    $resultSet = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($resultSet)){
                  ?>
                  <tr>
                    <td><?php echo $data['accountType'] . " " . $data['accountNo'] ?></td>
                    <td><?php echo $data['balance'] ?></td>
                    <td>2,000.00</td>
                  </tr>
                  <?php
                   }
                ?>
                </tbody>
              </table>
            </div>
            <br /><br /><br />
            <div class="row">
            <h4>Latest Transaction</h4>
              <table class="table light-table">
                <thead>
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col" width="50%">Transaction</th>
                    <th scope="col" class="text-end">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include ('connection.php');
                    $sql = "SELECT * FROM transactions WHERE customerId = $id";
                    $resultSet = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($resultSet)){
                  ?>
                  <tr>
                    <td><?php echo $data['date'] ?></td>
                    <td><?php echo "Transaction #" . $data['transId'] . " From your " . $data['accountType'] . " balance" ?> </td>
                    <td class="text-end"><?php echo $data['amount'] ?></td>
                  </tr>
                  <?php
                   }
                ?>
                </tbody>
              </table>
            </div>
          </article>
        </div>
      </div>
    </div>
    <!-- Body section -->
    <br /><br />
    <center>
      <p class="copyright">
        2023 © Smart Digital Wallet. Designed by Mohammed Enad.
      </p>
    </center>
  </body>
</html>
