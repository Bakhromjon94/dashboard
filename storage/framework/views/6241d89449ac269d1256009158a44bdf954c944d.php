<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Saas'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Bosh sahifa <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Savdolar xisoboti <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"> Do'kondagi savdo qilingan mahsulotlar </h4>
                    <br>

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Mahsulot turi</th>
                            <th>Mahsulot nomi / operativkasi / hotirasi</th>
                            <th>Miqdori</th>
                            <th>Haridor</th>
                            <th>Pasport №</th>
                            <th>Plastik №</th>
                            <th>To'lov turi</th>
                            <th>Sotuvdagi qiymati</th>
                            <th>Boshlang'ich to'lov</th>
                            <th>Muddat</th>
                            <th>Oylik to'lov</th>
                            <th>Jadvalga muvofiq qarzorlik</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>Smartfon</td>
                            <td>Смартфон Apple iPhone 11 / 4 / 128 GB </td>
                            <td> 1 </td>
                            <td>Ahmadjonov Bahrom</td>
                            <td>AA0142783</td>
                            <td>8600312963442</td>
                            <td>Nasiya</td>
                            <td>10 000 000</td>
                            <td>1 000 000</td>
                            <td>2023/05/04</td>
                            <td>1 200 000</td>
                            <td> - </td>

                        </tr>
                        <tr>
                            <td>Smartfon</td>
                            <td>Смартфон Apple iPhone 11 / 4 / 64 GB </td>
                            <td>7 </td>
                            <td>Ahmadjonov Bahodir</td>
                            <td>AA0151515</td>
                            <td>860031312486</td>
                            <td>Naqd</td>
                            <td>10 000 000</td>
                            <td>10 000 000</td>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
    <!-- Datatable init js -->
    <script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm-edu\resources\views/trade.blade.php ENDPATH**/ ?>