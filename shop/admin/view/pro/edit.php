<section id="main-content">
    <section class="wrapper">
        <form action="index.php?c=pro&a=edit&id=<?php echo $showedit['id'];?>" method="post"  class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">عنوان دسته بندی</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control round-input" name="frm[title]" value="<?php echo $showedit['title'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">سرگروه</label>
                <select class="col-sm-10" name="frm[chid]">
                    <option value="0">سرگروه  </option>
                    <?php foreach ($pro as $value): ?>
                        <option value="<?php echo $value['id'];?>"><?php echo $value['title'];?>  </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <div class="col-lg-10">
                    <input type="submit" class="btn btn-xs btn-success" name="btn">
                </div>
            </div>
        </form>
    </section>
</section>
