<section id="main-content">
    <section class="wrapper">
        <table class="table table-striped border-top dataTable" id="sample_1" aria-describedby="sample_1_info">
            <thead>
            <tr role="row"><th style="width: 13px;" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                                            ">
                    ردیف</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 500px;">
           عنوان دسته بندی </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px;">
                           </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Points: activate to sort column ascending" style="width: 124px;">
                           </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Joined: activate to sort column ascending" style="width: 186px;">
                            </th>
                    <th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 194px;"></th></tr>
            </thead>
            <?php foreach ($procatlist as $value):?>
            <tr class="gradeX odd">
                <td class=" "><?php echo  $value['id'];?></td>
                <td class=" "><?php echo  $value['title'];?></td>
                <td class="hidden-phone "><a href="" class="label label-success">نمایش</a></td>
                <td class="hidden-phone "><a href="index.php?c=procat&a=edit&id=<?php echo $value['id']; ?>" class="label label-info">ویرایش</a></td>
                <td class="hidden-phone "><a href="index.php?c=procat&a=delete&id=<?php echo $value['id']; ?>" class="label label-danger">حذف</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody></table>
    </section>
</section>


