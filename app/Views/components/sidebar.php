<div class="sidebar-box pt-md-4">
  <form action="#" class="search-form">
    <div class="form-group">
      <span class="icon icon-search"></span>
      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
  </form>
</div>
<div class="sidebar-box ftco-animate">
  <h3 class="sidebar-heading">Categorias</h3>
  <ul class="categories">
    <?php if (count($categories)): ?>
      <?php foreach ($categories as $category): ?>
        <li><a href="<?php echo site_url('blog/category/'.$category->id); ?>"><?php echo $category->name ?><span>(<?php echo $category->num_posts ?>)</span></a></li>
      <?php endforeach ?>
    <?php else: ?>
      <li><a href="#">No hay categorias <span>(0)</span></a></li>
    <?php endif ?>
  </ul>
</div>