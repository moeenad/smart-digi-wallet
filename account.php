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
    <title></title>
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
                <a class="nav-link mainMenu" href="dashboard.html"
                  ><img
                    id="imgDashboard"
                    src="images/dashboard-02.png"
                    height="20px"
                  />
                  <span>&nbsp; DASHBOARD</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mainMenu" href="#">
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
                  class="btn-group"
                  style="display: flex; justify-content: flex-end; padding: 0"
                >
                  <button
                    type="button"
                    class="bi bi-person-circle user-dropdown dropdown-toggle"
                    aria-expanded="false"
                  >
                    USER NAME
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Change Password</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row" style="margin-top: 50px">
                <div class="col-8">
                  <span class="subtitle">Current Balance</span>
                  <h2>1,830.35 CAD</h2>
                  <span class="italic-blue"><i>1234567890</i></span>
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
                    <th scope="col">CAD account #</th>
                    <th scope="col">Available Balance</th>
                    <th scope="col">Transaction Limit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1234567890</td>
                    <td>$1830.35</td>
                    <td>2,000.00</td>
                  </tr>
                </tbody>
              </table>
              <hr />
              <table class="table table-borderless light-table">
                <thead>
                  <tr>
                    <th scope="col">USA account #</th>
                    <th scope="col">Available Balance</th>
                    <th scope="col">Transaction Limit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1234567890</td>
                    <td>$530.70</td>
                    <td>1,000.00</td>
                  </tr>
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
                    <th scope="col" class="text-end">Balance</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>20 Feb 2023</td>
                    <td>Transaction #12345 From your CAD balance</td>
                    <td class="text-end">20.00</td>
                    <td class="text-end">1830.35</td>
                  </tr>
                  <tr>
                    <td>20 Feb 2023</td>
                    <td>Transaction #12345 From your CAD balance</td>
                    <td align="right">150.00</td>
                    <td align="right">1850.35</td>
                  </tr>
                  <tr>
                    <td>19 Feb 2023</td>
                    <td>Transaction #12345 From your USA balance</td>
                    <td align="right">230.00</td>
                    <td align="right">530.70</td>
                  </tr>
                  <tr>
                    <td>18 Feb 2023</td>
                    <td>Transaction #12345 From your USA balance</td>
                    <td align="right">10.00</td>
                    <td align="right">760.70</td>
                  </tr>
                  <tr>
                    <td>16 Feb 2023</td>
                    <td>Transaction #12345 From your CAD balance</td>
                    <td align="right">30.00</td>
                    <td align="right">2000.35</td>
                  </tr>
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
