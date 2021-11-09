<?php if(!isset($_SESSION['name'])){
  header('location:' . URLROOT . '/users/login');
} ?>

<?php 


include "includes/top.php"; 



?>

 
<?php include "includes/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "includes/sidebar.php"; ?>
    
    


    <!-- Icon Cards-->
    <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5"><?php echo($a['reviews']);?> Reviews!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT?>/pages/reviews">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo($a['users']) ?> users!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT?>/pages/customers">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo($a['orders']) ?> Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT?>/pages/orders">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5"><?php echo($a['products']) ?> Products!</div>

                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo URLROOT?>/products/product">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>


      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <div id="chart_div" style="width: 100%; height: 500px;"></div>


      


      <h2>Other Admins</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="admin_list">
          <?php foreach($data as $admin){ ?>

          
            <tr>
              <td><?php echo($admin->id_admin) ?></td>
              <td><?php echo($admin->adminname) ?></td>
              <td><?php echo($admin->email) ?></td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "includes/footer.php"; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', 'Sales'],
          ['01',  <?php echo($dump['1']); ?>  ],
          ['02',  <?php echo($dump['2']); ?>  ],
          ['03',  <?php echo($dump['3']); ?>     ],
          ['04',  <?php echo($dump['4']); ?>     ],
          ['05',  <?php echo($dump['5']); ?>     ],
          ['06',  <?php echo($dump['6']); ?>      ],
          ['07',  <?php echo($dump['7']); ?>      ],
          ['08',  <?php echo($dump['8']); ?>      ],
          ['09',  <?php echo($dump['9']); ?>      ],
          ['10',  <?php echo($dump['10']); ?>      ],
          ['11',  <?php echo($dump['11']); ?>     ],
          ['12',  <?php echo($dump['12']); ?>      ],
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: '2021',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/admin.js"></script>
