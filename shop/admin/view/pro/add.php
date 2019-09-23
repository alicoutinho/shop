<section id="main-content">
    <section class="wrapper">
        <form action="index.php?c=pro&a=add" method="post"  class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان محصول</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control round-input" name="frm[title]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">توضیحات</label>
                <div class="col-sm-10">
                    <textarea name="frm[text]"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تصویر۱</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control round-input" name="image1">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تصویر2</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control round-input" name="image2">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تصویر3</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control round-input" name="image3">
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">دسته بندی</label>
            <select class="col-sm-10" name="frm[cat_id]">
                <?php foreach ($pro as $value): ?>
                <option value="<?php echo $value['id'];?>"><?php echo $value['title'];?>  </option>
                <?php endforeach; ?>
            </select>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">تعداد</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control round-input" name="frm[count]">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">قیمت</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control round-input" name="frm[price]">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10">
                    <input type="submit" class="btn btn-xs btn-success" name="btn">
                </div>
            </div>
        </form>
    </section>
</section>