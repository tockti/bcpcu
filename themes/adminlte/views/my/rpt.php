<script src="js/excellentexport.js"></script>

<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $sql ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo $this->createUrl('route'); ?>"> หน้าหลัก </a></li>

            <li class="active">ปัจจุบัน</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-danger">                   
            <div class="box-body">
                <!-- พื้นที่ content-->
                
                    <form method="POST">
                        วันเริ่ม: 
                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => 'd1',
                            'value' => $d1,
                            'options' => array(
                                'dateFormat' => 'yy-mm-dd',
                                'changeMonth' => true,
                                'changeYear' => true,
                                'yearRange' => '2012:2020',
                                'minDate' => '2012-01-01', // minimum date
                                'maxDate' => '2020-12-31', // maximum date                           
                                'showButtonPanel' => true,
                                'autoSize' => true,
                            ),
                            'htmlOptions' => array(
                            ),
                        ));
                        ?>
                        วันสิ้นสุด: 

                        <?php
                        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                            'name' => 'd2',
                            'value' => $d2,
                            'options' => array(
                                'dateFormat' => 'yy-mm-dd',
                                'changeMonth' => true,
                                'changeYear' => true,
                                'yearRange' => '2012:2020',
                                'minDate' => '2012-01-01', // minimum date
                                'maxDate' => '2020-12-31', // maximum date                           
                                'showButtonPanel' => true,
                                'autoSize' => true,
                            ),
                            'htmlOptions' => array(
                            ),
                        ));
                        ?>

                        <input type="submit" value="ประมวลผล" class="btn btn-flat btn-danger">
  <a href="#" download="somedata.xls" class="btn btn-flat btn-warning" onclick="return ExcellentExport.excel(this, 'data', 'Sheet Name Here')">Excel</a>

                    </form>
                <br>
               

                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'rpt-grid',
                    'dataProvider' => $model,
                ));
                ?>


                <?php
                $data = $model->getdata();
                //print_r($data[0]);
                ?>
                <table id="data" style="display: none">
                    <tr><td>ชื่อ</td><td>สกุล</td><td>อายุ</td></tr>
                    <?php
                    foreach ($data as $value):
                        ?>
                        <tr><td><?= $value['fname'] ?></td><td><?= $value['lname'] ?></td><td><?= $value['age'] ?></td></tr>
                    <?php endforeach; ?>
                </table>



                <!-- จบพื้นที่ content-->
            </div><!-- /.box-body -->
        </div><!-- /.box -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->

