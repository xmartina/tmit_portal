<div class='page-title'>
  <div>
    <h1><i class='fa fa-laptop'></i> Behavioral Analysis</h1>
    <p>Export Excel Behavioral Sheet</p>
  </div>
  <div>
    <ul class='breadcrumb'>
      <li><a href='teacher_dashboard.php'><i class='fa fa-home fa-lg'></i></a></li>
      <li><a href='#'>Students Behavioral Analysis</a></li>
      <li><a href='#'>Export Excel Analysis File</a></li>
    </ul>
  </div>
</div>

<div class='card'>
   <?php
        if(isset($msg)){
            echo $msg;
        }
    ?>
    <div class='panel panel-primary'>
        <div class='panel-heading'>
            <h4 class='text-center'>Export Excel Analysis File</h4>
        </div>
        <div class='panel-body'>
            <p class="text-danger">Export Excel Sheet and Save As CSV before upload</p>
            <form method='POST' action='teacher_conduct_export_PHPExcel.php'>
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='input-group'>
                            <span class='input-group-addon' id='basic-addon2'>Class:</span>
                            <select class='form-control' name='class'>
                                <option selected ><?php echo $select; ?></option>
                                    <?php
                                        $query = " SELECT * FROM `classes` ";
                                        $run_query = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($run_query) > 0){
                                            while($result = mysqli_fetch_assoc($run_query)){
                                                $attendance = $result['classes'];
                                                echo"
                                                    <option>{$attendance}</option>
                                                ";
                                            }
                                        }
                                    ?>
                            </select>
                        </div>
                        <br />
                    </div>

                    <div class='col-md-3'>
                        <div class='input-group'>
                            <span class='input-group-addon' id='basic-addon2'>Term:</span>
                            <select class='form-control' name='term'>
                                <option selected ><?php echo $select; ?></option>
                                <?php
                                    $term_array = array("First Term", "Second Term", "Third Term");

                                    foreach($term_array as $term){
                                        echo "<option>{$term}</option><br>";
                                    }
                                ?>
                            </select>
                        </div>
                        <br />
                    </div>

                    <div class='col-md-3'>
                        <div class='input-group'>
                            <span class='input-group-addon' id='basic-addon2'>Session:</span>
                            <select class='form-control' name='session'>
                                    <?php
                                        ///////////// POST ACTION TO DISPLAY CURRENT SESSION //////////////
                                        $query = " SELECT * FROM `current_season` ";
                                        $run_query = mysqli_query($connection, $query);
                                        if(mysqli_num_rows($run_query) == 1){
                                            while($result = mysqli_fetch_assoc($run_query)){
                                                $show_current_session = $result['current_session'];
                                                echo"
                                                    <option>{$show_current_session}</option>
                                                ";
                                            }
                                        }
                                    ?>
                            </select>
                        </div>
                        <br />
                    </div>
                    
                    <div class='col-md-3'>
                        <input type='submit' name='teacher_export_conduct_btn' value='EXPORT CONDUCT SHEET' class='btn btn-primary' />
                    </div>
                </div>
            </form>
            <br />
        </div>
    </div>
</div>