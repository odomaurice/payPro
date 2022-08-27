<?php

include('./config/db.config.php');







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
        <title>Arkinvest||Dashboard</title>
    </head>
    <body>
        <input type="checkbox" name="" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span></span><span>Arkinvest</span></h2>
            </div>
            <div class="sidebar-menu">
                
   
                
                <ul>
                    <li>
                        <a  href="#"><span class="las la-user"></span><span> Hi,   </span></a>
                    </li>
                    <li>
                        <a class="active" href="#"><span class="las la-igloo"></span><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="las la-upload"></span><span>Deposit</span></a>
                        
                    </li>
                    <li>
                        <a  href="#"><span class="las la-download"></span><span>Withdrawal</span></a>
                    </li>
                    <li>
                        <a href="#tasks"><span class="las la-tasks"></span><span>Tasks</span></a>
                    </li>
                    <li>
                        <a href="investment_plans.php"><span class="las la-coins"></span><span>Investment Plans</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="las la-user-circle"></span><span>Account</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="las la-comments"></span><span>What's new?</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <h2>
                    
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <p> Welcome</p>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" name="" id="" placeholder="Search here">
                </div>
                <div class="user-wrapper">
                   
                    <div>
                        <button class="btn-outlined-orange"><a href="logout.php">Log out</a></button>
                        <span class="status green"></span>
                    </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>$0</h1>
                            <span>Current Balance</span>
                        </div>
                        <div>
                            <span class="las la-money-bill-alt"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>$0</h1>
                            <span>Total Deposits</span>
                        </div>
                        <div>
                            <span class="las la-clipboard feature-img"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>$0</h1>
                            <span>Total Withdraws</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag feature-img"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>$0</h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="las la-wallet"></span>
                        </div>
                    </div>
                    
                </div>

                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3> Recent Transactions</h3>
                                <button><a href="#tasks">See all</a><span class="las la-arrow-right"></span></button>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Deposits</td>
                                            <td>Withdraws</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="status"></span>
                                                
                                            </td>
                                        
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="status"></span>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <span class="status"></span>
                                                
                                            </td>
                                        </tr>
                                         
                                        
                                        
                                         
                                            
                                    </tbody>

                                </table>
                            </div>

                        </div>

                        </div>

                    </div>
                    
                            
<div class="m-0 p-3 bg-primary text-hover-orange">
  &copy ARKINVEST 2022
</div>  
                            
                            
                </main>
                </div>

<!-- <div class="m-3 p-10 bg-primary text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->

                

                
    </body>
    </html>